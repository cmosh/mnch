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
    protected $signature = 'firebase:backup {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manually run firebase backup.';

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
        $mdl = $this->argument('model');
       
         $this->call('docker:start', [
        'service' => ['mongo'], '--d' => 'default'
         ]);


        config(['database.connections.mongodb'=> [
             'driver'   => 'mongodb',
             'host'     => config('docker.host'),
             'port'     => config('docker.mongo'),
             'database' => config('database.connections.mongodb.database'),
             'username' => config('database.connections.mongodb.username'),
             'password' => config('database.connections.mongodb.password'),
             'options' => [
             'db' => 'mnch' 
              ]
        ]]);


        $modelname = "\\App\\Models\\".$mdl;
        $model = new $modelname;
      
        $rowcount = $model->where('backed_up', '!=', 1)->count();
        $this->info("Backing up $rowcount records.");   
        $i = 1;
        $model->where('backed_up', '!=', 1)->chunk(50, function($models) use ($rowcount,$i) {            
            foreach ($models as $m) {
            $m->backed_up = 1;
            $m->save();
            $this->info("Backed up $i/$rowcount.");
            $i++;
            }
         });

        $this->info("Finished, backed up $rowcount/$rowcount records.");
    }
}
