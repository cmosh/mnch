<?php namespace App\Http\Controllers;

use App\Http\Requests;


use App\Http\Controllers\Controller;
use App\User;
use App\Tables\User_monitor;
use App\Tables\countie;
use App\Tables\Counties_assessed;
use App\Tables\Surveycompletion_daily;
use App\Tables\Surveycompletion_total;
use Illuminate\Http\Request;
use App\Http\Requests\Requestuser;
use Input;
use Validator;
use Redirect;
use Session;
use Maatwebsite\Excel\Excel;





class UserManagement extends Controller {
/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		$users=User::all();



		
		if($request->user()->role==3)
		{
		return view('usermanagement.view')->with('users',$users)->with('location','umanage')->with('title','User Management');
}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{

	
		//
		$Counties = countie::all();
	if($request->user()->role==3)
		{
				return view('usermanagement.create')->with('counties',$Counties)->with('location','umanage')->with('title','User Management');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store(Requestuser $Requestuser)



	{
		// if(Request::ajax()) {
  //     $data = Input::all();
  //     // $county = $data['county'];
  //      $name = $data['name'];
  //     //  $idnum = $data['idnum'];
  //     //  $phone = $data['phone'];
  //     //   $role = $data['role'];
  //     //   $email = $data['email'];


       

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
	$statusnum=1;
			
	

	
		$data=array(
		'name'=>$x[0],
		'county'=>$x[1],
		'PhoneNumber'=>$x[2],
		'IDNumber'=>$x[3],
		'email'=>$x[4],
		'password'=>bcrypt('123456'),
		'role'=>$x[5],
		'status'=>$statusnum
		);
		
		

 User::createOrUpdate(
                $data, 
                array('email' => $x[4]));
		 
	$users=User::all();
	
	
				return view('usermanagement.view')->with('users',$users)->with('location','umanage')->with('title','User Management');

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
		//
		$user_monitor=User_monitor::all();
		$counties_assessed=Counties_assessed::all();
		$Surveycompletion_daily=Surveycompletion_daily::all();
		$Surveycompletion_total=Surveycompletion_total::all();
		if($request->user()->role==3 || 2)
		{

	return view('usermanagement.monitor')->with('Surveycompletion_total',$Surveycompletion_total)->with('Surveycompletion_daily',$Surveycompletion_daily)->with('counties_assessed',$counties_assessed)->with('user_monitor',$user_monitor)->with('location','preview')->with('title','Progress Review');

		}	



	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//


			$user=User::where('id','=',$id)->get();
			$Counties = countie::all();
			
			
		return view('usermanagement.edit')->with('counties',$Counties)->with('user',$user)->with('location','umanage')->with('title','User Management');
	
}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requestuser $Requestuser,$id)
	{
		//



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
	
		$data=array(
		'name'=>$x[0],
		'county'=>$x[1],
		'PhoneNumber'=>$x[2],
		'IDNumber'=>$x[3],
		'email'=>$x[4],
		'role'=>$x[5]
		);
		
		

 User::createOrUpdate(
                $data, 
                array('id' => $id));
		 
	$users=User::all();
	
	
				return view('usermanagement.view')->with('users',$users)->with('location','umanage')->with('title','User Management');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function status_change($id)
	{
		//


		$user=User::where('id','=',$id)->get();
		if($user->status==0)
		{

		}
		else
		{


		}
	}

public function multi()
	{
		//
						return view('usermanagement.multi')->with('location','umanage')->with('title','User Management');

	}




	public function upload(Excel $excel) {
  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
     

      $result=$excel->load('public/uploads/'.$fileName)->get();
      $count=0;
		for($i=0;$i<sizeof($result[0]);$i++)
		{
		if($result[0][$i]->name !='')
		{
		$count++;	
		$data=array(
		'name'=>$result[0][$i]->name,
		'county'=>$result[0][$i]->county,
		'PhoneNumber'=>$result[0][$i]->phonenumber,
		'IDNumber'=>$result[0][$i]->idnumber,
		'password'=>bcrypt('123456'),
		'email'=>$result[0][$i]->email,
		'role'=>$result[0][$i]->role,
		'status'=>'1'
		);




		User::createOrUpdate(
                $data, 
                array('email' => $result[0][$i]->email));

		}
		else
		{
			$i++;
		}

	}
		      Session::flash('success', $count. ' Users registered successfully!'); 

      return Redirect::to('usermanagement/addusers_multi');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }






}




}
