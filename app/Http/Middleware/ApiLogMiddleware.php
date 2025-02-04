<?php

namespace App\Http\Middleware;

use App\Models\ApiLog;
use App\Models\UserAgent;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ApiLogMiddleware
{

    private static ?ApiLog $apiLog = null;

    public function handle(Request $request, Closure $next): mixed {
        try {
            $userAgent    = UserAgent::firstOrCreate(['user_agent' => substr(Str::ascii($request->userAgent()), 0, 255)]);
            self::$apiLog = ApiLog::create([
                                               'method'        => $request->method(),
                                               'route'         => Route::getCurrentRoute()?->uri() ?? 'unknown',
                                               'user_agent_id' => $userAgent->id,
                                           ]);

        } catch (Exception $exception) {
            report($exception);
        }
        return $next($request);
    }

    public function terminate(Request $request, $response): void {
        try {
            if (self::$apiLog === null) {
                return;
            }
            self::$apiLog->update([
                                      'status_code' => $response->getStatusCode(),
                                  ]);
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
