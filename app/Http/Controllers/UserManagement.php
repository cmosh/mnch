<?php namespace App\Http\Controllers;

use App\Http\Requests;


use App\Http\Controllers\Controller;

use App\User;
use App\Tables\User_monitor;
use App\Tables\countie;
use App\Tables\Counties_assessed;
use App\Tables\partial_peruser;
use App\Tables\completed_peruser;
use App\Tables\partial_peruser_perday;
use App\Tables\completed_peruser_perday;

use App\Tables\assessments;

use App\Tables\Survey;
use Illuminate\Http\Request;
use App\Http\Requests\Requestuser;
use App\Http\Requests\Requestpass;
use Input;
use Validator;
use Redirect;
use Session;
use Maatwebsite\Excel\Excel;
use Response;
use Hash;





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




	public function ajax(Request $Request)

	{

         if($Request->ajax()) {
      $data = Input::all();
      print_r($data);die;
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
	

	 $v = Validator::make(Input::all(), $Requestuser->rules());
   

    if ($v->fails())
    {
        return redirect()->back()->withErrors($v->errors());
    }
    else
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
		'password'=>bcrypt('123456'),
		'role'=>$x[5],
		'status'=>'1'
		);
		
		

 User::createOrUpdate(
                $data, 
                array('email' => $x[4]));
		 
	$users=User::all();
	
	
			return redirect('usermanagement/viewusers')->with('users',$users)->with('location','umanage')->with('title','User Management');
}
		
	}




	public function store_multi(Request $Request)
	{


		$array=$Request->all();
		$new=array_shift($array);
		$x = array();



	$users=new User;
	foreach ($array as $key ) {
		# code...
			$x[]=$key;
			
	}

	
	
			
	

	for($i=0;$i<sizeof($x)/6;$i++)
	{
		$num=6*$i;
		$role=0;
		if($x[5+$num]=='countyuser')
		{
			$role=0;
		}
		if($x[5+$num]=='dataclerk')
		{
			$role=1;
		}
		if($x[5+$num]=='programuser')
		{
			$role=2;
		}
		if($x[5+$num]=='systemuser')
		{
			$role=3;
		}
		$data=array(
		'name'=>$x[0+$num],
		'county'=>$x[1+$num],
		'PhoneNumber'=>$x[2+$num],
		'IDNumber'=>$x[3+$num],
		'email'=>$x[4+$num],
		'password'=>bcrypt('123456'),
		'role'=>$role,
		'status'=>'1'
		);
	
		
		

 User::createOrUpdate(
                $data, 
                array('email' => $x[4+$num]));
		 }
	$users=User::all();
	
	
	
		return redirect('usermanagement/viewusers')->with('x',$x)->with('users',$users)->with('location','umanage')->with('title','User Management');

		





	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
		$surveys=Survey::all();
		$user_monitor=User_monitor::all();
		$counties_assessed=Counties_assessed::all();
		// $Surveycompletion_daily=Surveycompletion_daily::all();
		// $Surveycompletion_total=Surveycompletion_total::all();
		$pperuser=partial_peruser::all();
		$cperuser=completed_peruser::all();
		$pperday=partial_peruser_perday::all();
		$cperday=completed_peruser_perday::all();
		$users=User::all();
		$assessments=assessments::all();
		$ch=User_monitor::where('Survey','like','CH%')->get();
		$mnh=User_monitor::where('Survey','like','MNH%')->get();
		$imci=User_monitor::where('Survey','like','IMCI%')->get();

		if($request->user()->role>=2)
		{

	return view('usermanagement.monitor')->with('mnh',$mnh)->with('imci',$imci)->with('ch',$ch)->with('cperday',$cperday)->with('pperday',$pperday)->with('users',$users)->with('assessments',$assessments)->with('cperuser',$cperuser)->with('pperuser',$pperuser)->with('surveys',$surveys)->with('counties_assessed',$counties_assessed)->with('user_monitor',$user_monitor)->with('location','preview')->with('title','Progress Review');

		}	



	}

		public function entryprofile($id)

	{

			$user_complete=User_monitor::where('id','=',$id)->where('Status','=','Submitted')->get();
			$user_incomplete=User_monitor::where('id','=',$id)->where('Status','<>','Submitted')->get();
			$user_details=User::where('id','=',$id)->get();
			$surveys=Survey::all();



	return view('usermanagement.entryprofile')->with('user_details',$user_details)->with('surveys',$surveys)->with('complete',$user_complete)->with('incomplete',$user_incomplete)->with('location','preview')->with('title','Progress Review');

		

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
$v = Validator::make(Input::all(), $rules);
   

    if ($v->fails())
    {
        return redirect()->back()->withErrors($v->errors());
    }
    else
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
	
	
				return redirect('usermanagement/viewusers')->with('users',$users)->with('location','umanage')->with('title','User Management');

	}
}



public function redirecter()
{
		return redirect()->back();
}


public function changepass()
{
	$error_message='';

				return view('usermanagement.change')->with('location','Home')->with('title','Profile')->with('error_message',$error_message);


}


	public function updatepass(Requestpass $Requestpass,$id)
	{
		$users=User::all();

$array=$Requestpass->all();
	
		$x = array();



	$users=new User;
	foreach ($array as $key ) {
		# code...
			$x[]=$key;
			
			}

			$oldpass=User::where('id','=',$id)->first();

		if(Hash::check($x[1], $oldpass->password))
		{	
			if($x[1]!=$x[2])
			{
				
				$data=array(
				'password'=>bcrypt($x[2])
				);
			

		 User::createOrUpdate(
		                $data, 
		                array('id' => $id));
		 $error_message="ok";

					}

					
			
			else
			{
				$error_message="Error:New Password matches previous password!";
			}
		}
		else

		{
				$error_message="Error:Incorrect Old Password!";
		}
		 
	
	
	
				return view('usermanagement.change')->with('users',$users)->with('location','Home')->with('title','Profile')->with('error_message',$error_message);



		
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


		//$user=User::where('id','=',$id)->get();
		$user =User::find($id);
		
		if($user->status===0)
		{
				$user->status='1';
				$user->password=bcrypt('123456');


				
				 
		 

		}
		else
		{
				$user->status='0';
				$user->password=bcrypt('!!##9ax$kbyx*%');


		}


		$user->update();
		$users=User::all();

		return redirect('usermanagement/viewusers')->with('users',$users)->with('location','umanage')->with('title','User Management');


	}






	public function reset($id)

	{

		$user =User::find($id);
		$user->password=bcrypt('123456');
		$user->update();
		$users=User::all();
		return redirect('usermanagement/viewusers')->with('users',$users)->with('location','umanage')->with('title','User Management');


	}

public function multi()
	{
		//
						return view('usermanagement.multi')->with('location','umanage')->with('title','User Management')->with('error_msg','');

	}



	// public function getDownload(){
 //        //PDF file is stored under project/public/download/info.pdf
 //        $file= public_path(). "/downloads/example.xlsx";
 //        $headers = array(
 //              'Content-Type: application/xlsx',
 //            );
 //        return Response::download($file, 'example.xlsx', $headers);
	// 	}


	public function export_template(Excel $excel)
	{

		$excel->create('EXCEL TEMPLATE', function($ex) {

	    $ex->sheet('Sheetname', function($sheet) {
	    	
	    		$sheet->row(1, array(
     'Name',	'County'	,'PhoneNumber',	'IDNumber'	,'email'	,'role'		

			)
	    		
	    		);
	    			$sheet->row(2, array(
     'Username1',	'Nairobi'	,'715909090',	'123123'	,'email@site.com'	,'programuser'		

			)
	    		
	    		);
	    		
					
				});


	       

	  

	})->download('xls');



	}



 
	public function export(Excel $excel,$type)
	{
		if($type=='users')
		{

				$excel->create('ALL_USERS', function($ex) {

	    $ex->sheet('Sheetname', function($sheet) {
	    	
	    		$sheet->row(1, array(
     'Name',	'County'	,'PhoneNumber',	'IDNumber'	,'email'	,'role'		

			)
	    		
	    		);
	    		$users=User::all();
	    		$counter=0;
	    		foreach ($users as $user) {
	    			# code...
	    		
	    			$counter++;
		    			if($user->role==0)
		    			{
		    				$role='countyuser';
		    			}
		    			if($user->role==1)
		    			{
		    				$role='dataclerk';
		    			}
		    			if($user->role==2)
		    			{
		    				$role='programuser';
		    			}
		    			if($user->role==3)
		    			{
		    				$role='systemuser';
		    			}
		    			if($user->role=='')
		    			{
		    				$role='Unknown';
		    			}


						$sheet->row($counter+1, array(

		     			$user->name, $user->county,$user->PhoneNumber,$user->IDNumber,$user->email,$role
						
						));
					
				}


	       

	    });

	})->download('xls');
			}


			else if(substr($type,0,2)=='CH'|| 'IM'||'MN')
			{

				$survey_name=substr($type,0,2);
				$excel->create('general'.$survey_name, function($ex) use($survey_name) {

	    $ex->sheet('Sheetname', function($sheet) use($survey_name) {
	    	
	    	$sheet->setColumnFormat(array(
    					'D' => 'yyyy-dd-mm'
					));
	    		$sheet->row(1, array(
     'Version',	'Assessment Term'	,'Assessor'	,'Date'	,'Facility',	'County',	'Entered by'	,'Status'	

			)
	    		
	    		);

	    		
	    		$counter2=0;
	    		
				$usermonitor=User_monitor::where('Survey','Like',$survey_name.'%')->get();

	    		foreach ($usermonitor as $user_m) {
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			substr($user_m->Survey,-1,1), $user_m->Assessment_Term,$user_m->assname,$user_m->Date,$user_m->FacilityName,$user_m->County,$user_m->username,$user_m->Status
						
						));
					
				}

				


	       

	    });

	})->download('xls');









			}
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
    return Redirect::to('/usermanagement/addusers_multi')->withInput()->with('error_msg','Please select a file before clicking Submit');
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
      $x=array();
		for($i=0;$i<sizeof($result[0]);$i++)
		{
		if($result[0][$i]->name !='')
		{
		$count++;	
		$x[$i]=array(
		'name'=>$result[0][$i]->name,
		'county'=>$result[0][$i]->county,
		'PhoneNumber'=>$result[0][$i]->phonenumber,
		'IDNumber'=>$result[0][$i]->idnumber,
		'password'=>bcrypt('123456'),
		'email'=>$result[0][$i]->email,
		'role'=>$result[0][$i]->role,
		'status'=>'1'
		);




		// User::createOrUpdate(
  //               $data, 
  //               array('email' => $result[0][$i]->email));

		}
		else
		{
			$i++;
		}

	}
		      // Session::flash('success', $count. ' Users registered successfully!'); 

      return view('usermanagement.multiedit')->with('users',$x)->with('location','umanage')->with('title','User Management');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('/usermanagement/addusers_multi');
    }
  }






}




}
