<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\Builder;

class FirebaseCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firebase:backup {model?*}';

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
        global $i,$y;
        
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


        $models = empty($mdl) ? Builder::getModels() : $mdl;
        
        foreach ($models as $modelname) {
            $y = 1;
            $i = 1;
            $modelname = '\\App\\Models\\'.$modelname;
            $model = new  $modelname;
            $collection = $model->collection();      
            $rowcount = $model->where('backed_up', '!=', 1)->count();
            $this->info("There are $rowcount records that have not been manually backed up in $collection.(Autobackups are not included in the query)");   
            $model->where('backed_up', '!=', 1)->chunk(50, function($models) {  

                global $i,$y;

                $rowcount = $models->count();
                $z = 1;
                $this->info("Backing up $y(st/nd/rd/th) chunk with $rowcount records.");

                foreach ($models as $m) {
                $m->backed_up = 1;
                $m->save();
                $this->info("Backed up $z/$rowcount.");
                $z++;
                $i++;
                }            
                $y++;
             });
            $this->info("Finished, backed up $i/$rowcount records.");
        } 

        $this->info("All operations finished.");
    }

  

}
