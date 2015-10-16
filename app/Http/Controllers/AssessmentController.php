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
use Request;



class AssessmentController extends Controller {

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
	public function index($sv)
	{
		$sv = '%'.$sv.'%';
		//where('column', 'LIKE', '%value%')->get();

		$Surveys = Survey::where('surveyID','like',$sv)->get();
		$Counties = countie::all();
		return view('assessments.index')->with('Counties',$Counties)->with('location','ass')->with('title','Assessments')->with('Surveys',$Surveys);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	*/
	public function create($id,$date,$term,$countie)
	{
			///{date}/{term}/{county}
           

			$loc = substr ($id, 0,2);
			
			if ($loc == "IM") {

			$DoneAss = assessments::where('PartID','<>','')->get()->keyBy('PartID');
			
				$All = Participantsview::all();
			} else {

			$DoneAss = assessments::where('Assessment_Term','=',$term)->where('Date','=',$date)->where('Survey','=',$id)->get()->keyBy('Facility_ID');
			
				$All = Facilities::where('County','Like',$countie)->get();
			}
			
			if($loc=='IM')
			{
				$date=$date;
				$term='';
				$countie='';
			}
			
			$countIDBF = assessments::orderBy('Counter', 'desc')->first();
			
			$countIDBF2 = $countIDBF->Counter;
			$countID = $countIDBF2 + 1;

	return view('assessments.create')->with('DoneAss',$DoneAss)->with('theterm',$term)->with('thedate',$date)->with('location','ass')->with('loc',$loc)->with('id',$id)->with('title','Assessments')->with('countID',$countID)->with('All',$All)->with('thecounty',$countie);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)

	{
		echo $id;


		$array=Request::all();
		$new=array_shift($array);
		$x = array();



	$assessments=new assessments;
	foreach ($array as $key ) {
		# code...
			$x[]=$key;
			
	}

		$assessments->Assessment_ID=$x[0];
		$assessments->Facility_ID=$x[1];
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,$county,$term)
	{
			$sv = '%'.$id.'%';
			if ($id != 'IM') $Assessments = Surveyview::where('County','like',$county)->where('Survey','like',$sv)->where('Term','like',$term)->get();
			else $Assessments = Imciview::all();
		return view('assessments.view')->with('Assessments',$Assessments)->with('location','ass')->with('title','Assessments')->with('id',$id)->with('term',$term)->with('thecounty',$county);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)


	{

			Rache::murdersession($id);
		assessments::where('Assessment_ID', '=', $id)->delete();
		return redirect('/home');
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
	public function status($status,$AssID)
	{


		//kilswitch
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

}
	