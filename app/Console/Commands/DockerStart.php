<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:start {service?*} {--t=10} {--d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the specific docker service or all services.';

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
        $this->option('d') ? $daemon='-d':$daemon='';
        $msg = empty($service) ? "Starting all mnch docker containers.":"Starting $services.";
        $this->info($msg);
        system("cd docker && docker-compose up $daemon -t $time $services");
    }
}
