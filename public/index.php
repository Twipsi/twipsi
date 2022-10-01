<?php
use Twipsi\Components\Http\RequestFactory as Request;

/*
- -----------------------------------------------------------------------------
- Define The Application Start Time
- -----------------------------------------------------------------------------
- Define the start time, so we can pass it later to the debugger.
-
*/

define('DEBUG_START', microtime(true));

/*
- -----------------------------------------------------------------------------
- Define The Application Root
- -----------------------------------------------------------------------------
- Since the public folder can be manually changed and the
- application is run through the index, we will need the root directory.
-
*/

define('ROOT', __DIR__.DIRECTORY_SEPARATOR.'..');

/*
- -----------------------------------------------------------------------------
- Trigger Maintenance Mode
- -----------------------------------------------------------------------------
- If we have a pre-rendered maintenance file then load it and prevent
- the application framework to start causing exceptions.
-
*/

if (file_exists($maintenance = ROOT.'/themes/maintenance/index.php')) {
  require $maintenance;
}

/*
- -----------------------------------------------------------------------------
- Require Auto loader
- -----------------------------------------------------------------------------
- load composers autoload module to resolve namespace class loading.
-
*/
require ROOT.'/vendor/autoload.php';

/*
- -----------------------------------------------------------------------------
- Build The Application
- -----------------------------------------------------------------------------
- Construct the application interface to utilize the framework foundation.
-
*/

$app = require_once ROOT.'/boot/app.php';

/*
- -----------------------------------------------------------------------------
- Dispatch Request
- -----------------------------------------------------------------------------
- Run the request through the kernel and return a valid response.
-
*/

$response = $app->kernel->run(
  $request = Request::fromGlobals()
);

/*
- -----------------------------------------------------------------------------
- Send Response To Client
- -----------------------------------------------------------------------------
- Handle response callbacks and send it to the browser terminating
- anything that should be terminatable.
-
*/

$app->kernel->send($request, $response);
