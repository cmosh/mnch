<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FirebaseCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firebase {cmd}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run firebase commands(mnch uses firebase for database backups-- :) cheat codes)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
          $cmd = $this->argument('cmd');
          $firebase = config('firebase.bin');
          system("$firebase $cmd");
    }
}
