<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requestuser;
use App\Http\Requests\Requestpass;
use App\Http\Requests\Requestedit;
use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;
use App\Models\Assessments;
use App\Models\Counties;
use App\Helpers\County;
use App\Http\Requests;
use App\Models\Survey;
use App\Models\User;
use App\Helpers\Map;
use Carbon\Carbon;
use Request As Rq;
use Validator;
use Response;
use Redirect;
use Session;
use Input;
use Hash;
use Mail;

class UserManagement extends Controller {

	public function __construct(Request $request,Excel $excel)
	{
		$this->Map = new Map;
		$this->middleware('auth');
		$this->role = function ($min) use ($request) {
			if($request->user()->role<$min)abort(403);
		};
		$this->roles = [0=>'countyuser',1=>'dataclerk',2=>'programuser',3=>'systemuser',4=>'systemuser'];
		$this->excel = $excel;
	}
	
	public function index()
	{		
		$users=User::NonAdmins()->get();		
		$this->role->__invoke(3);
		return view('usermanagement.view')->with('users',$users)
										  ->with('location','umanage')
										  ->with('title','User Management');
	}

	public function track()
	{
		$users=User::Active()->with('assessments')->with('assessmentsT')->get();		
			// return $users;
		$this->role->__invoke(3);
		return view('usermanagement.track')->with('users',$users)
										  ->with('location','tracker')
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
		$Counties = Counties::all();
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

		$Counties = Counties::all();
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
		$surveys=Survey::orderBy('order')->get();
		$counties=Counties::all();

		
		$user_monitor=Assessments::Monitor();	

		
		$counties_assessed= County::AllAssessed();
		$submitted=County::Submitted();
		$incomplete=County::Incomplete();
		$submittedt=County::SubmittedToday();
		$incompletet=County::IncompleteToday();
		$users=User::all();
		$assessments=Assessments::all();

		$ch=Assessments::Monitor(['Survey'=>'CH']);	
		$mnh=Assessments::Monitor(['Survey'=>'MNH']);	
		$imci=Assessments::Monitor(['Survey'=>'IMCI']);	

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
		$Counties = Counties::all();
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
	$Counties = Counties::all();
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



public function export($loc,$type1,$type2,$type3)
	{
		switch ($loc) {
			case 'umanage':
				$this->exportusers();				
				break;
			case 'preview':
				$type1 == 'general' ? $this->exportgeneral($type2) : $this->exportcounty($type1,$type2,$type3);
				break;			
			default:
				return;
				break;
		}
	}

	
	private function exportusers(){

		$this->excel->create('ALL_USERS', function($ex) {
			$ex->sheet('Sheetname', function($sheet) {	    	
	    		$sheet->row(1,['Name','County','PhoneNumber','IDNumber'	,'email','role']);
	    		$users=User::all();
	    		$counter=0;
	    			foreach ($users as $user) { 
	    				$counter++;
						$role = $this->roles[$user->role];
						$sheet->row($counter+1,[$user->name, $user->county,$user->PhoneNumber,$user->IDNumber,$user->email,$role]);	
					} 
				});
		})->download('xls');
			
	}

	private function exportgeneral($survey_id){

		$survey_name=substr($survey_id,0,2);
		$this->excel->create('general'.$survey_name, function($ex) use($survey_name) {
			$ex->sheet('Sheetname', function($sheet) use($survey_name) {

				$sheet->setColumnFormat(['D' => 'yyyy-dd-mm']);
	    		$sheet->row(1,['Version','Assessment Term','Assessor','Date','Facility','County','Sub-County','Entered by','Status']);
	    		$counter2=0;	    		
				$usermonitor=Assessments::monitor(['Survey'=>$survey_name]);
	    			foreach ($usermonitor as $user_m) {	
	    				$counter2++;	    				
						$sheet->row($counter2+1,[
										substr($user_m->Survey,-1,1),
										$user_m->Assessment_Term,
										isset($user_m->assessor_short->Name) ? $user_m->assessor_short->Name : "",
		     						 	$user_m->Date,
		     						 	$user_m->facility_short->FacilityName,
		     						 	$user_m->facility_short->County,
		     						 	$user_m->facility_short->District,
		     						 	$user_m->user->name,
		     						 	$user_m->Status = $user_m->Status == 'New' ? 'Incomplete' : $user_m->Status	
		     						 	]					
						);
					}
				});
		})->download('xls');
	}	

	private function exportcounty($time,$county,$survey_id){

			$survey_name=substr($survey_id,0,2);
			$county_name=$county;
			$data=['survey'=>$survey_name,'county'=>$county_name,'time'=>$time];
			$this->excel->create($time.$data['survey'].$data['county'], function($ex) use($data) {
				$ex->sheet('Sheetname', function($sheet) use($data) {
				$usermonitor = $data['time']=='totalentry' ? Assessments::Monitor(['Survey'=>$data['survey'],'County'=>$data['county']])
												  : Assessments::Monitor([ 'Survey'=> $data['survey'],'County' => $data['county']],true);
				$sheet->row(1,['Tool Name','Version','Assessment Term','Assessor','Date('.Carbon::today()->format('d/m/Y').')','Facility Name','Facility Code',	'County','Sub-County','Entered by','User role','Status']);	    		
	    		$counter2=0; 
	    		foreach ($usermonitor as $user_m) {

	    				$counter2++;
	    				$role = $this->roles[$user_m->user->role];
	    				$sheet->row($counter2+1,[$user_m->asurvey->Description,$user_m->asurvey->Runtime,$user_m->Assessment_Term."(V".$user_m->asurvey->Version.")", isset($user_m->assessor_short->Name) ? $user_m->assessor_short->Name : "",$user_m->Date,$user_m->facility_short->FacilityName,$user_m->facility_short->FacilityCode,$user_m->facility_short->County,$user_m->facility_short->District,$user_m->user->name,$role,$user_m->Status = $user_m->Status == 'New' ? 'Incomplete' : $user_m->Status]);				
				}
			});
			})->download('xls');
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
		$counties=Counties::all();
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
