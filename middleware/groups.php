<?php

return [

  /**
  * Grouped middleware stacks that can be called by a key and executed in order
  * Middlewares should not return anything but throw exception.
  * -----------------------------------------------------------------------------
  */

  'web' => [

    /**
    * Middleware group for web/public requests
    * -----------------------------------------------------------------------------
    */

    \Twipsi\Components\Cookie\Middlewares\EncryptCookies::class,
    \Twipsi\Components\Cookie\Middlewares\AppendQueuedCookiesToResponse::class,
    \Twipsi\Components\Session\Middlewares\StartSession::class,
  ],

  'app' => [

    /**
    * Middleware group for restricted app requests
    * -----------------------------------------------------------------------------
    */

    \Twipsi\Components\Http\Middlewares\StopForMaintenance::class,
    \Twipsi\Components\Cookie\Middlewares\EncryptCookies::class,
    \Twipsi\Components\Cookie\Middlewares\AppendQueuedCookiesToResponse::class,
    \Twipsi\Components\Session\Middlewares\StartSession::class,
    \Twipsi\Components\Authentication\Middlewares\AuthenticateSession::class,
    \Twipsi\Components\View\Middlewares\AppendErrorMessagesToView::class,
    \Twipsi\Components\Security\Csrf\Middlewares\CsrfTokenVerification::class,
  ],

  'api' => [

    /**
    * Middleware group for api restricted requests
    * -----------------------------------------------------------------------------
    */

    \Twipsi\Components\Authentication\Middlewares\TokenAuthentication::class,
  ],

];

?>
