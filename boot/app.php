<?php

/*
- -----------------------------------------------------------------------------
- Load Application Interface
- -----------------------------------------------------------------------------
- This application handles all the class management between commponents.
-
*/

$app = new Twipsi\Foundation\Application\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
- -----------------------------------------------------------------------------
- Bind Kernel To The Application
- -----------------------------------------------------------------------------
- Bind the kernel interface to the application manager.
-
*/

$app->keep('kernel', Twipsi\Foundation\Kernel::class);

/*
- -----------------------------------------------------------------------------
- Bind Error Handler To The Application
- -----------------------------------------------------------------------------
- Extend the error handler to the application handler.
-
*/

$app->keep(Twipsi\Foundation\ExceptionHandler::class, 
    App\Exceptions\Handler::class
);

/*
- -----------------------------------------------------------------------------
- Return Application
- -----------------------------------------------------------------------------
- Return the initialized application instance.
-
*/

return $app;
