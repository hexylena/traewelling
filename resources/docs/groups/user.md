# User
Stuff for the user I guess

## Leaderboard
Gets the leaderboard for friends, kilometers and users.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v0/user/leaderboard" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v0/user/leaderboard"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (400, Bad Request The parameters are wrong or not given.):

```json
<Binary data> -  empty response
```
> Example response (401, Unauthorized. Will be returned by the server if no user was logged in or wrong credentials were supplied.):

```json
<Binary data> -  empty response
```
> Example response (200):

```json
{
    "users": [
        {
            "username": "testuser",
            "train_duration": "90",
            "train_distance": "26711.37",
            "points": "1337"
        }
    ],
    "friends": [
        {
            "username": "testuser",
            "train_duration": "90",
            "train_distance": "26711.37",
            "points": "1337"
        }
    ],
    "kilometers": [
        {
            "username": "testuser",
            "train_duration": "90",
            "train_distance": "26711.37",
            "points": "1337"
        }
    ]
}
```
> Example response (406, Not Acceptable The privacy agreement has not yet been accepted.):

```json
{
    "error": "Privacy agreement not yet accepted!",
    "updated": "2019-11-04 20:07:00",
    "german": "string",
    "english": "string"
}
```
<div id="execution-results-GETapi-v0-user-leaderboard" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v0-user-leaderboard"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v0-user-leaderboard"></code></pre>
</div>
<div id="execution-error-GETapi-v0-user-leaderboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v0-user-leaderboard"></code></pre>
</div>
<form id="form-GETapi-v0-user-leaderboard" data-method="GET" data-path="api/v0/user/leaderboard" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v0-user-leaderboard', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v0-user-leaderboard" onclick="tryItOut('GETapi-v0-user-leaderboard');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v0-user-leaderboard" onclick="cancelTryOut('GETapi-v0-user-leaderboard');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v0-user-leaderboard" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v0/user/leaderboard</code></b>
</p>
<p>
<label id="auth-GETapi-v0-user-leaderboard" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v0-user-leaderboard" data-component="header"></label>
</p>
</form>


## Get User

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v0/user/gertrud123" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v0/user/gertrud123"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (400, Bad Request The parameters are wrong or not given.):

```json
<Binary data> -  empty response
```
> Example response (401, Unauthorized. Will be returned by the server if no user was logged in or wrong credentials were supplied.):

```json
<Binary data> -  empty response
```
> Example response (404, Not found The parameters in the request were valid, but the server did not find a corresponding object.):

```json
<Binary data> -  empty response
```
> Example response (200):

```json
{
    "username": "testuser",
    "twitterUrl": "https:\/\/twitter.com\/traewelling",
    "mastodonUrl": "https:\/\/chaos.social\/traewelling",
    "statuses": {
        "current_page": 1,
        "data": [
            {
                "id": 10,
                "created_at": "2019-11-24 15:44:16",
                "updated_at": "2019-11-24 15:44:16",
                "body": "This is my first checkin!",
                "type": "hafas",
                "event_id": 1,
                "likes_count": 15,
                "favorited": true,
                "user": {
                    "id": 1,
                    "name": "J. Doe",
                    "username": "jdoe",
                    "train_distance": "454.59",
                    "train_duration": "317",
                    "points": "66",
                    "averageSpeed": 100.5678954
                },
                "train_checkin": {
                    "id": 0,
                    "status_id": 10,
                    "trip_id": "1|1937395|17|80|24112019",
                    "origin": {
                        "id": 3,
                        "ibnr": "8079041",
                        "name": "Karlsruhe Bahnhofsvorplatz",
                        "latitude": 48.994348,
                        "longitude": 48.994348
                    },
                    "destination": {
                        "id": 3,
                        "ibnr": "8079041",
                        "name": "Karlsruhe Bahnhofsvorplatz",
                        "latitude": 48.994348,
                        "longitude": 48.994348
                    },
                    "distance": 3.606,
                    "departure": "2019-11-24 15:44:16",
                    "arrival": "2019-11-24 15:44:16",
                    "points": 3,
                    "delay": 0,
                    "hafas_trip": {
                        "id": 16,
                        "trip_id": "1|1937395|17|80|24112019",
                        "category": "bus",
                        "number": "bus-62",
                        "linename": "62",
                        "origin": "8079041",
                        "destination": "8079041",
                        "stopovers": "[{\"stop\":{\"type\":\"stop\",\"id\":\"8079041\",\"name\":\"Karlsruhe Bahnhofsvorplatz\",\"location\":{\"type\":\"location\",\"id\":\"8079041\",\"latitude\":48.994348,\"longitude\":8.399583},\"products\":{\"nationalExpress\":true,\"national\":true,\"regionalExp\":true,\"regional\":true,\"suburban\":true,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":true}},\"arrival\":null,\"arrivalDelay\":null,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:50:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null,\"remarks\":[{\"type\":\"hint\",\"code\":\"text.journeystop.product.or.direction.changes.stop.message\",\"text\":\"As Bus 62 heading towards 62 Entenfang >70 from here\"}]},{\"stop\":{\"type\":\"stop\",\"id\":\"362191\",\"name\":\"Ebertstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"362191\",\"latitude\":48.994519,\"longitude\":8.395395},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":true,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T15:51:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:51:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"377218\",\"name\":\"Welfenstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"377218\",\"latitude\":48.99531,\"longitude\":8.386118},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T15:53:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:53:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721329\",\"name\":\"Beiertheim West, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721329\",\"latitude\":48.994896,\"longitude\":8.382693},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:54:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:54:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721468\",\"name\":\"Windeckstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721468\",\"latitude\":48.99122,\"longitude\":8.371016},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":true}},\"arrival\":\"2019-11-24T15:55:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:55:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"723868\",\"name\":\"Hardecksiedlung, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"723868\",\"latitude\":48.992262,\"longitude\":8.368813},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T15:56:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:56:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721437\",\"name\":\"Schwimmschulweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721437\",\"latitude\":48.994653,\"longitude\":8.364247},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:57:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:57:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721380\",\"name\":\"Hornisgrindestra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721380\",\"latitude\":48.995966,\"longitude\":8.360409},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:58:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:58:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721349\",\"name\":\"Edelbergstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721349\",\"latitude\":48.996865,\"longitude\":8.354071},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:59:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:59:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721458\",\"name\":\"Wattkopfstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721458\",\"latitude\":48.994573,\"longitude\":8.351635},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:00:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:00:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721333\",\"name\":\"Bernsteinstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721333\",\"latitude\":48.991912,\"longitude\":8.348363},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:01:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:01:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721350\",\"name\":\"Eichelbergstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721350\",\"latitude\":48.99353,\"longitude\":8.345109},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:02:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:02:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721455\",\"name\":\"T\\u00dcV, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721455\",\"latitude\":48.996667,\"longitude\":8.348426},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:03:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:03:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"723629\",\"name\":\"St. Josef Kirche, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"723629\",\"latitude\":48.998851,\"longitude\":8.348615},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:04:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:04:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721346\",\"name\":\"Durmersheimer Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721346\",\"latitude\":49.000514,\"longitude\":8.350619},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:05:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:05:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"723802\",\"name\":\"Sinner (Durmersheimer Stra\\u00dfe), Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"723802\",\"latitude\":49.002663,\"longitude\":8.35506},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:06:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:06:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721415\",\"name\":\"Gr\\u00fcnwinkel Friedhof, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721415\",\"latitude\":49.005521,\"longitude\":8.356103},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:07:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:07:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721339\",\"name\":\"Blohnstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721339\",\"latitude\":49.007346,\"longitude\":8.356417},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:08:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:08:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null,\"remarks\":[{\"type\":\"hint\",\"code\":\"text.journeystop.product.or.direction.changes.stop.message\",\"text\":\"As Bus 62 heading towards 70 Heidehof from here\"}]},{\"stop\":{\"type\":\"stop\",\"id\":\"363851\",\"name\":\"Entenfang, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"363851\",\"latitude\":49.010609,\"longitude\":8.359501},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":true,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":true}},\"arrival\":\"2019-11-24T16:10:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:12:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null,\"remarks\":[{\"type\":\"hint\",\"code\":\"text.journeystop.product.or.direction.changes.stop.message\",\"text\":\"As Bus 70 heading towards 70 Heidehof from here\"}]},{\"stop\":{\"type\":\"stop\",\"id\":\"721398\",\"name\":\"K\\u00e4rcherstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721398\",\"latitude\":49.015895,\"longitude\":8.361559},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:14:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:14:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"373522\",\"name\":\"Hertzstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"373522\",\"latitude\":49.020246,\"longitude\":8.364984},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T16:15:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:15:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721326\",\"name\":\"Barbaraweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721326\",\"latitude\":49.023967,\"longitude\":8.365946},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:15:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:15:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721410\",\"name\":\"Madenburgweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721410\",\"latitude\":49.027051,\"longitude\":8.36546},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:16:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:16:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721332\",\"name\":\"Berliner Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721332\",\"latitude\":49.03026,\"longitude\":8.364939},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:17:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:17:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721364\",\"name\":\"Germersheimer Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721364\",\"latitude\":49.032894,\"longitude\":8.364858},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:17:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:17:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721462\",\"name\":\"Wei\\u00dfenburger Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721462\",\"latitude\":49.036957,\"longitude\":8.366989},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:18:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:18:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721436\",\"name\":\"Schweigener Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721436\",\"latitude\":49.03844,\"longitude\":8.369586},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:19:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:19:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721385\",\"name\":\"Kaiserslauterner Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721385\",\"latitude\":49.036687,\"longitude\":8.374153},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:20:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:20:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721900\",\"name\":\"Neureut Flughafenstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721900\",\"latitude\":49.036139,\"longitude\":8.380535},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:21:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:21:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721172\",\"name\":\"Neureut Rosmarinweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721172\",\"latitude\":49.035482,\"longitude\":8.385605},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:22:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:22:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"377009\",\"name\":\"Heidehof, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"377009\",\"latitude\":49.031536,\"longitude\":8.387008},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T16:23:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":null,\"departureDelay\":null,\"departurePlatform\":null}]",
                        "polyline": "cac715508e44ae253f424562fe5d286e",
                        "departure": "2019-11-24 15:44:16",
                        "arrival": "2019-11-24 15:44:16",
                        "delay": 0
                    }
                },
                "event": {
                    "id": 1,
                    "name": "Weihnachten 2019",
                    "slug": "weihnachten_2019",
                    "hashtag": "MerryTräwellingMas",
                    "host": "Welt",
                    "url": "https:\/\/www.weihnachten.de\/",
                    "trainstation": "8079041",
                    "begin": "2019-12-24 00:00:00",
                    "end": "2019-12-24 23:59:59"
                }
            }
        ],
        "first_page_url": "https:\/\/traewelling.de\/api\/v0\/statuses?page=1",
        "from": 1,
        "next_page_url": "https:\/\/traewelling.de\/api\/v0\/statuses?page=2",
        "path": "https:\/\/traewelling.de\/api\/v0\/statuses",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15
    },
    "user": {
        "id": 1,
        "name": "J. Doe",
        "username": "jdoe",
        "train_distance": "454.59",
        "train_duration": "317",
        "points": "66",
        "averageSpeed": 100.5678954
    }
}
```
> Example response (406, Not Acceptable The privacy agreement has not yet been accepted.):

```json
{
    "error": "Privacy agreement not yet accepted!",
    "updated": "2019-11-04 20:07:00",
    "german": "string",
    "english": "string"
}
```
<div id="execution-results-GETapi-v0-user--username-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v0-user--username-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v0-user--username-"></code></pre>
</div>
<div id="execution-error-GETapi-v0-user--username-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v0-user--username-"></code></pre>
</div>
<form id="form-GETapi-v0-user--username-" data-method="GET" data-path="api/v0/user/{username}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v0-user--username-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v0-user--username-" onclick="tryItOut('GETapi-v0-user--username-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v0-user--username-" onclick="cancelTryOut('GETapi-v0-user--username-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v0-user--username-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v0/user/{username}</code></b>
</p>
<p>
<label id="auth-GETapi-v0-user--username-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v0-user--username-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="GETapi-v0-user--username-" data-component="url" required  hidden>
<br>
The username of the requested user.</p>
</form>


## Search
Searches for users with a query

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v0/user/search/non" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v0/user/search/non"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (400, Bad Request The parameters are wrong or not given.):

```json
<Binary data> -  empty response
```
> Example response (401, Unauthorized. Will be returned by the server if no user was logged in or wrong credentials were supplied.):

```json
<Binary data> -  empty response
```
> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "name": "J. Doe",
            "username": "jdoe",
            "train_distance": "454.59",
            "train_duration": "317",
            "points": "66",
            "averageSpeed": 100.5678954
        }
    ],
    "first_page_url": "https:\/\/traewelling.de\/api\/v0\/user\/search\/jdo?page=1",
    "from": 1,
    "next_page_url": "https:\/\/traewelling.de\/api\/v0\/user\/search\/jdo?page=2",
    "path": "https:\/\/traewelling.de\/api\/v0\/user\/search\/jdo",
    "per_page": 5,
    "prev_page_url": null,
    "to": 5
}
```
> Example response (406, Not Acceptable The privacy agreement has not yet been accepted.):

```json
{
    "error": "Privacy agreement not yet accepted!",
    "updated": "2019-11-04 20:07:00",
    "german": "string",
    "english": "string"
}
```
<div id="execution-results-GETapi-v0-user-search--query-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v0-user-search--query-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v0-user-search--query-"></code></pre>
</div>
<div id="execution-error-GETapi-v0-user-search--query-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v0-user-search--query-"></code></pre>
</div>
<form id="form-GETapi-v0-user-search--query-" data-method="GET" data-path="api/v0/user/search/{query}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v0-user-search--query-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v0-user-search--query-" onclick="tryItOut('GETapi-v0-user-search--query-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v0-user-search--query-" onclick="cancelTryOut('GETapi-v0-user-search--query-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v0-user-search--query-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v0/user/search/{query}</code></b>
</p>
<p>
<label id="auth-GETapi-v0-user-search--query-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v0-user-search--query-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>query</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="query" data-endpoint="GETapi-v0-user-search--query-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>searchQuery</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="searchQuery" data-endpoint="GETapi-v0-user-search--query-" data-component="url" required  hidden>
<br>
The string to be searched for in all registered users</p>
</form>


## Get active status
Gets the currently active status for a given user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v0/user/gertrud123/active" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v0/user/gertrud123/active"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (204, No active status):

```json
<Binary data> -  empty response
```
> Example response (400, Bad Request The parameters are wrong or not given.):

```json
<Binary data> -  empty response
```
> Example response (401, Unauthorized. Will be returned by the server if no user was logged in or wrong credentials were supplied.):

```json
<Binary data> -  empty response
```
> Example response (404, Not found The parameters in the request were valid, but the server did not find a corresponding object.):

```json
<Binary data> -  empty response
```
> Example response (200):

```json
[
    {
        "id": 10,
        "created_at": "2019-11-24 15:44:16",
        "updated_at": "2019-11-24 15:44:16",
        "body": "This is my first checkin!",
        "type": "hafas",
        "event_id": 1,
        "likes_count": 15,
        "favorited": true,
        "user": {
            "id": 1,
            "name": "J. Doe",
            "username": "jdoe",
            "train_distance": "454.59",
            "train_duration": "317",
            "points": "66",
            "averageSpeed": 100.5678954
        },
        "train_checkin": {
            "id": 0,
            "status_id": 10,
            "trip_id": "1|1937395|17|80|24112019",
            "origin": {
                "id": 3,
                "ibnr": "8079041",
                "name": "Karlsruhe Bahnhofsvorplatz",
                "latitude": 48.994348,
                "longitude": 48.994348
            },
            "destination": {
                "id": 3,
                "ibnr": "8079041",
                "name": "Karlsruhe Bahnhofsvorplatz",
                "latitude": 48.994348,
                "longitude": 48.994348
            },
            "distance": 3.606,
            "departure": "2019-11-24 15:44:16",
            "arrival": "2019-11-24 15:44:16",
            "points": 3,
            "delay": 0,
            "hafas_trip": {
                "id": 16,
                "trip_id": "1|1937395|17|80|24112019",
                "category": "bus",
                "number": "bus-62",
                "linename": "62",
                "origin": "8079041",
                "destination": "8079041",
                "stopovers": "[{\"stop\":{\"type\":\"stop\",\"id\":\"8079041\",\"name\":\"Karlsruhe Bahnhofsvorplatz\",\"location\":{\"type\":\"location\",\"id\":\"8079041\",\"latitude\":48.994348,\"longitude\":8.399583},\"products\":{\"nationalExpress\":true,\"national\":true,\"regionalExp\":true,\"regional\":true,\"suburban\":true,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":true}},\"arrival\":null,\"arrivalDelay\":null,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:50:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null,\"remarks\":[{\"type\":\"hint\",\"code\":\"text.journeystop.product.or.direction.changes.stop.message\",\"text\":\"As Bus 62 heading towards 62 Entenfang >70 from here\"}]},{\"stop\":{\"type\":\"stop\",\"id\":\"362191\",\"name\":\"Ebertstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"362191\",\"latitude\":48.994519,\"longitude\":8.395395},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":true,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T15:51:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:51:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"377218\",\"name\":\"Welfenstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"377218\",\"latitude\":48.99531,\"longitude\":8.386118},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T15:53:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:53:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721329\",\"name\":\"Beiertheim West, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721329\",\"latitude\":48.994896,\"longitude\":8.382693},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:54:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:54:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721468\",\"name\":\"Windeckstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721468\",\"latitude\":48.99122,\"longitude\":8.371016},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":true}},\"arrival\":\"2019-11-24T15:55:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:55:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"723868\",\"name\":\"Hardecksiedlung, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"723868\",\"latitude\":48.992262,\"longitude\":8.368813},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T15:56:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:56:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721437\",\"name\":\"Schwimmschulweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721437\",\"latitude\":48.994653,\"longitude\":8.364247},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:57:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:57:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721380\",\"name\":\"Hornisgrindestra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721380\",\"latitude\":48.995966,\"longitude\":8.360409},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:58:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:58:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721349\",\"name\":\"Edelbergstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721349\",\"latitude\":48.996865,\"longitude\":8.354071},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T15:59:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T15:59:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721458\",\"name\":\"Wattkopfstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721458\",\"latitude\":48.994573,\"longitude\":8.351635},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:00:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:00:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721333\",\"name\":\"Bernsteinstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721333\",\"latitude\":48.991912,\"longitude\":8.348363},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:01:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:01:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721350\",\"name\":\"Eichelbergstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721350\",\"latitude\":48.99353,\"longitude\":8.345109},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:02:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:02:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721455\",\"name\":\"T\\u00dcV, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721455\",\"latitude\":48.996667,\"longitude\":8.348426},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:03:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:03:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"723629\",\"name\":\"St. Josef Kirche, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"723629\",\"latitude\":48.998851,\"longitude\":8.348615},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:04:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:04:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721346\",\"name\":\"Durmersheimer Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721346\",\"latitude\":49.000514,\"longitude\":8.350619},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:05:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:05:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"723802\",\"name\":\"Sinner (Durmersheimer Stra\\u00dfe), Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"723802\",\"latitude\":49.002663,\"longitude\":8.35506},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:06:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:06:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721415\",\"name\":\"Gr\\u00fcnwinkel Friedhof, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721415\",\"latitude\":49.005521,\"longitude\":8.356103},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:07:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:07:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721339\",\"name\":\"Blohnstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721339\",\"latitude\":49.007346,\"longitude\":8.356417},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:08:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:08:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null,\"remarks\":[{\"type\":\"hint\",\"code\":\"text.journeystop.product.or.direction.changes.stop.message\",\"text\":\"As Bus 62 heading towards 70 Heidehof from here\"}]},{\"stop\":{\"type\":\"stop\",\"id\":\"363851\",\"name\":\"Entenfang, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"363851\",\"latitude\":49.010609,\"longitude\":8.359501},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":true,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":true}},\"arrival\":\"2019-11-24T16:10:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:12:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null,\"remarks\":[{\"type\":\"hint\",\"code\":\"text.journeystop.product.or.direction.changes.stop.message\",\"text\":\"As Bus 70 heading towards 70 Heidehof from here\"}]},{\"stop\":{\"type\":\"stop\",\"id\":\"721398\",\"name\":\"K\\u00e4rcherstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721398\",\"latitude\":49.015895,\"longitude\":8.361559},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:14:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:14:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"373522\",\"name\":\"Hertzstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"373522\",\"latitude\":49.020246,\"longitude\":8.364984},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T16:15:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:15:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721326\",\"name\":\"Barbaraweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721326\",\"latitude\":49.023967,\"longitude\":8.365946},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:15:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:15:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721410\",\"name\":\"Madenburgweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721410\",\"latitude\":49.027051,\"longitude\":8.36546},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:16:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:16:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721332\",\"name\":\"Berliner Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721332\",\"latitude\":49.03026,\"longitude\":8.364939},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:17:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:17:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721364\",\"name\":\"Germersheimer Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721364\",\"latitude\":49.032894,\"longitude\":8.364858},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:17:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:17:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721462\",\"name\":\"Wei\\u00dfenburger Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721462\",\"latitude\":49.036957,\"longitude\":8.366989},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:18:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:18:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721436\",\"name\":\"Schweigener Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721436\",\"latitude\":49.03844,\"longitude\":8.369586},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:19:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:19:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721385\",\"name\":\"Kaiserslauterner Stra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721385\",\"latitude\":49.036687,\"longitude\":8.374153},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:20:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:20:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721900\",\"name\":\"Neureut Flughafenstra\\u00dfe, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721900\",\"latitude\":49.036139,\"longitude\":8.380535},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:21:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:21:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"721172\",\"name\":\"Neureut Rosmarinweg, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"721172\",\"latitude\":49.035482,\"longitude\":8.385605},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":false,\"taxi\":false}},\"arrival\":\"2019-11-24T16:22:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":\"2019-11-24T16:22:00+01:00\",\"departureDelay\":0,\"departurePlatform\":null},{\"stop\":{\"type\":\"stop\",\"id\":\"377009\",\"name\":\"Heidehof, Karlsruhe\",\"location\":{\"type\":\"location\",\"id\":\"377009\",\"latitude\":49.031536,\"longitude\":8.387008},\"products\":{\"nationalExpress\":false,\"national\":false,\"regionalExp\":false,\"regional\":false,\"suburban\":false,\"bus\":true,\"ferry\":false,\"subway\":false,\"tram\":true,\"taxi\":false}},\"arrival\":\"2019-11-24T16:23:00+01:00\",\"arrivalDelay\":0,\"arrivalPlatform\":null,\"departure\":null,\"departureDelay\":null,\"departurePlatform\":null}]",
                "polyline": "cac715508e44ae253f424562fe5d286e",
                "departure": "2019-11-24 15:44:16",
                "arrival": "2019-11-24 15:44:16",
                "delay": 0
            }
        },
        "event": {
            "id": 1,
            "name": "Weihnachten 2019",
            "slug": "weihnachten_2019",
            "hashtag": "MerryTräwellingMas",
            "host": "Welt",
            "url": "https:\/\/www.weihnachten.de\/",
            "trainstation": "8079041",
            "begin": "2019-12-24 00:00:00",
            "end": "2019-12-24 23:59:59"
        }
    }
]
```
> Example response (406, Not Acceptable The privacy agreement has not yet been accepted.):

```json
{
    "error": "Privacy agreement not yet accepted!",
    "updated": "2019-11-04 20:07:00",
    "german": "string",
    "english": "string"
}
```
<div id="execution-results-GETapi-v0-user--username--active" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v0-user--username--active"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v0-user--username--active"></code></pre>
</div>
<div id="execution-error-GETapi-v0-user--username--active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v0-user--username--active"></code></pre>
</div>
<form id="form-GETapi-v0-user--username--active" data-method="GET" data-path="api/v0/user/{username}/active" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v0-user--username--active', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v0-user--username--active" onclick="tryItOut('GETapi-v0-user--username--active');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v0-user--username--active" onclick="cancelTryOut('GETapi-v0-user--username--active');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v0-user--username--active" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v0/user/{username}/active</code></b>
</p>
<p>
<label id="auth-GETapi-v0-user--username--active" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v0-user--username--active" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="GETapi-v0-user--username--active" data-component="url" required  hidden>
<br>
The username of the requested user.</p>
</form>


## Update avatar
Gets the avatar of a given user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v0/user/profilepicture" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@/tmp/php6QBa9W" 
```

```javascript
const url = new URL(
    "http://localhost/api/v0/user/profilepicture"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response => response.json());
```


> Example response (200, OK. The avatar was successfully uploaded.):

```json
<Binary data> -  empty response
```
> Example response (400, Bad Request The parameters are wrong or not given.):

```json
<Binary data> -  empty response
```
> Example response (401, Unauthorized. Will be returned by the server if no user was logged in or wrong credentials were supplied.):

```json
<Binary data> -  empty response
```
> Example response (406, Not Acceptable The privacy agreement has not yet been accepted.):

```json
{
    "error": "Privacy agreement not yet accepted!",
    "updated": "2019-11-04 20:07:00",
    "german": "string",
    "english": "string"
}
```
<div id="execution-results-PUTapi-v0-user-profilepicture" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v0-user-profilepicture"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v0-user-profilepicture"></code></pre>
</div>
<div id="execution-error-PUTapi-v0-user-profilepicture" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v0-user-profilepicture"></code></pre>
</div>
<form id="form-PUTapi-v0-user-profilepicture" data-method="PUT" data-path="api/v0/user/profilepicture" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v0-user-profilepicture', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v0-user-profilepicture" onclick="tryItOut('PUTapi-v0-user-profilepicture');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v0-user-profilepicture" onclick="cancelTryOut('PUTapi-v0-user-profilepicture');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v0-user-profilepicture" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v0/user/profilepicture</code></b>
</p>
<p>
<label id="auth-PUTapi-v0-user-profilepicture" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v0-user-profilepicture" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="PUTapi-v0-user-profilepicture" data-component="body" required  hidden>
<br>
This is actually the body of the request. Scribe won't let me document it like that.</p>

</form>


## Update DisplayName
Updates the display name of the current user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v0/user/displayname" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"username":"incidunt"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v0/user/displayname"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "incidunt"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200, OK. The displayName of the current user was changed.):

```json
<Binary data> -  empty response
```
> Example response (400, Bad Request The parameters are wrong or not given.):

```json
<Binary data> -  empty response
```
> Example response (401, Unauthorized. Will be returned by the server if no user was logged in or wrong credentials were supplied.):

```json
<Binary data> -  empty response
```
> Example response (406, Not Acceptable The privacy agreement has not yet been accepted.):

```json
{
    "error": "Privacy agreement not yet accepted!",
    "updated": "2019-11-04 20:07:00",
    "german": "string",
    "english": "string"
}
```
<div id="execution-results-PUTapi-v0-user-displayname" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v0-user-displayname"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v0-user-displayname"></code></pre>
</div>
<div id="execution-error-PUTapi-v0-user-displayname" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v0-user-displayname"></code></pre>
</div>
<form id="form-PUTapi-v0-user-displayname" data-method="PUT" data-path="api/v0/user/displayname" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v0-user-displayname', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v0-user-displayname" onclick="tryItOut('PUTapi-v0-user-displayname');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v0-user-displayname" onclick="cancelTryOut('PUTapi-v0-user-displayname');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v0-user-displayname" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v0/user/displayname</code></b>
</p>
<p>
<label id="auth-PUTapi-v0-user-displayname" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v0-user-displayname" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="PUTapi-v0-user-displayname" data-component="body" required  hidden>
<br>
This is actually a string in the body, not a json-request.</p>

</form>


