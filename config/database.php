<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql'=> [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        // 'mysql' => [
        //     'driver' => 'mysql',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'port' => env('DB_PORT', '3306'),
        //     'database' => env('DB_DATABASE', 'forge'),
        //     'username' => env('DB_USERNAME', 'forge'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => 'utf8mb4',
        //     'collation' => 'utf8mb4_unicode_ci',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     'strict' => true,
        //     'engine' => null,
        //     'options' => extension_loaded('pdo_mysql') ? array_filter([
        //         PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        //     ]) : [],
        // ],

        // 'mysql' => [
        //     'driver' => 'mysql',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST', '127.0.0.1'),
        //     'port' => env('DB_PORT', '3306'),
        //     'database' => env('DB_DATABASE', 'forge'),
        //     'username' => env('DB_USERNAME', 'forge'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'unix_socket' => env('DB_SOCKET', ''),
        //     'charset' => 'utf8mb4',
        //     'collation' => 'utf8mb4_unicode_ci',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     'strict' => true,
        //     'engine' => null,
        //     'options' => extension_loaded('pdo_mysql') ? array_filter([
        //         PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        //     ]) : [],
        // ],

        // 'HRDAPPS31(shiyou_sentaku_main_test2)'=> [ 
        //     'driver' => 'mysql', 
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST', 'HRDAPPS31'), 
        //     'port' => env('DB_PORT', '3314'), 
        //     'database' => env('DB_DATABASE', 'shiyou_sentaku_main_test2'), 
        //     'username' => env('DB_USERNAME', 'romel006995'), 
        //     'password' => env('DB_PASSWORD', '006995'), 
        //     'charset' => 'utf8', 
        //     'prefix' => '', 
        //     'prefix_indexes' => true, 
        // ],

        // 'HRDAPPS31(shiyou_sentaku_main_test)'=> [ 
        //     'driver' => 'mysql', 
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_1', 'HRDAPPS31'), 
        //     'port' => env('DB_PORT_1', '3314'), 
        //     'database' => env('DB_DATABASE_1', 'shiyou_sentaku_main_test'), 
        //     'username' => env('DB_USERNAME_1', 'romel006995'), 
        //     'password' => env('DB_PASSWORD_1', '006995'), 
        //     'charset' => 'utf8', 
        //     'prefix' => '', 
        //     'prefix_indexes' => true, 
        // ],

        // 'mysql'=> [ 
        //     'driver' => 'mysql', 
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_1', 'HRDAPPS31'), 
        //     'port' => env('DB_PORT_1', '3314'), 
        //     'database' => env('DB_DATABASE_1', 'shiyou_sentaku_main_test2'), 
        //     'username' => env('DB_USERNAME_1', 'romel006995'), 
        //     'password' => env('DB_PASSWORD_1', '006995'), 
        //     'charset' => 'utf8', 
        //     'prefix' => '', 
        //     'prefix_indexes' => true, 
        // ],

        // 'HRDAPPS31(shiyou_sentaku_main)'=> [
        //     'driver' => 'mysql',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_2', 'HRDAPPS31'),
        //     'port' => env('DB_PORT_2', '3314'),
        //     'database' => env('DB_DATABASE_2', 'shiyou_sentaku_main'),
        //     'username' => env('DB_USERNAME_2', 'romel006995'),
        //     'password' => env('DB_PASSWORD_2', '006995'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],

        // 'ShiyoushoCommon_Test'=> [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_8', ''),
        //     'port' => env('DB_PORT_8', '0'),
        //     'database' => env('DB_DATABASE_8', 'forge'),
        //     'username' => env('DB_USERNAME_7', 'forge'),
        //     'password' => env('DB_PASSWORD_7', '81at84'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],
        
        
        // 'HRDSQL8(ShiyoushoCommon)'=> [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_8', 'HRDSQL8'),
        //     'port' => env('DB_PORT_8', '0'),
        //     'database' => env('DB_DATABASE_8', 'forge'),
        //     'username' => env('DB_USERNAME_8', 'forge'),
        //     'password' => env('DB_PASSWORD_8', '81at84'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],

        // 04-26-23
        // 'HRDSQL69'=> [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_2', 'HRDSQL8'),
        //     'port' => env('DB_PORT_2', '0'),
        //     'database' => env('DB_DATABASE_2', 'forge'),
        //     'username' => env('DB_USERNAME_2', 'forge'),
        //     'password' => env('DB_PASSWORD_2', '81at84'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],

        // 'HRDSQL6'=> [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_9', 'HRDSQL8'),
        //     'port' => env('DB_PORT_9', '0'),
        //     'database' => env('DB_DATABASE_9', 'forge'),
        //     'username' => env('DB_USERNAME_9', 'forge'),
        //     'password' => env('DB_PASSWORD_9', '81at84'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],
        // 'HRDSQL_TRAINING(Shiyousho_Catalog_Test)'=> [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_7', 'SD_SQL_TRAINING'),
        //     'port' => env('DB_PORT_7', '0'),
        //     'database' => env('DB_DATABASE_7', 'forge'),
        //     'username' => env('DB_USERNAME_7', 'forge'),
        //     'password' => env('DB_PASSWORD_7', '81at84'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],
        // 'HRDSQL7(ShiyoushoCommon)'=> [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_6', 'HRDSQL7'),
        //     'port' => env('DB_PORT_6', '0'),
        //     'database' => env('DB_DATABASE_6', 'forge'),
        //     'username' => env('DB_USERNAME_6', 'forge'),
        //     'password' => env('DB_PASSWORD_6', '81at84'),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        // ],

        // 'HRDAPPS31(j_shiyou_sentaku_main)'=> [ 
        //     'driver' => 'mysql', 
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST_10', 'HRDAPPS31'), 
        //     'port' => env('DB_PORT_10', '3314'), 
        //     'database' => env('DB_DATABASE_10', 'j_shiyou_sentaku_main'), 
        //     'username' => env('DB_USERNAME_10', 'romel006995'), 
        //     'password' => env('DB_PASSWORD_10', '006995'), 
        //     'charset' => 'utf8', 
        //     'prefix' => '', 
        //     'prefix_indexes' => true, 
        // ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
