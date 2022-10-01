<?php

return [

  /*
  - -----------------------------------------------------------------------------
  - Application Name
  - -----------------------------------------------------------------------------
  - Contains the application name that is used system wide for rendering
  - views and sending mails and notifications.
  -
  */

  'name' => _env('APP_NAME', 'Twipsi'),

  /*
  - -----------------------------------------------------------------------------
  - Application Enviroment
  - -----------------------------------------------------------------------------
  - Contains the application enviroment type, you can use this to conditionaly
  - switch contexts on different enviroments.
  -
  */

  'env' => _env('APP_ENV', 'production'),

  /*
  - -----------------------------------------------------------------------------
  - Application Domain
  - -----------------------------------------------------------------------------
  - Contains the application domain url that is used system wide to 
  - generate url-s and reference assets.
  -
  */

  'url' => _env('APP_URL', '/'),

  /*
  - -----------------------------------------------------------------------------
  - Application Locale
  - -----------------------------------------------------------------------------
  - Contains the application language to use system wide in a range of components.
  -
  */

  'locale' => 'en',

  /*
  - -----------------------------------------------------------------------------
  - Application Timezone
  - -----------------------------------------------------------------------------
  - Contains the application timezone to be used by PHP methods to calculate 
  - and fiddle with time components.
  -
  */

  'timezone' => 'Europe/Budapest',

  /*
  - -----------------------------------------------------------------------------
  - Application Maintanance Mode
  - -----------------------------------------------------------------------------
  - Contains the application maintenance mode, to pull a curtain before 
  - handling any controller.
  -
  */

  'maintenance' => false,

  /*
  - -----------------------------------------------------------------------------
  - Application Debug Mode
  - -----------------------------------------------------------------------------
  - Contains the application debug mode, to throw detailed errors for development
  - otherwise just return a simple error page based on the error codes.
  -
  */

  'debug' => _env('APP_DEBUG', false),

];

?>
