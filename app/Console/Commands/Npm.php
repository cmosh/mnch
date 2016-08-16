<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Npm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'npm:install {package}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description =  'Installs packages to mnch\'s node installation
                                {package : name of package to be installed}';

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
          $pkg = $this->argument('package');
          $npm = config('node.npm');
          $prefix = config('node.modules');
          system("$npm install -g --no-bin-links --prefix $prefix $pkg");
    }
}
