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

		return view('surveys.template')->with('Mel',$Mel)->with('id',$iXd)->with('location',$location)->with('title',$Survs->Name)->with('secs',$Secs);	
		
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

		$loc = substr ($sv, 0,2);
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


			if ($Sec->identifier=='Section1') {

					switch ($loc) {
						case 'CH': $HtmlLines.='

						
                <!-- Main content -->
                <div clas="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Facility Information</h3>
                                    </div>
                                    <!-- /.box-header -->


                                    <!-- form start -->
                                    <form role="form">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <label>Facility Name</label>
                                                    <input type="text" class="form-control" id="InputFacilityName"
                                                    placeholder="Enter name">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Type</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter type">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Tier</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter tier">
                                                </div>
                                                <br>
                                                <div class="col-xs-4">
                                                    <label>Owned By</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter owner">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>County</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter county">
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>District/Sub-County</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter district/sub-county">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        
                                    </form>
                                </div>
                                <!-- /.box -->

                                <!-- /.box -->
                                <div class="box box-primary">
                                    
                                    <div class="box-header">
                                        <h3 class="box-title">Assessor Information</h3>
                                    </div>

                                    <div class="box-body">

                                        <div class="row">

                                            <div class="col-xs-3">

                                                <label>Name</label>
                                                <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                            </div>


                                            <div class="col-xs-3">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" id="fc_mobile1"
                                                placeholder="Enter Designation">
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="fc_email1"
                                                placeholder="Enter Phone Number">
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->


                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="fc_mobile1"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH-Incharge</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Team-Lead</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>




				';
								break;
						case 'IM':$HtmlLines.='




				';

								break;
						case 'MN':$HtmlLines.='




				';
							
							break;
						
						default:
							# code...
							break;
					}

				
				# code...
			} else {
				
			}
			







			      
			      		
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
                   																	 <select class="form-control select2" style="width: 250px;" name="';$HtmlLines.=$fieldName;$HtmlLines.='" id="';$HtmlLines.=$fieldName;$HtmlLines.='"> 
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
                   																	 <select class="form-control select2" multiple="" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="';$HtmlLines.=$fieldName;$HtmlLines.='" id="';$HtmlLines.=$fieldName;$HtmlLines.='"> 
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
