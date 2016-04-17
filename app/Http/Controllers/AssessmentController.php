<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Assessments;
use App\Models\Facilities;
use App\Models\Participants;
use App\Models\Survey;
use App\Models\Assessor;
use App\Models\Counties;
use App\Helpers\Map;
use App\Helpers\Session;
use Cache;
use Request;
use Input;
use Uuid;

class AssessmentController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
		$this->Map = new Map;
	}
	





	public function index($sv)
	{
		$sv = '%'.$sv.'%';		
		$Surveys = Survey::where('surveyID','like',$sv)->get();
		$Counties = Counties::all();

		return view('assessments.index')->with('Counties',$Counties)
										->with('location','ass')
										->with('title','Assessments')
										->with('Surveys',$Surveys);
	}

	
	public function create($id,$date,$term,$county,$subcounty)
	{
			$loc = substr ($id, 0,2);
			
			if ($loc == "IM") {

			
			
			$ParticipantsList = Participants::view()->get();
    		$All = $this->Map->transform($ParticipantsList,'ParticipantsList');
    		
			} 
			else {
			
			
			$FacilityList = Facilities::AssessmentList( array('County'=>$county,
														    'SubCounty'=>$subcounty,
														    'Term'=>$term,
														    'Survey'=>$id
														    ))->get();

			 $All = $this->Map->transform($FacilityList,'FacilityList');
			
			}

			if($loc=='IM')
			{
				$date=$date;
				$term='';
				$county='';
			}
			
			#what is the use of Uuid?
			$countID = Uuid::generate(4);
			return view('assessments.create')->with('theterm',$term)
											 ->with('thedate',$date)
											 ->with('location','ass')
											 ->with('loc',$loc)
											 ->with('id',$id)
											 ->with('title','Assessments')
											 ->with('countID',$countID)
											 ->with('All',$All)
											 ->with('thecounty',$county);
	}

	public function store($id)
	{
		$array=Request::all();

		#what is the necessity of $new here?
		$new=array_shift($array);
		$x = array();
		$assessments=new Assessments;
	foreach ($array as $key ) {		
			$x[]=$key;			
	}

		$assessments->Assessment_ID=$x[0];
		$assessments->Facility_ID=intval($x[1]);
		$assessments->Assessment_Term=$x[2];
		$assessments->Date=$x[3];
		$assessments->Survey= $id;
		$assessments->UserId= $x[4];
		$assessments->Status= $x[5];
		$assessments->PartID=intval($x[6]);

	$assessments->save();
	$ur = 'assessments/start/'.$x[0];
	return redirect($ur);

	}

	public function show($survey,$county,$term,$subcounty)
	{
			$id = substr($survey, 0,2);
			if ($id != 'IM') 
{
				$AssessmentsList = Assessments::View(array(
    				'County'=>$county,
    				'SubCounty'=>$subcounty,
    				'Survey'=>$survey,
    				'Term'=>$term
    				))->get();

    			$Assessments = $this->Map->Assessmentsfilter($AssessmentsList);
}
			else {

		$AssessmentsList = Assessments::Participants(array('Survey'=>$survey))->get();

          $Assessments =  $this->Map->ParticipantsFilter($AssessmentsList);
         
			}

					return view('assessments.view')->with('Assessments',$Assessments)
												   ->with('location','ass')
												   ->with('title','Assessments')
												   ->with('id',$id)
												   ->with('term',$term)
												   ->with('thecounty',$county)
												   ->with('subcounty',$subcounty);
	}

	
	public function destroy($id)
	{
		Session::murdersession($id);
		Assessments::where('Assessment_ID', '=', $id)->delete();
		return redirect('/home');
	}

	
	public function status($status,$AssID)
	{
		Session::murdersession($AssID);

		switch ($status) {
		 	case 'save': //If saved redirect to begin new assessment instead of '/home'
		 	$red = Assessments::where('Assessment_ID','=',$AssID)->first();
		 	$irect = substr($red->Survey,0,2);
		 	return redirect('/assessment/'.$irect);
		 	/*return redirect('/home');*/ 
		 	break;
<<<<<<< Updated upstream
		 	case 'submit':
<<<<<<< Updated upstream
		 	$red = Assessments::where('Assessment_ID','=',$AssID)->first();
=======
		 	$red = assessments::where('Assessment_ID','=',$AssID)->first();
=======
		 	case 'submit': //if submitted redirect to begin new assessments
		 	$red = Assessments::where('Assessment_ID','=',$AssID)->first();
>>>>>>> Stashed changes
>>>>>>> Stashed changes
		 	$irect = substr($red->Survey,0,2);
		 	return redirect('/assessment/'.$irect);
		 	break;		 	
		 	default:
		 	}
		 }



		 public function subcounties()

	{
		
         if(Request::ajax()) {
         	  $param = Input::all();

         	 $sresult = Cache::remember('SubcountySearch'.$param['county'].$param['search'],180,function() use($param){   

         				$temp = Facilities::SubCounties($param)->get();

         				return $temp;

         			});
         	echo json_encode($sresult);
         }

         

         die;
	}

}
	