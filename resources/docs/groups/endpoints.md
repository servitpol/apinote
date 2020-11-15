# Endpoints


## Authentication




> Example request:

```bash
curl -X POST \
    "https://apinotes.wp-cpm.site/api/login?email=iste&password=deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200, success):

```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
}
```
> Example response (200, Incorrect Login/Password):

```json
{
    "error": true,
    "message": "Incorrect Login\/Password"
}
```
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="query" required  hidden>
<br>
Enter the email you provided during registration.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-login" data-component="query" required  hidden>
<br>
Enter the email you provided during registration.</p>
</form>


## Registration




> Example request:

```bash
curl -X POST \
    "https://apinotes.wp-cpm.site/api/register?name=doloribus&email=atque&password=voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200, success):

```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
}
```
> Example response (401, The email has already been taken.):

```json
{
    "error": true,
    "message": {
        "email": [
            "The email has already been taken."
        ]
    }
}
```
> Example response (401, Missing name):

```json
{
    "error": true,
    "message": {
        "name": [
            "The name field is required."
        ]
    }
}
```
> Example response (401, Missing email):

```json
{
    "error": true,
    "message": {
        "email": [
            "The email field is required."
        ]
    }
}
```
> Example response (401, Missing password):

```json
{
    "error": true,
    "message": {
        "password": [
            "The password field is required."
        ]
    }
}
```
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
Enter your name.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
Enter your email.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
Enter your password.</p>
</form>


## All notes




> Example request:

```bash
curl -X GET \
    -G "https://apinotes.wp-cpm.site/api/note" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
```


> Example response (200, success):

```json

{
"id": 44,
"user_id": 1,
"short_note": "Hatter, 'you wouldn't talk about trouble!' said the Hatter. 'You...",
"created_at": "2020-10-22 07:13:30",
"updated_at": "2020-10-22 07:13:30",
"full_img_path": "https://apinotes.wp-cpm.site/public/images/fake/m7z1d2Ljab.jpg",
"thumb_img_path": "https://apinotes.wp-cpm.site/public/images/fake/thumb_m7z1d2Ljab.jpg"
},
{
"id": 49,
"user_id": 1,
"short_note": "MORE than nothing.' 'Nobody asked YOUR opinion,' said Alice. 'Come...",
"created_at": "2020-11-05 19:21:45",
"updated_at": "2020-11-05 19:21:45",
"full_img_path": null,
"thumb_img_path": null
},
{
"id": 9,
"user_id": 1,
"short_note": "EVER happen in a natural way again. 'I wonder how...",
"created_at": "2020-11-13 05:45:44",
"updated_at": "2020-11-13 05:45:44",
"full_img_path": "https://apinotes.wp-cpm.site/public/images/fake/whieNCXq7s.jpg",
"thumb_img_path": "https://apinotes.wp-cpm.site/public/images/fake/thumb_whieNCXq7s.jpg"
},
{
"id": 23,
"user_id": 1,
"short_note": "M--' 'Why with an important air, 'are you all ready?...",
"created_at": "2020-10-31 03:53:22",
"updated_at": "2020-10-31 03:53:22",
"full_img_path": "https://apinotes.wp-cpm.site/public/images/fake/AJ4eDYHCJU.jpg",
"thumb_img_path": "https://apinotes.wp-cpm.site/public/images/fake/thumb_AJ4eDYHCJU.jpg"
}
```
> Example response (401, Token is Invalid):

```json
{
    "error": true,
    "message": "Token is Invalid"
}
```
<div id="execution-results-GETapi-note" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-note"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-note"></code></pre>
</div>
<div id="execution-error-GETapi-note" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-note"></code></pre>
</div>
<form id="form-GETapi-note" data-method="GET" data-path="api/note" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."}' onsubmit="event.preventDefault(); executeTryOut('GETapi-note', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/note</code></b>
</p>
</form>


## One note




> Example request:

```bash
curl -X GET \
    -G "https://apinotes.wp-cpm.site/api/note/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
```


> Example response (200, success):

```json
{
    "id": 53,
    "user_id": 7,
    "note": "March Hare took the hookah out of sight, they were mine before. If I or ..(full note)",
    "created_at": "2020-11-15 01:33:38",
    "updated_at": "2020-11-15 01:33:38",
    "full_img_path": "https:\/\/apinotes.wp-cpm.site\/public\/images\/7\/53\/1605404018.jpg",
    "thumb_img_path": "https:\/\/apinotes.wp-cpm.site\/public\/images\/7\/53\/thumb_1605404018.jpg"
}
```
> Example response (401, Token is Invalid):

```json
{
    "error": true,
    "message": "Token is Invalid"
}
```
> Example response (404, Note not found):

```json
{
    "error": true,
    "message": "Note not found"
}
```
<div id="execution-results-GETapi-note--note_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-note--note_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-note--note_id-"></code></pre>
</div>
<div id="execution-error-GETapi-note--note_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-note--note_id-"></code></pre>
</div>
<form id="form-GETapi-note--note_id-" data-method="GET" data-path="api/note/{note_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."}' onsubmit="event.preventDefault(); executeTryOut('GETapi-note--note_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/note/{note_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>note_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="note_id" data-endpoint="GETapi-note--note_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Create a note




> Example request:

```bash
curl -X POST \
    "https://apinotes.wp-cpm.site/api/note" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
```


> Example response (200, success):

```json
{
    "note": "March Hare took the hookah out of sight, they were mine before. ...(full note)",
    "short_note": "March Hare took the hookah out of sight, they were...",
    "updated_at": "2020-11-15T14:15:41.000000Z",
    "created_at": "2020-11-15T14:15:41.000000Z",
    "id": 56
}
```
> Example response (401, Token is Invalid):

```json
{
    "error": true,
    "message": "Token is Invalid"
}
```
> Example response (401, The note field is required):

```json
{
    "error": true,
    "message": {
        "note": [
            "The note field is required."
        ]
    }
}
```
> Example response (401, The image field errors):

```json
{
    "error": true,
    "message": {
        "image": [
            "The image must be a file of type: jpeg, jpg, png, gif.",
            "The image may not be greater than 10000 kilobytes."
        ]
    }
}
```
<div id="execution-results-POSTapi-note" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-note"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-note"></code></pre>
</div>
<div id="execution-error-POSTapi-note" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-note"></code></pre>
</div>
<form id="form-POSTapi-note" data-method="POST" data-path="api/note" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-note', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/note</code></b>
</p>
</form>


## Editing a note




> Example request:

```bash
curl -X PUT \
    "https://apinotes.wp-cpm.site/api/note/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
```


> Example response (200, success):

```json
{
    "note": "March Hare took the hookah out of sight, they were mine before. ...(full note)",
    "short_note": "March Hare took the hookah out of sight, they were...",
    "updated_at": "2020-11-15T14:15:41.000000Z",
    "created_at": "2020-11-15T14:35:47.000000Z",
    "id": 56
}
```
> Example response (401, Token is Invalid):

```json
{
    "error": true,
    "message": "Token is Invalid"
}
```
> Example response (401, The note field is required):

```json
{
    "error": true,
    "message": {
        "note": [
            "The note field is required."
        ]
    }
}
```
> Example response (401, The image field errors):

```json

{
"error": true,
"message": {
"image": [
"The image must be a file of type: jpeg, jpg, png, gif.",
"The image may not be greater than 10000 kilobytes."
]
}
```
> Example response (404, Note not found):

```json
{
    "error": true,
    "message": "Note not found"
}
```
<div id="execution-results-PUTapi-note--note-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-note--note-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-note--note-"></code></pre>
</div>
<div id="execution-error-PUTapi-note--note-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-note--note-"></code></pre>
</div>
<form id="form-PUTapi-note--note-" data-method="PUT" data-path="api/note/{note}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-note--note-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/note/{note}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>note</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="note" data-endpoint="PUTapi-note--note-" data-component="url" required  hidden>
<br>
</p>
</form>


## Deleting a note




> Example request:

```bash
curl -X DELETE \
    "https://apinotes.wp-cpm.site/api/note/quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
```


> Example response (404, Note not found):

```json
{
    "error": true,
    "message": "Note not found"
}
```
<div id="execution-results-DELETEapi-note--note-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-note--note-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-note--note-"></code></pre>
</div>
<div id="execution-error-DELETEapi-note--note-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-note--note-"></code></pre>
</div>
<form id="form-DELETEapi-note--note-" data-method="DELETE" data-path="api/note/{note}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-note--note-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/note/{note}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>note</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="note" data-endpoint="DELETEapi-note--note-" data-component="url" required  hidden>
<br>
</p>
</form>


## Token refresh




> Example request:

```bash
curl -X GET \
    -G "https://apinotes.wp-cpm.site/api/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
```


> Example response (200, success):

```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."
}
```
> Example response (401, Token is Invalid):

```json
{
    "error": true,
    "message": "Token is Invalid"
}
```
<div id="execution-results-GETapi-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-refresh"></code></pre>
</div>
<form id="form-GETapi-refresh" data-method="GET" data-path="api/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Authorization":"Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHR..."}' onsubmit="event.preventDefault(); executeTryOut('GETapi-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/refresh</code></b>
</p>
</form>

