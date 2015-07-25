<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Column_set;
use App\Block_row;
use App\Block;
use App\Section;
use App\Survey;

class form extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->middleware('auth');
	}


	
	public function index()
	{
						$HtmlLines = array();
				//Query loops


		$Selected_Survey = Survey::where('surveyID', '=', 'CHV1')->get();



		$Single_SectionCollection = $Selected_Survey->sections();

		

		 foreach ($Single_SectionCollection as $Single_Section){

		 			$HtmlLines = "<Section> <p> Section </p> ";


		 		$Array_of_BlockCollections[] = $Single_Section->blocks;

		 			foreach ($Array_of_BlockCollections as $Single_BlockCollection) {


		 				foreach ($Single_BlockCollection as $Single_Block) {


		 						$HtmlLines = "<div class=\"box\"> <p>Box<p><table>";

		 						$Array_of_Block_rowCollections[] = $Single_Block->block_rows;

		 								foreach ($Array_of_Block_rowCollections as $Single_Block_rowCollection){


		 									foreach ($Single_Block_rowCollection as $Single_Block_row) {

		 											$HtmlLines = "<tr>";

		 												$Array_of_Columnset_Collections[] = $Single_Block_row->column_sets;

		 													foreach ($Array_of_Columnset_Collections as $Single_ColumnsetCollection) {

		 														foreach ($Single_ColumnsetCollection as $Single_Columnset) {
		 															
		 															$HtmlLines = "<td> xsxs";

		 																//code for each column block

		 															$HtmlLines = "</td>";




		 														}

		 														
		 													}
		 										
		 													$HtmlLines = "</tr>";

		 									}





		 								}

		 						$HtmlLines = "</table></div>";


		 					}
		 				
		 				

		 			}

		 			$HtmlLines = "</Section>";
		 			


		 }






		 	return view('svtest')->with('HtmlLines',$HtmlLines);



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
