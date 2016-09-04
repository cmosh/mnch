<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		Commands\Inspire::class,
		Commands\DockerCompose::class,
		Commands\DockerDown::class,
		Commands\DockerStop::class,
		Commands\DockerRestart::Class,
		Commands\DockerBuild::Class,
		Commands\DockerStatus::Class,
		Commands\DockerStart::Class,
		Commands\DockerDebug::Class,
		Commands\FirebaseCmd::Class,
		Commands\FirebaseRes::Class
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		$schedule->command('inspire')
				 ->hourly();
	}

}
