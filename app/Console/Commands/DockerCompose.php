<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerCompose extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:run {--d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs mnch with pre-defined docker images. Use the --d option to daemonise in production).';

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
        $this->info("Spinning up docker containers with caddy, mongodb and redis.");
        $this->option('d') ? $daemon='-d':$daemon='';
        system("cd docker && docker-compose up ".$daemon." caddy redis mongo");
    }
}
