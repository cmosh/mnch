<?php namespace App\Http\Controllers;

use Illuminate\Http\Request As Requested;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Helpers\Command;
use Request;
use Input;
use SSH;


class administration extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	
		public function __construct( Requested $request)
	{
		$this->ip = $request->getClientIp();
		$this->middleware('auth');
		$this->clist = Command::thelist($request->getClientIp());
		$this->ssh_connection = Command::ssh_connection();
		$this->role = function ($min) use ($request) {
			if($request->user()->role<$min)abort(403);
		};

	}

	public function globe()
	{
		$this->role->__invoke(4);	
		return view('admin.global')->with('location','Admin')
								->with('title','Administration')
								->with('ip',$this->ip);
	}

	public function serve(){

		$env = config('app.env');
		$mak = config('app.mak');
		$folder = config('app.folder');

			$this->role->__invoke(3);
			if($env!='test'){

			if($mak) $command = 'cd ~/'.$folder.'/mnch && screen -d -m php artisan larasset:serve --port 5000';
			else abort(403);
			

			}
			else { $command = 'cd ~/mnch_bak && screen -d -m php artisan larasset:serve --port 5000';}


		 SSH::into($this->ssh_connection)->run($command, function($line)
      	  	{
      	  		echo $line.PHP_EOL;
      	  	});
		
		return redirect()->action('AnalyticsController@ch');
	}





	public function stop(){

		$env = config('app.env');
		$mak = config('app.mak');
		
			$this->role->__invoke(3);
			if($env!='test' && !$mak)abort(403);

		$command = 'pid=$(lsof -i:4000 -t); kill -TERM $pid || kill -KILL $pid';
		 SSH::into($this->ssh_connection)->run($command, function($line)
      	  	{
      	  		echo $line.PHP_EOL;
      	  	});

		return redirect()->action('AnalyticsController@ch');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function localredis()
	{
		$this->role->__invoke(4);			
		return view('admin.redmin')->with('location','Admin')
								->with('title','Administration');
	}


	public function localmem()
	{	
		$this->role->__invoke(4);		
		return view('admin.memcached')->with('location','Admin')
								->with('title','Administration');
	}

	public function commandcenter()
	{	
		$this->role->__invoke(4);
		return view('admin.commandcenter')->with('location','Admin')
								->with('title','Administration');

								
	}

	public function docmd(){
         if(Request::ajax()) {
      $data = Input::all();
      	$cmd=$data['cmd']; 
      	$command=$this->clist[$cmd];
      	$command=Command::environment($command);
      	  SSH::into($this->ssh_connection)->run($command, function($line)
      	  	{
      	  		echo $line.PHP_EOL;
      	  	});
      	  die;
      	}

	}

	public function globcmd(){
         if(Request::ajax()) {
      $data = Input::all();
      	$cmd=str_replace(config('app.env'), $data['appenv'],$data['cmd']); 

      	$command=$this->clist[$cmd];
      	$command=Command::environmentG($command,$data['appenv']);
      	  SSH::into($data['connection'])->run($command, function($line)
      	  	{
      	  		echo $line.PHP_EOL;
      	  	});
      	  die;
      	}
      	
	}

}
