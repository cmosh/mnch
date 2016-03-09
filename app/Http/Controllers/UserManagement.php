<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Tables\User_monitor;
use App\Tables\counties;
use App\Tables\Counties_assessed;
use App\Tables\Counties_submitted_today;
use App\Tables\Counties_incomplete_today;
use App\Tables\Counties_submitted;
use App\Tables\Counties_incomplete;
use App\Tables\assessments;
use App\Tables\Survey;
use App\Helpers\County;
use Illuminate\Http\Request;
use App\Http\Requests\Requestuser;
use App\Http\Requests\Requestpass;
use App\Http\Requests\Requestedit;
use App\Helpers\Map;
use Input;
use Validator;
use Redirect;
use Session;
use Maatwebsite\Excel\Excel;
use Response;
use Hash;
use Request As Rq;
use Carbon\Carbon;
use Mail;

class UserManagement extends Controller {

	public function __construct(Request $request)
	{
		$this->Map = new Map;
		$this->middleware('auth');
		$this->role = function ($min) use ($request) {
			if($request->user()->role<$min)abort(403);
		};
	}
	
	public function index()
	{		
		$users=User::NonAdmins()->get();		
		$this->role->__invoke(3);
		return view('usermanagement.view')->with('users',$users)
										  ->with('location','umanage')
										  ->with('title','User Management');
	}

	public function test()
	{
		return view('usermanagement.test')->with('location','umanage')
										  ->with('title','User Management');
	}

	public function mail()
	{
		Mail::send('emails.add', ['name'=>'you','email'=>'email'], function($message)
					{
			   			$message->to('pchegenjenga@gmail.com', 'Paul Chege')->subject('Welcome!');
					});

		return view('usermanagement.test')->with('location','umanage')
										  ->with('title','User Management');
	}

	public function ajax()
	{
        if(Rq::ajax()) {
            $data = Input::all();
            print_r(json_encode($data));
            die;
                }     
	}

	public function create()
	{
		$this->role->__invoke(3);
		$Counties = counties::all();
		return view('usermanagement.create')->with('counties',$Counties)
											->with('location','umanage')
											->with('title','User Management');
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

		$Counties = counties::all();
		$x[1]=$Counties[$x[1]]->Name;

		$data=array(
		'name'=>$x[0],
		'county'=>$x[1],
		'PhoneNumber'=>$x[2],
		'IDNumber'=>$x[3],
		'email'=>$x[4],
		'password'=>bcrypt('123456'),
		'role'=>intval($x[5]),
		'status'=>1
		);

		User::createOrUpdate(
                $data, 
                array('email' => $x[4]));
                Mail::send('emails.add',['name'=>$data['name'],'email'=>$data['email']], function($message) use($data)
                	{
                	    $message->to($data['email'], 'MNCH_noreply')->subject('Accout Creation');
                	});
                $users=User::NonAdmins();
                return redirect('usermanagement/viewusers')->with('users',$users)
                										   ->with('location','umanage')
                										   ->with('title','User Management');
    }

	public function store_multi(Request $Request)
	{
		$array=$Request->all();		
		$x = array();

		foreach ($array as $key ) {
			$x[]=$key;
		}

		for($i=0;$i<(sizeof($x)-1)/6;$i++){
				$num=6*$i;
				$data=array(
					'name'=>$x[1+$num],
					'county'=>$x[2+$num],
					'PhoneNumber'=>'0'.$x[3+$num],
					'IDNumber'=>$x[4+$num],
					'email'=>$x[5+$num],
					'password'=>bcrypt('123456'),
					'role'=>intval($x[6+$num]),
					'status'=>1
					);

		User::createOrUpdate(
				$data, 
                array('email' => $x[4+$num]));

                Mail::send('emails.add',['name'=>$data['name'],'email'=>$data['email']], function($message) use($data)
                	{
                	    $message->to($data['email'], 'MNCH_noreply')->subject('Accout Creation');
                	});
		}
		$users=User::all();
		return redirect('usermanagement/viewusers')->with('x',$x)
												   ->with('users',$users)
												   ->with('location','umanage')
												   ->with('title','User Management');

	}

	public function show(Request $request)
	{	
		$this->role->__invoke(2);
		$surveys=Survey::all();
		$counties=counties::all();
		
		$user_monitor=assessments::Monitor();		
		$counties_assessed= County::AllAssessed();
		$submitted=County::Submitted();
		$incomplete=County::Incomplete();
		$submittedt=County::SubmittedToday();
		$incompletet=County::IncompleteToday();
		$users=User::all();
		$assessments=assessments::all();

		$ch=assessments::Monitor('CH');	
		$mnh=assessments::Monitor('MNH');	
		$imci=assessments::Monitor('IMCI');	

		return view('usermanagement.monitor')->with('ch',$ch)
											 ->with('mnh',$mnh)
											 ->with('imci',$imci)
											 ->with('users',$users)
											 ->with('surveys',$surveys)
											 ->with('counties',$counties)
											 ->with('location','preview')
											 ->with('submitted',$submitted)
											 ->with('submittedt',$submittedt)
											 ->with('incomplete',$incomplete)
											 ->with('title','Progress Review')
											 ->with('incompletet',$incompletet)
											 ->with('assessments',$assessments)
											 ->with('user_monitor',$user_monitor)
											 ->with('counties_assessed',$counties_assessed);
	}

	public function edit($id)
	{	
		$this->role->__invoke(3);
		$user=User::find($id);
		$Counties = counties::all();
		$counter=0;
		$county_index=0;

		foreach ($Counties as $County) {

						$counter++;
						if($County->Name==$user->county)
							{
								$county_index=$counter-1;
							}
						}
		return view('usermanagement.edit')->with('user',$user)
										  ->with('counties',$Counties)										  
										  ->with('location','umanage')
										  ->with('title','User Management')
										  ->with('county_index',$county_index);
	}
	
	public function update(Requestedit $Requestedit,$id)
	{
		
		$array=$Requestedit->all();
		$new=array_shift($array);
		$x = array();
	$users=new User;
	foreach ($array as $key ) {
		# code...
			$x[]=$key;
			
	}
	$Counties = counties::all();
	$x[1]=$Counties[$x[1]]->Name;
	
		$data=array(
		'name'=>$x[0],
		'county'=>$x[1],
		'PhoneNumber'=>$x[2],
		'IDNumber'=>$x[3],
		'email'=>$x[4],
		'role'=>intval($x[5])
		);
		
		
// return $data;
 User::createOrUpdate(
                $data, 
                array('_id' => $id));
		 
	$users=User::all();
			
			$this->role->__invoke(3);
				return redirect('usermanagement/viewusers')->with('users',$users)->with('location','umanage')->with('title','User Management');

	}





public function changepass()
{
	$error_message='';
	return view('usermanagement.change')->with('location','pass')->with('title','Profile')->with('error_message',$error_message);


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

			$oldpass=User::find($id);

		if(Hash::check($x[1], $oldpass->password))
		{	
			if($x[1]!=$x[2])
			{
				
				$data=array(
				'password'=>bcrypt($x[2])
				);
			

		 User::createOrUpdate(
		                $data, 
		                array('_id' => $id));
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
	public function status_change()
	{
		//
	if(Rq::ajax()) {
       	$data = Input::all();
		$user =User::find($data['id']);		
		if($user->status==0)
		{
				$user->status=1;
				$user->password=bcrypt('123456'); 
				$string = "activated";

		}
		else
		{
				$user->status=0;
				$user->password=bcrypt('!!##9342ax!!##9ax$kb787y$kb!!##9ax$kbyyx*!!##9ax$k243by%');
				$string = "deactivated";

		}
		$user->update();
		Mail::send('emails.status',['name'=>$user->name,'email'=>$user->email,'status' => $string], function($message) use($user) 
		{
		    $message->to($user->email, 'MNCH_noreply')->subject('Account Status');
		});
		print_r(json_encode($data));   
      die;
    }
		

	}






	public function reset()

	{

		 if(Rq::ajax()) {

       	$data = Input::all();
		$user =User::find($data['id']);
		$user->password=bcrypt('123456');
		$user->update();
		$users=User::all();

		Mail::send('emails.reset',['name'=>$user->name], function($message) use($user)
		{
		    $message->to($user->email, 'MNCH_noreply')->subject('Password Reset');
		});




      
      print_r(json_encode($data));
      die;
    }

		// return redirect('usermanagement/viewusers')->with('users',$users)->with('location','umanage')->with('title','User Management');


	}

public function multi()
	{
		$this->role->__invoke(3);
						return view('usermanagement.multi')->with('location','umanage')->with('title','User Management')->with('error_msg','');

	}



	public function example(){
        $file = public_path()."/downloads/example.xlsx";
        $headers = array("Content-Type:   application/vnd.ms-excel; charset=utf-8",
						 "Content-Disposition: attachment; filename=abc.xls",
						 "Expires: 0",
						 "Cache-Control: must-revalidate, post-check=0, pre-check=0");
        return Response::download($file, 'example.xlsx',$headers);
    }

 
	public function export(Excel $excel,$loc,$type1,$type2,$type3)
	{
		if($loc=='umanage' && $type1=='users' && $type2=='all')
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
		    			if($user->role>=3)
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


			else if((substr($type2,0,2)=='CH'|| 'IM'||'MN') && ($loc=='preview' && $type1=='general'))
		{

			{

				$survey_name=substr($type2,0,2);
				$excel->create('general'.$survey_name, function($ex) use($survey_name) {

	    $ex->sheet('Sheetname', function($sheet) use($survey_name) {
	    	
	    	$sheet->setColumnFormat(array(
    					'D' => 'yyyy-dd-mm'
					));
	    		$sheet->row(1, array(
     'Version',	'Assessment Term'	,'Assessor'	,'Date'	,'Facility',	'County','Sub-County',	'Entered by'	,'Status'	

			)
	    		
	    		);

	    		
	    		$counter2=0;
	    		
				$usermonitor=User_monitor::where('Survey','Like',$survey_name.'%')->get();

	    		foreach ($usermonitor as $user_m) {
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			substr($user_m->Survey,-1,1), $user_m->Assessment_Term,$user_m->assname,$user_m->Date,$user_m->FacilityName,$user_m->County,$user_m->District,$user_m->username,$user_m->Status
						
						));
					
				}

				


	       

	    });

	})->download('xls');









			}


		
}

else if($loc=='umanage' && $type1=='multi' && $type2=='template')
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


else if($loc=='preview' && ($type1=='totalentry' || $type1=='todayentry'))



{

	$survey_name=substr($type3,0,2);
	$county_name=$type2;
	$data=array(
			'survey'=>$survey_name,
			'county'=>$county_name,
			'time'=>$type1

		);




				$excel->create($type1.$data['survey'].$data['county'], function($ex) use($data) {

	    $ex->sheet('Sheetname', function($sheet) use($data) {

	    				if($data['time']=='totalentry')
	    				{

	    					$usermonitor=User_monitor::where('Survey','Like',$data['survey'].'%')->where('County','Like',$data['county'])->get();

	    				}
	    				else
	    				{
	    						    					$usermonitor=User_monitor::where('Survey','Like',$data['survey'].'%')->where('County','Like',$data['county'])->where('updated_at','>=',Carbon::today())->get();

	    				}


	    	
	    		$sheet->row(1, array(
     'Tool Name','Versionvar'.Carbon::today(),	'Assessment Term'	,'Assessor'	,'Date'	,'Facility Name','Facility Code',	'County','Sub-County',	'Entered by'	,'User role','Status'	

			)
	    		
	    		);

	    		
	    		$counter2=0;
	    		

	    		foreach ($usermonitor as $user_m) {

	
	    				$counter2++;

	    				if($user_m->role==0)
		    			{
		    				$role='countyuser';
		    			}
		    			if($user_m->role==1)
		    			{
		    				$role='dataclerk';
		    			}
		    			if($user_m->role==2)
		    			{
		    				$role='programuser';
		    			}
		    			if($user_m->role>=3)
		    			{
		    				$role='systemuser';
		    			}
		    			if($user_m->role=='')
		    			{
		    				$role='Unknown';
		    			}
	    				
						$sheet->row($counter2+1, array(

		     			$user_m->Description,$user_m->Version.":".$user_m->Runtime,$user_m->Assessment_Term,$user_m->assname,$user_m->Date,$user_m->FacilityName,$user_m->FacilityCode,$user_m->County,$user_m->District,$user_m->username,$role,$user_m->Status
						
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
		'role'=>intval($result[0][$i]->role),
		'status'=>1
		);




		}
		else
		{
			$i++;
		}

	}
		$counties=counties::all();
      return view('usermanagement.multiedit')->with('counties',$counties)->with('users',$x)->with('location','umanage')->with('title','User Management');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('/usermanagement/addusers_multi');
    }
  }






}




}
