<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Entropy App Name
    |--------------------------------------------------------------------------
    |
    | Define here the name of your Entropy dashboard Application. Modify
    | this as you see fit.
    |
    */

    'name' => env('ENTROPY_APP_NAME', 'Entropy'),

    /*
    |--------------------------------------------------------------------------
    | Entropy Path.
    |--------------------------------------------------------------------------
    |
    | You may define here the path on which the Entropy admin panel is served.
    | Feel free to modify this as you see fit for your needs.
    |
    */

    'path' => env('ENTROPY_PATH', 'entropy'),

    /*
    |--------------------------------------------------------------------------
    | Middleware.
    |--------------------------------------------------------------------------
    |
    | You may define here all the middlewares that needs to be applied to
    | your admin panel routes. Feel free to add more middlewares
    | to that list.
    |
    */

    'middleware' => [
        'web',
        'auth',
    ],
];
