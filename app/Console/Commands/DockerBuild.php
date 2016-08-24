<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerBuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:build {service?*} {--pull}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build the specific docker service or all services.';

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
        $this->option('pull') ? $pull='--pull':$pull='';
        $services = implode(" ",$service);
        $msg = empty($service) ? "Building all mnch docker containers.":"Building $services.";
        $this->info($msg);
        system("cd docker && docker-compose build $pull $services");
    }
}
