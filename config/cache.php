<?php

use Twipsi\Facades\App;

return [

/*
  - -----------------------------------------------------------------------------
  - Default Cache Driver
  - -----------------------------------------------------------------------------
  - The default driver to use to store cache files when caching.
  -
  */

  'default' => _env('CACHE_DRIVER', 'file'),

  /*
  - -----------------------------------------------------------------------------
  - RateLimiter Cache Path
  - -----------------------------------------------------------------------------
  - The path to store ratelimiting cache files.
  -
  */

  'limiter' => App::nav()->cachePath('limiter'),

  /*
  - -----------------------------------------------------------------------------
  - Cache prefix to use.
  - -----------------------------------------------------------------------------
  - The prefix to append to cache files to distinguish contexts.
  -
  */

  'prefix' => _env('CACHE_PREFIX'),

];
