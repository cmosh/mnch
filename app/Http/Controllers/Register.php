<?php namespace App\Http\Controllers;
use App\Http\Requests;


use App\Http\Controllers\Controller;

use App\User;
use App\Tables\User_monitor;
use App\Tables\countie;



use Illuminate\Http\Request;
use App\Http\Requests\Requestuser;

use Input;

use Redirect;
use Session;
use Response;
use Hash;
use Request As Rq;
use Carbon\Carbon;
use Mail;

class Register extends Controller {



	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()

		{


				$Counties = countie::all();
				return view('usermanagement.register')->with('counties',$Counties);
		
	}



	public function store(Requestuser $Requestuser)

	{

$array=$Requestuser->all();
		$new=array_shift($array);
		$x = array();



	$users=new User;
	foreach ($array as $key ) {
		# code...
			$x[]=$key;
			
	}

	
	$Counties = countie::all();
	$x[1]=$Counties[$x[1]]->Name;	
	//$statusnum=1;
			
	

	
		$data=array(
		'name'=>$x[0],
		'county'=>$x[1],
		'PhoneNumber'=>$x[2],
		'IDNumber'=>$x[3],
		'email'=>$x[4],
		'password'=>bcrypt('41414f!#!#!#934h141!#1!#sdhsdkj'),
		'role'=>$x[5],
		'status'=>'0'
		);
		
		

 User::createOrUpdate(
                $data, 
                array('email' => $x[4]));

 Mail::send('emails.register',['name'=>$data['name']], function($message) use($data)
{
    $message->to($data['email'], 'MNCH')->subject('Accout Creation');
});
	
	$users=User::all();
	
	
			return redirect('/')->with('users',$users)->with('location','umanage')->with('title','User Management');

		
	}


	}


