<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Column_set;
use App\Block_row;
use App\Block;
use App\Section;
use App\Survey;
use App\Field_set;
use App\Field;
use App\DataRecord;
use Request;






class surveys extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	private static $theid="0";
	private static $thesv="0";
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
	    
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	
	public function create($id,$sv)
	{


		$Survs = Survey::where('surveyID','=',$sv)->first();
		$Secs = Section::where('surveyID','=',$sv)->get();
		

		$Mel=$this->build($sv,'h');
		$location = substr ($sv, 0,2);
		echo $location;
		
			$iXd= 'survey/'.$id;

		return view('surveys.svtest')->with('Mel',$Mel)->with('id',$iXd)->with('location',$location)->with('title',$Survs->Name)->with('secs',$Secs);	
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{	
		
		$sva = 'CHV2';
		$AssID=  $id;
		echo $AssID;
		$array = Request::all();
		

		
		$first = array_shift($array);
		$var = $this->build( $sva,'y');
       
foreach ($array as $key) {
		$data = new DataRecord;
		
		echo "ID: ";
		$x = array_shift($var);
		echo $x;
		$data->ColumnSetID=$x;
		$data->DataID = $AssID.$x;
		$data->AssID=$AssID;
		echo "     ";
		echo "Value: ";
		echo $key;
		$data->Data=$key;

		
		

		echo "    ";
		echo "<br><br>";


		$data->save();
	# code...
}
	


	

	/*foreach ($var as $vari) {
		$data = new DataRecord;

		$data->ID=$var;
		$data->Data=$array;

		echo $vari;
		# code...
	}*/



		
		



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




	private function build($sv,$value){

		
		$ColID = array();
		$SelectedSurvey = $sv;
				$HtmlLines = '<!-- Main content -->';

				
				$Survs = Survey::where('surveyID','=',$SelectedSurvey)->get();



				$Secs = Section::where('surveyID','=',$SelectedSurvey)->get();
			      foreach($Secs as $Sec) {
				
			
			      	$HtmlLines .='
			      		 <section automaticallyVisibleIfIDChecked = "';$HtmlLines.=$Sec->dependencyID;$HtmlLines.='">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" id="';

                    $HtmlLines.= $Sec->identifier;
                   
                      $HtmlLines.='">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>';

                        $HtmlLines.=$Sec->name;


                        $HtmlLines.='</b></h2></center>
                        <br>
                        </div>
                        </div>
';










			      
			      		
	           $Array_of_BlockCollections =  Block::where('sectionID','=',$Sec->sectionID)->get();
	           			
	           	foreach($Array_of_BlockCollections as $Single_BlockCollection){

	           									           					
	           			
									$BlockIDName = $Single_BlockCollection->blockID;
	           				
	           				
	           						           							
	           						$HtmlLines.='

	           						<div class="box box-primary"  id="';$HtmlLines.=$BlockIDName;$HtmlLines.='" automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockCollection->dependencyID;$HtmlLines.='">
                                    <div class="box-header">
                                        <h3 class="box-title">';$HtmlLines.= $Single_BlockCollection->Name;$HtmlLines.= '</h3>
                                    </div>
                                    <table class="table">';


	           						$Array_of_BlockRowCollections = Block_row::where('blockID','=',$Single_BlockCollection->blockID)->get();

	           						foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {

	           								

	           									
	           										
	           										if ($Single_BlockRowCollection->type =='table_head') {$HtmlLines.='<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockRowCollection->dependencyID;$HtmlLines.='" ';}else{$HtmlLines.='<tr automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockRowCollection->dependencyID;$HtmlLines.='"';}
	           										$BlockrowIDName = $Single_BlockRowCollection->block_rowID;

	           											$HtmlLines.='id="';$HtmlLines.=$BlockrowIDName;$HtmlLines.='">';
	           									
	           										$Array_of_ColumnSetCollections= Column_set::where('block_rowID','=',$Single_BlockRowCollection->block_rowID)->get(); 

	           											foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection ) {

	           												$ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
	           												$ColID[] = $ColumnSetIDName;
	           													$HtmlLines.='<td   colspan="';


	           													$HtmlLines.= $Single_ColumnSetCollection->col_span;



	           													$HtmlLines.= '" id="';$HtmlLines.=$ColumnSetIDName;$HtmlLines.='"';
	           													

	           															$fieldsetID = $Single_ColumnSetCollection->field_setID;


	           																$currentFieldsets = Field_set::where('field_setID','=',$fieldsetID)->get();
	           																foreach ($currentFieldsets as $currentFieldset ) {
	           																	# code...
	           																
	           															
	           																//number,text,combo,multiplecombo,coolcombo,label,radio

	           																$typededuction = $currentFieldset->type;
	           																unset($currentFieldset);
	           																$fieldValueList = Field::where('field_setID','=',$fieldsetID)->get();
	           																	switch ($typededuction) {
	           																		case "label":

	           																		foreach ($fieldValueList as $fieldd ) {

	           																				$HtmlLines.= '

	           																			 style="vertical-align:middle">';

	           																			

	           																			 	$HtmlLines.= $fieldd->Label;


                                             																		
	           																		
	           																		}
	           																		
                                          
	           																		              
	           																		        break;
	           																	    case "text":$HtmlLines.= 'style="vertical-align:middle">';

	           																	    	 foreach ($fieldValueList as $fieldd ) {

	           																	    	 							
	           																	      	$fieldIDName = $ColumnSetIDName.$fieldd->field_ID;


	           																				$HtmlLines.= '
	           																				<div class="input-group">
                 																		   <input class="form-control" type="text" name ="';$HtmlLines.=$fieldIDName;$HtmlLines.='" id="';$HtmlLines.=$fieldIDName;$HtmlLines.='" value=" ">';    
                   																			if ($fieldd->Label!="") {
                   																			 $HtmlLines.='<span class="input-group-addon">';$HtmlLines.=$fieldd->Label;$HtmlLines.='</span>';
                   																			 } 
                																			  $HtmlLines.='</div> ';           

	           																	                        

                																			}

	           																	            break;

	           																	    case "number":  $HtmlLines.= 'style="vertical-align:middle">';

	           																	    	 foreach ($fieldValueList as $fieldd ) {

	           																	    	 							
	           																	      	$fieldIDName = $ColumnSetIDName.$fieldd->field_ID;

	           																				$HtmlLines.= '
	           																				<div class="input-group">
                 																		   <input class="form-control" data-inputmask="&quot;mask&quot;: &quot;9999999&quot;" data-mask="" type="text" name ="';$HtmlLines.=$fieldIDName;$HtmlLines.='" id="';$HtmlLines.=$fieldIDName;$HtmlLines.='" value="0">';    
                   																			if ($fieldd->Label!="") {
                   																			 $HtmlLines.='<span class="input-group-addon">';$HtmlLines.=$fieldd->Label;$HtmlLines.='</span>';
                   																			 } 
                																			  $HtmlLines.='</div> ';           

	           																	                        

                																			}   

	           																	    		break;
	           																	    case "radio": 		$fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div>

	           																	    					<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value = " " id ="';$HtmlLines.=$fieldName.'other';$HtmlLines.='" type="radio" style="display: none;" checked="">';
	           																	    				 foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							  $HtmlLines.='<label>
                     																						  
                     																						

                     																						<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" type="radio">
                     																						 <x automaticallyVisibleIfIDChecked = "';$HtmlLines.=$fieldIDOnly;$HtmlLines.='"></x>
                     																						 ';
                     																		  $HtmlLines.=$fieldd->Label.'&nbsp;&nbsp;';
                     																		  $HtmlLines.='</label>';
                   																														
          

	           																	    				 }

	           																	    				 		$HtmlLines.=' </div>';

	           																	    		break;
	           																	    case "combo":$fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div>                
                   																	 <select class="form-control select2" name="';$HtmlLines.=$fieldName;$HtmlLines.='" id="';$HtmlLines.=$fieldName;$HtmlLines.='"> 
                   																	 <option value ="  "id ="';$HtmlLines.=$fieldName."def";$HtmlLines.='" selected="selected" style ="display:none;"></option>';
	           																	    				
	           																	    				 foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							$HtmlLines.='<option value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" >'; $HtmlLines.=$fieldd->Label;$HtmlLines.='</option>
																					                     
																					                     ';

																					                  }
																					                 $HtmlLines.='   </select>
																					                  </div>';





	           																	    		break;
	           																	     case "multiplecombo":  
	           																	     						$fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div>                
                   																	 <select class="form-control select2" multiple="multiple" data-placeholder="Multiple Selection Allowed"  name="';$HtmlLines.=$fieldName;$HtmlLines.='" id="';$HtmlLines.=$fieldName;$HtmlLines.='"> 
                   																	 		<option value ="  "id ="';$HtmlLines.=$fieldName."def";$HtmlLines.='" selected="selected" style ="display:none;"></option>
                   																	 ';
	           																	    				


	           																	    				 foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							$HtmlLines.='<option value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" >'; $HtmlLines.=$fieldd->Label;$HtmlLines.='</option>
																					                     
																					                     ';

																					                  }
																					                 $HtmlLines.='   </select>
																					                  </div>';   

	           																	    		break;
	           																	     case "coolradio":   

	           																	     					$fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div> 


	           																	    						           																	    					<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value = " " id ="';$HtmlLines.=$fieldName.'other';$HtmlLines.='" type="radio" style="display: none;" checked="">';
;
	           																	    				foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							  $HtmlLines.='<label>
                     																						  
                     																						

                     																						<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" type="radio">
                     																						<x automaticallyVisibleIfIDChecked = "';$HtmlLines.=$fieldIDOnly;$HtmlLines.='"></x>
                     																						 ';
                     																		  $HtmlLines.=$fieldd->Label.'&nbsp;&nbsp;';
                     																		  $HtmlLines.='</label>';
                   																														
          

	           																	    				 }

	           																	    				 		$Other = 'other';
	           																	    				 		$HtmlLines.='<input class="form-control" type="text" name ="';$HtmlLines.=$fieldName.$Other;$HtmlLines.='" id="';$HtmlLines.=$fieldName.$Other;$HtmlLines.='" automaticallyVisibleIfIDChecked="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='"> </div>';
																												
	           																	    		break;

	           																	    default: echo "dai era!";


	           																	     	}





	           																	     		}













	           															

	           													
	           													$HtmlLines.='</td>';
	           												
	           											}


	           									
	           							
	           										$HtmlLines.='</tr>';
	           									

	           						}

	           							$HtmlLines.='</table> </div>';

  
}



					
		 $HtmlLines.='</Section>';

  





	}


				//Adding requisite js

			if ($value == "h") {
				return $HtmlLines;
				# code...
			} else {
				return $ColID;
			}
			
		
	}

}
