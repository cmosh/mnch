<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerStop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:stop {service?*} {--t=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stops all docker container instances or specific service instance. Use --t to specify time in seconds for shutdown.';

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
        $msg = empty($service) ? "Stopping all mnch docker containers.":"Stopping $services.";
        $this->info($msg);
        system("cd docker && docker-compose stop -t $time $services");
    }
}
