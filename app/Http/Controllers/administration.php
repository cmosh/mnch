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
		$this->role = $request->user()->role;

	}

	public function globe()
	{
		if($this->role<4)return view('errors.404')->with('location','Home');
	
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
			if($this->role<4)return view('errors.404')->with('location','Home');
		return view('admin.redmin')->with('location','Admin')
								->with('title','Administration');
	}


	public function localmem()
	{
			if($this->role<4)return view('errors.404')->with('location','Home');
		return view('admin.memcached')->with('location','Admin')
								->with('title','Administration');
	}

	public function commandcenter()
	{
			if($this->role<4)return view('errors.404')->with('location','Home');
		
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
