<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\assessments;
use App\Facilities;
use App\Participants;
use App\Survey;
use App\Assessor;
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
	public function index()
	{
		$Surveys = Survey::all();
		return view('assessments.index')->with('location','ass')->with('title','Assessments')->with('Surveys',$Surveys);
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	*/
	public function create($id)
	{
			
			$loc = substr ($id, 0,2);
			
			if ($loc == "IM") {
				$All = Participants::all();
			} else {
				$All = Facilities::all();
			}
			
			
			$countID = assessments::all()->count()+1;
	  return view('assessments.create')->with('location','ass')->with('loc',$loc)->with('id',$id)->with('title','Assessments')->with('countID',$countID)->with('All',$All);
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
		

	$assessments->save();

	$ur = 'assessments/create/'.$x[0].'/'.$id;

	return redirect($ur);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

		$Assessors = Assessor::all()->keyBy('AssID');
		$assessments=assessments::all();
		return view('assessments.view')->with('assessments',$assessments)->with('Assessors',$Assessors)->with('location','ass')->with('title','Assessments');
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
