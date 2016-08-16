<?php
return [
   /*
    |--------------------------------------------------------------------------
    | Node js version, defaults to 6.3.1
    |--------------------------------------------------------------------------
    |
    | Should be the same as defined in composer.json
    | Example: v6.3.1
    |
    | Refer for more details:
    | https://core.telegram.org/bots#botfather
    |
    */
    'version' => env('NODE_VER', 'v6.3.1'),
    /*
    |--------------------------------------------------------------------------
    | Node js architecture
    |--------------------------------------------------------------------------
    |
    | Will be either 64 or 32 bit(x86 or x64)
    | Depends on server + php architecture
    |
    |
    */
    'arch' => "x" . substr(php_uname("m"), -2),
    /*
    |--------------------------------------------------------------------------
    | Node js folder
    |--------------------------------------------------------------------------
    |
    | The directory where node has been installed
    | Defaults to /vendor/node
    |
    |
    */
    'dir' => base_path().env('NODE_DIR', '/node'),
    /*
    |--------------------------------------------------------------------------
    | Node js port
    |--------------------------------------------------------------------------
    |
    | Defaults to 38294, for security reasons
    | Where the node server will run
    |
    */
    'port' => env('NODE_PORT',38294),
    /*
    |--------------------------------------------------------------------------
    | Node js executable
    |--------------------------------------------------------------------------
    |
    | The nodejs executable
    | 
    |
    */
    'bin' => base_path().env('NODE_BIN','/node/bin/node'),
    /*
    |--------------------------------------------------------------------------
    | Node js entrypoint
    |--------------------------------------------------------------------------
    |
    | The file used to start the node instance,    
    | defaults to app/node/main.js
    |
    */
    'entrypoint' => app_path().'/Node/'.env('NODE_ENTRYPOINT','main.js'),
    /*
    |--------------------------------------------------------------------------
    | Node js pid
    |--------------------------------------------------------------------------
    |
    | The file used to log node's pid   
    |
    |
    */
    'pid' => app_path().'/Node/pid',
    /*
    |--------------------------------------------------------------------------
    | Location of npm
    |--------------------------------------------------------------------------
    |
    | gives a global npm  
    |
    |
    */
    'npm' => base_path().'/node/lib/node_modules/npm/bin/npm-cli.js',
    /*
    |--------------------------------------------------------------------------
    | Location of node modules
    |--------------------------------------------------------------------------
    |
    | where node modules are installed
    |
    |
    */
    'modules' => base_path().'/node',
];