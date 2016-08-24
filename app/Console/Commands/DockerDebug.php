<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerDebug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:debug {service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Open a privileged shell to debug a specific service';

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
        $service = $this->argument('service'); 
        $this->info("Opening privileged exec for $service container.");
        system("cd docker && docker-compose exec --privileged $service bash");
    }
}
