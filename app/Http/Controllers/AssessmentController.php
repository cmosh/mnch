<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArrayRedis As Rache;
use App\Tables\assessments;
use App\Tables\Facilities;
use App\Tables\Participants;
use App\Tables\Survey;
use App\Tables\Assessor;
use App\Tables\countie;
use App\Tables\Surveyview;
use App\Tables\Participantsview;
use App\Tables\Imciview;
use App\Tables\Autosaving;
use App\Helpers\Map;
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
		$Counties = countie::all();

		return view('assessments.index')->with('Counties',$Counties)
										->with('location','ass')
										->with('title','Assessments')
										->with('Surveys',$Surveys);
	}

	
	public function create($id,$date,$term,$countie,$subcounty)
	{
			$loc = substr ($id, 0,2);
			
			if ($loc == "IM") {

			// $DoneAss = assessments::where('PartID','<>','')->get()->keyBy('PartID');			
			// $All = Participantsview::all();
			
			$ParticipantsList = Participants::view()->get();
    		$All = $this->Map->transform($ParticipantsList,'ParticipantsList');
    		
			} 
			else {
			
			
			$FacilityList = Facilities::AssessmentList( array('County'=>$countie,
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
				$countie='';
			}
			
			
			$countID = Uuid::generate(4);
			return view('assessments.create')->with('theterm',$term)
											 ->with('thedate',$date)
											 ->with('location','ass')
											 ->with('loc',$loc)
											 ->with('id',$id)
											 ->with('title','Assessments')
											 ->with('countID',$countID)
											 ->with('All',$All)
											 ->with('thecounty',$countie);
	}

	public function store($id)
	{
		$array=Request::all();
		$new=array_shift($array);
		$x = array();
		$assessments=new assessments;
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
		$assessments->PartID=$x[6];

	$assessments->save();
	$ur = 'assessments/start/'.$x[0];
	return redirect($ur);

	}

	public function show($survey,$county,$term,$subcounty)
	{
			$id = substr($survey, 0,2);
			if ($id != 'IM') 
{
				$AssessmentsList = assessments::View(array(
    				'County'=>$county,
    				'SubCounty'=>$subcounty,
    				'Survey'=>$survey,
    				'Term'=>$term
    				))->get();

    			$Assessments = $this->Map->Assessmentsfilter($AssessmentsList);
}
			else $Assessments = Imciview::all();

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
		Rache::murdersession($id);
		assessments::where('Assessment_ID', '=', $id)->delete();
		return redirect('/home');
	}

	
	public function status($status,$AssID)
	{
		Rache::murdersession($AssID);

		switch ($status) {
		 	case 'save': 
		 	return redirect('/home'); 
		 	break;
		 	case 'submit':
		 	$red = assessments::where('Assessment_ID','=',$AssID)->first();
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
	