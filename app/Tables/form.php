<?php namespace App\Tables;

use App\Http\Controllers\ArrayRedis as Rache;




class form   {

	


  public static function edit($SurveyID) {

  	 $Survey = Survey::where('surveyID', '=',$SurveyID)->first();

    $Availablefields = Field_set::all();

        $entire = /*Rache::forever('edited_'.$SurveyID,function()use($Survey){

               return*/ $Survey->load('sections.blocks.block_rows.column_sets.field_set.fields');
           /* });*/

        $HtmlLines ='';
        $Secs = $entire->sections;

        foreach ($Secs as $Sec) {
            
            $HtmlLines.= '<section>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" >                     
                     <div class="box-body">
                        <input class="form-control" id="'.$Sec->sectionID.'" name="'.$Sec->sectionID.'" value="' . $Sec->name . '" type = textarea>
                      
                    
                        </div>
                        </div>';

  $Array_of_BlockCollections = $Sec->blocks;


            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '<div class="box box-primary"  >
                                    <div class="box-header">
                                     <input class="form-control" id="'.$BlockIDName.'" name="'.$BlockIDName.'" value="'.$Single_BlockCollection->Name.'" type = textarea>
                      
                                   
                                    </div>

                                   
                                    <table class="table">';
                
                //$Array_of_BlockRowCollections = Block_row::where('blockID', '=', $Single_BlockCollection->blockID)->get();
                
                $Array_of_BlockRowCollections = $Single_BlockCollection->block_rows;

                foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {
                     $BlockrowIDName = $Single_BlockRowCollection->block_rowID;
                   
                       
                 
                  $HtmlLines.= '<tr  id="'.$BlockrowIDName.'" > <td></td>';
                    
                    // $Array_of_ColumnSetCollections = Column_set::where('block_rowID', '=', $Single_BlockRowCollection->block_rowID)->get();
                    $Array_of_ColumnSetCollections = $Single_BlockRowCollection->column_sets;

                    foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection) {
                        
                        $ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
                        
                        
                        $HtmlLines.= '<td  class="thetd" colspan="'.$Single_ColumnSetCollection->col_span.'" id="'.$ColumnSetIDName.'"';
                        
                        $fieldsetID = $Single_ColumnSetCollection->field_setID;                        
                        $currentFieldset = $Single_ColumnSetCollection->field_set;
                           
                            $ids = $ColumnSetIDName.$fieldsetID;
                           if(!isset( $currentFieldset->type)) $typededuction = "error";
                           else{ $typededuction = $currentFieldset->type;}

                           

                        
                              

                                    $HtmlLines.= 'style="vertical-align:middle"> <select class="form-control fieldset asave" name="opt'.$ColumnSetIDName.'" id="opt'.$ColumnSetIDName.'" >';

                                // foreach ($Availablefields as $field) {

                                   $HtmlLines.='<option value="'.$currentFieldset->field_setID.'">'.$currentFieldset->field_setName.'</option></select> ';
                                // }




//                                 '
//                                 <option id="'.$ids.'1" value="volvo" selected>Volvo</option>      
//   <option id="'.$ids.'1" value="volvo">Volvo</option>
//   <option  id="'.$ids.'2" value="saab">Saab</option>
//   <option  id="'.$ids.'3"value="mercedes">Mercedes</option>
//   <option  id="'.$ids.'4"value="audi">Audi</option>
// </select> ';
                                  
                                    
                                 

                              
                            
                        
                        
                        $HtmlLines.= '</td>';
                    }
                    
                    $HtmlLines.= '</tr>';
                }
                
                $HtmlLines.= '</table> </div>';
            }
            
            $HtmlLines.= '</Section>';
        }
    

          
            return $HtmlLines;

       
    }



        }