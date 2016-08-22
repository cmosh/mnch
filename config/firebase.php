<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Firebase executable
    |--------------------------------------------------------------------------
    |
    | Firebase executable
    | 
    |
    */
    'host'      => env('FIREBASE_DATABASEURL'),
    'token'     => env('FIREBASE_DATABASESECRET'),
    'timeout'   => 10,
    'sync'      => false,  
];