<?php

return [

  /**
  * Route middlewares that can be assigned to individual routes or route groups
  * -----------------------------------------------------------------------------
  */

  'route'          => \App\Middlewares\TestMiddleware::class,
  'param'          => \App\Middlewares\TestParamMiddleware::class,
  'csrf'           => \Twipsi\Components\Http\Middlewares\CsrfTokenVerification::class,
  'guest'          => \Twipsi\Components\Authentication\Middlewares\RedirectIfAuthenticated::class,
  'authenticated'  => \Twipsi\Components\Authentication\Middlewares\RedirectIfNotAuthenticated::class,
  'verified'       => \Twipsi\Components\Authentication\Middlewares\RedirectIfEmailnotVerified::class,
  'valid'          => \Twipsi\Components\Authentication\Middlewares\RedirectIfAccountInvalid::class,
  'signed'         => \Twipsi\Bridge\Middlewares\ValidateSignature::class,
];

?>
