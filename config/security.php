<?php

return [

    /*
    - -----------------------------------------------------------------------------
    - Application Key
    - -----------------------------------------------------------------------------
    - This secret unique key will be used to encrypt data and sign urls
    - and other security related operations.
    -
    */

    'app_key' => _env('APP_KEY'),

    /*
    - -----------------------------------------------------------------------------
    - Encryption Algorithm
    - -----------------------------------------------------------------------------
    - The default algorithm to use while encrypting data by the encrypter component.
    -
    - Supports:   Libsodium => sodium256
    -             Hash => sha256, sha512, ripemd128, ripemd256
    -             Openssl => aes-128-cbc, aes-256-cbc
    */

    'encrypter' => 'aes-256-cbc',

    /*
    - -----------------------------------------------------------------------------
    - SecretKey Length
    - -----------------------------------------------------------------------------
    - The length of the secret key used by encryption methods.
    -
    */

    'secret_length' => 32,

    /*
    - -----------------------------------------------------------------------------
    - CsrfKey Length
    - -----------------------------------------------------------------------------
    - The length of the csrf key used used to auth cross server requests.
    -
    */

    'csrf_length' => 64,

];