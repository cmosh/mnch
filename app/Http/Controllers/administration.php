<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;



use Request;
use Input;
use SSH;


class administration extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

		public function __construct()
	{
		$this->middleware('auth');
		$this->clist = command::thelist();
		$this->ssh_connection = command::ssh_connection();
	}

	public function index()
	{
		return view('admin.index')->with('location','Admin')
								->with('title','Administration');
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


}
