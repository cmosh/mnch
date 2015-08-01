<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\assessments;
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
		//
	}

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	*/
	public function create()
	{

		//
	  return view('assessments');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()

	{


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
		$assessments->Time=$x[2];
		$assessments->Date=$x[4];
		$assessments->Assessor=$x[3];

		$assessments->save();

		$ur = 'assessments/create/'.$x[0].'/CHV2';

		return redirect($ur);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
