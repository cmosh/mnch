<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Firebase;
use MongoDB\BSON\ObjectID;
use App\Helpers\Builder;

class FirebaseRes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firebase:restore {model?*}';

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

        $models = empty($mdl) ? Builder::getModels() : $mdl;

        foreach ($models as $modelname) {

            $modelname = "\\App\\Models\\".$modelname;
            $model = new $modelname;
            $collection = $model->collection();
            $this->info("Restoring $collection");
            $temp = Firebase::get($collection);
              $this->info("$collection fetched from firebase.");
            $data = array_values(json_decode($temp,true));       
              $this->info("$collection decoded.");
             $array = array_map(function($array){
                       $array["_id"]= new ObjectID($array['_id']);
                       return $array;
                   },$data);
               $this->info("ObjectID's generated.");

            // print_r($data);
            $model->insert($array);
            $this->info("Restore Complete.");
        }
    }
    
}
