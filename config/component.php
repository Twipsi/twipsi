<?php

return [

  /*
  - -----------------------------------------------------------------------------
  - Component Registry
  - -----------------------------------------------------------------------------
  - The component loaders provided will be autoloaded into the application for
  - easy accessibility via application object.
  -
  */

  'loaders' => [

    // Twipsi framework components.
    Twipsi\Foundation\ComponentProviders\AuthenticationProvider::class,
    Twipsi\Foundation\ComponentProviders\CookieProvider::class,
    Twipsi\Foundation\ComponentProviders\ConsoleProvider::class,
    Twipsi\Foundation\ComponentProviders\DatabaseProvider::class,
    Twipsi\Foundation\ComponentProviders\EncrypterProvider::class,
    Twipsi\Foundation\ComponentProviders\MailerProvider::class,
    Twipsi\Foundation\ComponentProviders\NotificationProvider::class,
    Twipsi\Foundation\ComponentProviders\PasswordProvider::class,
    Twipsi\Foundation\ComponentProviders\RateLimiterProvider::class,
    Twipsi\Foundation\ComponentProviders\ResponseProvider::class,
    Twipsi\Foundation\ComponentProviders\SessionProvider::class,
    Twipsi\Foundation\ComponentProviders\TranslatorProvider::class,
    Twipsi\Foundation\ComponentProviders\ValidatorProvider::class,
    Twipsi\Foundation\ComponentProviders\ViewProvider::class,

    // Application components.
    App\Console\ApplicationConsole::class,
  ],

  /*
  - -----------------------------------------------------------------------------
  - Component Aliases
  - -----------------------------------------------------------------------------
  - The Alias classes that can be used to call specific components.
  -
  */

  'aliases' => [
    // 'identifier.token' => Class::class,
    // Class::class => Class::class,
  ],

];
