<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Tables\User_monitor;
use App\Tables\Counties_assessed;
use App\Tables\Surveycompletion_daily;
use App\Tables\Surveycompletion_total;
use Illuminate\Http\Request;
use App\Http\Requests\Requestuser;






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



		
		if($request->user()->role=='systemuser')
		{
		return view('usermanagement.view')->with('users',$users)->with('location','umanage')->with('title','User Management');
}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request,$num)
	{

		for($i=0;$i<$num;$i++) 
	{
		
		$y[$i]=$i;
	}
		//
	if($request->user()->role=='systemuser')
		{
				return view('usermanagement.create')->with('location','umanage')->with('title','User Management')->with('counts',$y);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()



	{
		if(Request::ajax()) {
      $data = Input::all();
      // $county = $data['county'];
       $name = $data['name'];
      //  $idnum = $data['idnum'];
      //  $phone = $data['phone'];
      //   $role = $data['role'];
      //   $email = $data['email'];


        User::createOrUpdate(
                $data, 
                array('name' => $name));
		 	
			}


	// 	$array=Requestuser::all();
	// 	$new=array_shift($array);
	// 	$x = array();



	// $users=new User;
	// foreach ($array as $key ) {
	// 	# code...
	// 		$x[]=$key;
			
	// }

	// for($i=0;$i<sizeof($x)/6;$i++) 

	// {
	// 	$num=6*$i;
	// 	$data=array(
	// 	'name'=>$x[0+$num],
	// 	'email'=>$x[1+$num],
	// 	'county'=>$x[2+$num],
	// 	'PhoneNumber'=>$x[3+$num],
	// 	'IDNumber'=> $x[4+$num],
	// 	'role'=> $x[5+$num]);
	// 	User::insert($data);



	// 	# code...
	// }

	
		
	// $users=User::all();
	// if($request->user()->role=='systemuser')
	// 	{
	// 			return view('usermanagement.view')->with('users',$users)->with('location','umanage')->with('title','User Management');

	// 	}
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
		if($request->user()->role=='systemuser' || 'programuser')
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
