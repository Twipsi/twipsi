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
    - Database Connection Driver
    - -----------------------------------------------------------------------------
    - The default database driver we should use to query databases.
    -
    */

    'driver' => _env('DB_CONNECTION', 'mysqli'),

    /*
    - -----------------------------------------------------------------------------
    - Database Driver CConfigurations
    - -----------------------------------------------------------------------------
    - All the configurations required for all the supported database drivers.
    -
    */

    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'url' => _env('DATABASE_URL'),
            'database' => _env('DB_DATABASE', App::nav()->databasePath('sqlite').'/twipsi.db'),
            'prefix' => '',
            'foreign_key_constraints' => _env('DB_FOREIGN_KEYS', true),
        ],

        'mysqli' => [
            'driver' => 'mysqli',
            'url' => _env('DATABASE_URL'),
            'host' => _env('DB_HOST', '127.0.0.1'),
            'port' => _env('DB_PORT', '3306'),
            'database' => _env('DB_DATABASE'),
            'username' => _env('DB_USERNAME'),
            'password' => _env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => _env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => _env('DATABASE_URL'),
            'host' => _env('DB_HOST', '127.0.0.1'),
            'port' => _env('DB_PORT', '5432'),
            'database' => _env('DB_DATABASE', 'forge'),
            'username' => _env('DB_USERNAME', 'forge'),
            'password' => _env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],
    ]
];

?>
