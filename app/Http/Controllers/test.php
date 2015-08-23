<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\Ch_owner;
use App\Tables\Ch_type;
use App\Tables\Ch_staff_training;
use App\Tables\Ch_healthservice;
use App\Tables\Ch_guidline;
use App\Tables\Ch_tavailability;
use Illuminate\Http\Request;

class test extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Ch_owners = Ch_owner::all();
		$Ch_types = Ch_type::all();
		$Ch_staff_trainings = Ch_staff_training::all();
		$Ch_healthservices = Ch_healthservice::all();
		$Ch_guidlines = Ch_guidline::all();
		$Ch_tavailabilities = Ch_tavailability::all();
		
		return view('analytics.test')->with('Ch_tavailabilities',$Ch_tavailabilities)->with('Ch_guidlines',$Ch_guidlines)->with('location','Home')->with('Ch_owners',$Ch_owners)->with('Ch_types',$Ch_types)->with('Ch_staff_trainings',$Ch_staff_trainings)->with('Ch_healthservices',$Ch_healthservices);
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
