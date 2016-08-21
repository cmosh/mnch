<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerRestart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:restart {service?*} {--t=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restart the specific docker service or all services.';

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
        $time =  $this->option('t');
        $services = implode(" ",$service);
        $msg = empty($service) ? "Restarting all mnch docker containers.":"Restarting $services.";
        $this->info($msg);
        system("cd docker && docker-compose restart -t $time $services");
    }
}
