<?php

use Twipsi\Facades\App;

return [

    /*
    - -----------------------------------------------------------------------------
    - Session Name
    - -----------------------------------------------------------------------------
    - You may change the default session name that will be saved.
    -
    */

    'name' => _env('SESSION_NAME', 'twipsi_session'),

    /*
    - -----------------------------------------------------------------------------
    - Session Encryption
    - -----------------------------------------------------------------------------
    - If set to true we will utilize the system encrypter to encrypt the session data.
    -
    */

    'encrypt' => true,

    /*
    - -----------------------------------------------------------------------------
    - Session Expire
    - -----------------------------------------------------------------------------
    - The amount of minutes the session will live before it expires.
    -
    */

    'lifetime' => _env('SESSION_LIFETIME', 120),

    /*
    - -----------------------------------------------------------------------------
    - Session Life
    - -----------------------------------------------------------------------------
    - If this is set to true the session cookie will be destoryed on browser close.
    -
    */

    'for_scope' => false,

    /*
    - -----------------------------------------------------------------------------
    - Session ID
    - -----------------------------------------------------------------------------
    - The length of the session id that will be generated and stored.
    -
    */

    'id_length' => 40,

    /*
    - -----------------------------------------------------------------------------
    - Session Driver
    - -----------------------------------------------------------------------------
    - The driver we should use to handle and store session files.
    -
    */

    'driver' => _env('SESSION_DRIVER', 'file'),

    /*
    - -----------------------------------------------------------------------------
    - File Driver Storage
    - -----------------------------------------------------------------------------
    - The directory we should use to store sessions when utilizing the 
    - file session driver method.
    -
    */

    'files' => App::nav()->storagePath('sessions'),

    /*
    - -----------------------------------------------------------------------------
    - Database Driver Storage
    - -----------------------------------------------------------------------------
    - The table we should use to store sessions when utilizing the 
    - database session driver method.
    -
    */

    'table' => 'tw_sessions',

    /*
    - -----------------------------------------------------------------------------
    - Database Connection Driver
    - -----------------------------------------------------------------------------
    - The database driver corresponding to the database configuration that 
    - we should use to connect when utilizing the database session driver method.
    -
    */

    'connection' => 'mysqli',

    /*
    - -----------------------------------------------------------------------------
    - Path Attribute
    - -----------------------------------------------------------------------------
    - Indicates the path that must exist in the requested URL for
    - the browser to send the Cookie header.
    -
    */

    'path' => '/',

    /*
    - -----------------------------------------------------------------------------
    - Domain Attribute
    - -----------------------------------------------------------------------------
    - Defines the host to which the cookie will be sent.
    - If omitted, this attribute defaults to the host of the current document URL,
    - not including subdomains.
    -
    */

    'domain' => _env('SESSION_DOMAIN', '/'),

    /*
    - -----------------------------------------------------------------------------
    - Secure Attribute
    - -----------------------------------------------------------------------------
    - Indicates that the cookie is sent to the server only when a request is made
    - with the https: scheme (except on localhost), and therefore,
    - is more resistant to man-in-the-middle attacks.
    -
    */

    'secure' => _env('SESSION_SECURE', true),

    /*
    - -----------------------------------------------------------------------------
    - HTTP Attribute
    - -----------------------------------------------------------------------------
    - Forbids JavaScript from accessing the cookie, for example,
    - through the Document.cookie property. Note that a cookie that has been created
    - with HttpOnly will still be sent with JavaScript-initiated requests,
    - for example, when calling XMLHttpRequest.send() or fetch().
    - This mitigates attacks against cross-site scripting (XSS).
    -
    */

    'http_only' => true,

    /*
    - -----------------------------------------------------------------------------
    - Same-Site Attribute
    - -----------------------------------------------------------------------------
    - The SameSite attribute of the Set-Cookie HTTP response header allows you
    - to declare if your cookie should be restricted to a first-party or same-site context.
    -
    - Default is "Lax"
    - Cookies are not sent on normal cross-site subrequests
    - (for example to load images or frames into a third party site),
    - but are sent when a user is navigating to the origin site (i.e., when following a link).
    -
    */

    'same_site' => 'lax'
];
