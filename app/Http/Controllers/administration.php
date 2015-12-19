<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request As Requested;
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
		$this->clist = command::thelist($request->getClientIp());
		$this->ssh_connection = command::ssh_connection();
		if($request->user()->role<4 )abort(403);

	}

	public function globe()
	{
		
	
		return view('admin.global')->with('location','Admin')
								->with('title','Administration')
								->with('ip',$this->ip);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function localredis()
	{
			
		return view('admin.redmin')->with('location','Admin')
								->with('title','Administration');
	}


	public function localmem()
	{
			
		return view('admin.memcached')->with('location','Admin')
								->with('title','Administration');
	}

	public function commandcenter()
	{	
		
		return view('admin.commandcenter')->with('location','Admin')
								->with('title','Administration');

								
	}

	public function docmd(){
         if(Request::ajax()) {
      $data = Input::all();
      	$cmd=$data['cmd']; 
      	$command=$this->clist[$cmd];
      	$command=command::environment($command);
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
      	$cmd=str_replace(env('APP_ENV'), $data['appenv'],$data['cmd']); 

      	$command=$this->clist[$cmd];
      	$command=command::environmentG($command,$data['appenv']);
      	  SSH::into($data['connection'])->run($command, function($line)
      	  	{
      	  		echo $line.PHP_EOL;
      	  	});
      	  die;
      	}
      	
	}

}
