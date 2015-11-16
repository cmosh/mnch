<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Allowed IP Addresses
    |--------------------------------------------------------------------------
    | Include an array of IP addresses or ranges that are allowed access to the app when
    | it is in maintenance mode.
    |
    | Supported formats:
    | 10.1.1.1
    | 10.1.*.*
    | 10.1.1.1-10.1.2.255
    |
    */
    'admin_ips' => [
        '127.*.*.*',
        '54.187.244.7',
        env('adminip2'),
        env('adminip1')
    ],
];