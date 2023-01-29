<?php


namespace App\Http\Controllers\API\v1;

use App\Enum\StatusVisibility;
use App\Http\Controllers\Backend\Transport\StatusTagController as StatusTagBackend;
use App\Http\Resources\StatusTagResource;
use App\Models\Status;
use App\Models\StatusTag;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\ValidationException;
use function auth;

class StatusTagController extends Controller
{

    /**
     * @OA\Get(
     *      path="/statuses/{statusId}/tags",
     *      operationId="getTagsForStatus",
     *      tags={"Status"},
     *      summary="Show all tags for a status which are visible for the current user",
     *      description="Returns a collection of all visible tags for the given status, if user is authorized to see
     *      it",
     *      @OA\Parameter (
     *          name="statusId",
     *          in="path",
     *          description="Status-ID",
     *          example=1337,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              @OA\Property (
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/components/schemas/StatusTag")
     *              )
     *          )
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       @OA\Response(response=404, description="No status found for this id"),
     *       @OA\Response(response=403, description="User not authorized to access this status"),
     *       security={
     *           {"token": {}},
     *           {}
     *       }
     *     )
     *
     * Show all tags for a status which are visible for the current user
     *
     * @param int $statusId
     *
     * @return JsonResponse
     */
    public function index(int $statusId): JsonResponse {
        try {
            $status = Status::findOrFail($statusId);
            return $this->sendResponse(
                data: StatusTagResource::collection(StatusTagBackend::getVisibleTagsForUser($status, auth()->user())),
            );
        } catch (ModelNotFoundException) {
            return $this->sendError(
                error: 'No status found for this id',
            );
        }
    }

    /**
     * @OA\Put(
     *      path="/statuses/{statusId}/tags/{tagKey}",
     *      operationId="updateSingleStatusTag",
     *      tags={"Status"},
     *      summary="Update a StatusTag",
     *      description="Updates a single StatusTag Object, if user is authorized to",
     *      @OA\Parameter (
     *          name="statusId",
     *          in="path",
     *          description="Status-ID",
     *          example=1337,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Parameter (
     *          name="tagKey",
     *          in="path",
     *          description="Key of StatusTag",
     *          example="seat",
     *          @OA\Schema(type="string")
     *      ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 ref="#/components/schemas/StatusTag"
     *             )
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              @OA\Property (
     *                  property="data",
     *                  type="object",
     *                  ref="#/components/schemas/StatusTag"
     *              )
     *          )
     *       ),
     * @OA\Response(response=400, description="Bad request"),
     * @OA\Response(response=404, description="No status found for this id"),
     * @OA\Response(response=403, description="User not authorized to manipulate this status"),
     *       security={
     *           {"token": {}},
     *           {}
     *       }
     *     )
     *
     * @param Request $request
     * @param int     $statusId
     * @param string  $tagKey
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $statusId, string $tagKey): JsonResponse {
        $validated = $request->validate([
                                            'key'        => ['nullable', 'string', 'max:255'],
                                            'value'      => ['required', 'string', 'max:255'],
                                            'visibility' => ['nullable', Rule::in(StatusVisibility::keys())],
                                        ]);

        try {
            $status    = Status::findOrFail($statusId);
            $statusTag = $status->tags->where('key', $tagKey)->first();
            if ($statusTag === null) {
                throw new ModelNotFoundException();
            }
            $this->authorize('update', $statusTag);
            if (isset($validated['visibility'])) {
                $validated['visibility'] = StatusVisibility::fromName($validated['visibility']);
            }
            $statusTag->update($validated);
            return $this->sendResponse(data: new StatusTagResource($statusTag));
        } catch (AuthorizationException) {
            return $this->sendError(
                error: 'User not authorized to manipulate this StatusTag',
            );
        } catch (ModelNotFoundException) {
            return $this->sendError(
                error: 'No StatusTag found for given arguments',
            );
        }
    }


    /**
     * @OA\Post(
     *      path="/statuses/{statusId}/tags",
     *      operationId="createSingleStatusTag",
     *      tags={"Status"},
     *      summary="Create a StatusTag",
     *      description="Creates a single StatusTag Object, if user is authorized to",
     *      @OA\Parameter (
     *          name="statusId",
     *          in="path",
     *          description="Status-ID",
     *          example=1337,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\RequestBody(
     *          required=true
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                          property="key",
     *                          type="string"
     *              ),
     *              @OA\Property(
     *                          property="value",
     *                          type="string"
     *              ),
     *              @OA\Property(
     *                          property="visibility",
     *                          type="integer"
     *              ),
     *          )
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       @OA\Response(response=404, description="No status found for this id"),
     *       @OA\Response(response=403, description="User not authorized to manipulate this status"),
     *       security={
     *           {"token": {}},
     *           {}
     *       }
     *     )
     *
     * @param Request $request
     * @param int     $statusId
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request, int $statusId): JsonResponse {
        $validator = Validator::make($request->all(), [
            'key'        => ['required', 'string', 'max:255'],
            'value'      => ['required', 'string', 'max:255'],
            'visibility' => ['required', new Enum(StatusVisibility::class)],
        ]);

        if ($validator->fails()) {
            return $this->sendError(error: $validator->errors(), code: 400);
        }
        $validated = $validator->validate();

        try {
            $status = Status::findOrFail($statusId);

            if ($status->tags->where('key', $validated['key'])->count() > 0) {
                return $this->sendError(
                    error: 'StatusTag with this key already exists',
                    code:  400,
                );
            }
            $this->authorize('update', $status);
            $validated['status_id'] = $status->id;
            $statusTag              = StatusTag::create($validated);
            return $this->sendResponse(data: new StatusTagResource($statusTag));
        } catch (AuthorizationException) {
            return $this->sendError(
                error: 'User not authorized to manipulate this Status',
            );
        } catch (ModelNotFoundException) {
            return $this->sendError(
                error: 'No status found for this id',
            );
        }
    }

    /**
     * @OA\Delete(
     *      path="/statuses/{statusId}/tags/{tagKey}",
     *      operationId="destroySingleStatusTag",
     *      tags={"Status"},
     *      summary="Destroy a StatusTag",
     *      description="Deletes a single StatusTag Object, if user is authorized to",
     *      @OA\Parameter (
     *          name="statusId",
     *          in="path",
     *          description="Status-ID",
     *          example=1337,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Parameter (
     *          name="tagKey",
     *          in="path",
     *          description="Key of StatusTag",
     *          example="seat",
     *          @OA\Schema(type="string")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              ref="#/components/schemas/SuccessResponse"
     *          )
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *       @OA\Response(response=404, description="No status found for this id and statusId"),
     *       @OA\Response(response=403, description="User not authorized to manipulate this status"),
     *       security={
     *           {"token": {}},
     *           {}
     *       }
     *     )
     *
     * @param int    $statusId
     * @param string $tagKey
     *
     * @return JsonResponse
     */
    public function destroy(int $statusId, string $tagKey): JsonResponse {
        try {
            $status    = Status::findOrFail($statusId);
            $statusTag = $status->tags->where('key', $tagKey)->first();
            if ($statusTag === null) {
                throw new ModelNotFoundException();
            }
            $this->authorize('destroy', $statusTag);
            $statusTag->delete();
            return $this->sendResponse();
        } catch (AuthorizationException) {
            return $this->sendError(
                error: 'User not authorized to manipulate this StatusTag',
            );
        } catch (ModelNotFoundException) {
            return $this->sendError(
                error: 'No StatusTag found for this arguments',
            );
        }
    }
}