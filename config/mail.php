<?php

/*
 * This file is part of the Twipsi package.
 *
 * (c) Petrik Gábor <twipsi@twipsi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twipsi\Facades\App;

return [

    /*
    - -----------------------------------------------------------------------------
    - The default mailer to use.
    - -----------------------------------------------------------------------------
    - The default transporter used by symfony mailer, that will be used in 
    - general to send emails system wide.
    -
    */

    "default" => _env('MAIL_MAILER', 'smtp'),

    /*
    - -----------------------------------------------------------------------------
    - Mailer configurations.
    - -----------------------------------------------------------------------------
    - The mail driver configurations coresponding to the drivers specified.
    -
    */

    "mailers" => [
        // The default smtp tranporter driver.
        "smtp" => [
            "transporter" => "smtp",
            "host" => _env('MAIL_HOST', 'smtp.office365.com'),
            "port" => _env('MAIL_PORT', 587),
            "encryption" => _env('MAIL_ENCRYPTION', 'tls'),
            "username" => _env('MAIL_USERNAME'),
            "password" => _env('MAIL_PASSWORD'),
            "timeout" => null,
        ],
        "mailgun" => [
            "transporter" => "mailgun",
            'domain' => _env('MAILGUN_DOMAIN'),
            'secret' => _env('MAILGUN_SECRET'),
            'endpoint' => _env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
            'scheme' => 'https',
        ],
    ],

    /*
    - -----------------------------------------------------------------------------
    - Mailer addresses.
    - -----------------------------------------------------------------------------
    - The default addresses that should be set globally for every message,
    - if not overridden by the message.
    -
    */

    "addresses" => [
        "from" => [
             "email" => _env('MAIL_FROM_ADDRESS'),
             "name" => _env('MAIL_FROM_NAME'),
        ],
        "reply_to" => [
            "email" => _env('MAIL_FROM_ADDRESS'),
            "name" => _env('MAIL_FROM_NAME'),
        ],
    ],

    /*
    - -----------------------------------------------------------------------------
    - Markdown
    - -----------------------------------------------------------------------------
    - The default theme and path to use when marking down mail views.
    -
    */

    "markdown" => [
        "theme" => "default",
        "path" => App::nav()->resourcePath("views/metro/mail"),
    ],

];
