<?php

return [

    /*
    - -----------------------------------------------------------------------------
    - Default Authentication
    - -----------------------------------------------------------------------------
    - The default authentication configs to use for authentication.
    -
    */

    'default' => [
        'driver' => 'web',
        'password' => 'database',
    ],

    /*
    - -----------------------------------------------------------------------------
    - Authentication Drivers Config
    - -----------------------------------------------------------------------------
    - Contains the required configurations for each of the authentication drivers.
    -
    */

    'drivers' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'model',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'user',
            'api_input_field' => 'api_token',
            'api_storage_column' => 'api_token',
            'hash' => false,
        ],
    ],

    /*
    - -----------------------------------------------------------------------------
    - Authentication User Provider Config
    - -----------------------------------------------------------------------------
    - Contains the required provider configurations to build the user.
    -
    */

    'providers' => [
        'user' => [
            'provider' => 'database',
            'table' => 'tw_users',
        ],
        'model' => [
            'provider' => 'model',
            'model' => App\Models\Authentication\User::class,
            'table' => 'tw_users',
        ],
    ],

    /*
    - -----------------------------------------------------------------------------
    - Password Reset Config
    - -----------------------------------------------------------------------------
    - Contains the required configurations to build the password reset driver.
    -
    */

    'password' => [
        'database' => [
            'provider' => 'model',
            'table' => 'tw_user_reset',
            'expire' => 7200, // seconds
            'throttle' => 120, // seconds
        ],
    ],

    /*
    - -----------------------------------------------------------------------------
    - Activation Link Config
    - -----------------------------------------------------------------------------
    - The length in minutes before the verify email (activate account) 
    - link will be valid.
    -
    */

    'activation' => [
        'expire' => 120, // minutes
    ],

    /*
    - -----------------------------------------------------------------------------
    - Verification Link Config
    - -----------------------------------------------------------------------------
    - The length in minutes before the verify account (refresh user data) 
    - link will be valid
    -
    */

    'verification' => [
        'expire' => 1440, // minutes
    ],

];

?>
