<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerDown extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:down {--v}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stops all docker container instances. Use --v to delete all volume data.';

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
        $this->info("Stopping all mnch docker containers.");
        $this->option('v') ? $daemon='-v':$daemon='';
        system("cd docker && docker-compose down ".$daemon);
    }
}
