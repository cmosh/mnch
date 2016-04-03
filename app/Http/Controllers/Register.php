<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requestuser;
use Illuminate\Http\Request;
use App\Models\Counties;
use App\Http\Requests;
use App\Models\User;
use Carbon\Carbon;
use Response;
use Redirect;
use Session;
use Input;
use Hash;
use Mail;

class Register extends Controller {



	public function index()

		{


				$Counties = Counties::all();
				return view('usermanagement.register')->with('counties',$Counties)->with('info','');
		
	}



	public function store(Requestuser $Requestuser)

	{

$array=$Requestuser->all();
		$new=array_shift($array);
		$x = array();



	$users=new User;
	foreach ($array as $key ) {
		
			$x[]=$key;
			
	}

	
	$Counties = Counties::all();
	$x[1]=$Counties[$x[1]]->Name;	

		$data=array(
		'name'=>$x[0],
		'county'=>$x[1],
		'PhoneNumber'=>$x[2],
		'IDNumber'=>$x[3],
		'email'=>$x[4],
		'password'=>bcrypt('41414f!#!#!#934h141!#1!#sdhsdkj'),
		'role'=>intval($x[5]),
		'status'=>0
		);
		
		

 User::createOrUpdate(
                $data, 
                array('email' => $x[4]));


 if($data['role']==0)
		    			{
		    				$role='county user';
		    			}
		    			if($data['role']==1)
		    			{
		    				$role='data clerk';
		    			}
		    			if($data['role']==2)
		    			{
		    				$role='program user';
		    			}
		    			if($data['role']>=3)
		    			{
		    				$role='system user';
		    			}
		    			if($data['role']=='')
		    			{
		    				$role='Unknown';
		    			}

 Mail::send('emails.register',['name'=>$data['name']], function($message) use($data)
{
    $message->to($data['email'], 'MNCH_noreply')->subject('Accout Creation');
});
	 Mail::send('emails.admin',['name'=>$data['name'],'county'=>$data['county'],'phone'=>$data['PhoneNumber'],'idnum'=>$data['IDNumber'],'email'=>$data['email'],'role'=>$role], function($message) use($data)
{
    $message->to('pchegenjenga@gmail.com', 'MNCH_noreply')->subject('Accout Creation');
});
	$users=User::all();
	
	
				return view('usermanagement.register')->with('counties',$Counties)->with('info','ok');

		
	}


	}


