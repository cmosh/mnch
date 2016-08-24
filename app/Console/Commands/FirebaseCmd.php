<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\Builder;
use Uuid;

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
        global $i,$y,$rowtotal;
        
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
            $chunkfactor = Uuid::generate(4);
            $modelname = '\\App\\Models\\'.$modelname;
            $model = new  $modelname;
            $collection = $model->collection();      
            $rowtotal = $model->where('backed_up', '!=', 1)->count();
            $this->info("There are $rowtotal records that have not been manually backed up in $collection.(Autobackups are not included in the query)");   
            $model->where('backed_up', '!=', 1)->orWhere('chunkfactor',$chunkfactor)->chunk(50, function($models) use ($chunkfactor,$collection){  

                global $i,$y,$rowtotal;

                $rowcount = $models->count();
                $z = 1;
                $this->info("Backing up $y(st/nd/rd/th) chunk in $collection with $rowcount records.");

                foreach ($models as $m) {
                $m->backed_up = 1;
                $m->chunkfactor = $chunkfactor;
                $m->save();
                $this->info("Backed up $z/$rowcount.");
                $z++;
                $i++;
                }            
                $y++;
                $blocktotal = $i-1;
                  $this->info("Finished chunk($blocktotal/$rowtotal records backed up).");
             });
            $i--;
            $this->info("Finished, backed up $i/$rowtotal records.");
        } 

        $this->info("All operations finished.");
    }

  

}
