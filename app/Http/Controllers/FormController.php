<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Tables\Survey;
use App\Tables\form;

class FormController extends Controller {

		public function __construct()
	{
		$this->middleware('auth');

	}

	public function index()
	{
		$Surveys = Survey::all();
		return view('admin.form.index')->with('location','Admin')
									   ->with('title','Administration')
									   ->with('Surveys',$Surveys);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	public function edit($SurveyID)
	{
		$x = form::edit($SurveyID);

		return view('admin.form.edit')->with('location','Admin')
									   ->with('title','Administration')
									   ->with('fora',$x);
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
