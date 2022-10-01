<?php

return [

  /**
  * Global middleware stack in the application called on every HTTP request
  * -----------------------------------------------------------------------------
  */

  //\Twipsi\Application\Middlewares\SystemDependancyCheck::class,
  //\Twipsi\Components\Http\Middlewares\TrustProxies::class,
  \Twipsi\Components\Http\Middlewares\CrossOriginVerify::class,
  \Twipsi\Components\Http\Middlewares\StopForMaintenance::class,
  \Twipsi\Components\Http\Middlewares\CheckPostSize::class,
  \Twipsi\Components\Http\Middlewares\TrimInput::class,
  \Twipsi\Components\Http\Middlewares\ConvertEmptyInput::class,
];

?>
