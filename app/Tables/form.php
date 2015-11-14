<?php namespace App\Tables;

use App\Http\Controllers\ArrayRedis as Rache;




class form   {

	


  public static function edit($SurveyID,$color) {

  	 $Survey = Survey::where('surveyID', '=',$SurveyID)->first();

    $Availablefields = Field_set::all();

        $entire = /*Rache::forever('edited_'.$SurveyID,function()use($Survey){

               return*/ $Survey->load('sections.blocks.block_rows.column_sets.field_set.fields');
           /* });*/

        $HtmlLines =' <div class="fm">';
        $Secs = $entire->sections;

        foreach ($Secs as $Sec) {
            
            $HtmlLines.= '
            
            <section>
            <div class="secbox">

                    
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box  sec-header box-'.$color.'" >                     
                     <div class="box-header with-border">
                    
                     <i class="fa fa-ellipsis-h"></i>
                        <input class="box-title form-control" style="width:75%;" id="'.$Sec->sectionID.'" name="'.$Sec->sectionID.'" value="' . $Sec->name . '" type = textarea>
                    
                    
                        </div>
                        </div>

                           <div class="sec sec-body">';

  $Array_of_BlockCollections = $Sec->blocks;


            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '<div class="box box-'.$color.'"  >

                                     <div class="box-header with-border">
                                     <i class="fa fa-ellipsis-h"></i>
                                        <input class="form-control box-title" style="width: 75%;" id="'.$BlockIDName.'" name="'.$BlockIDName.'" value="'.$Single_BlockCollection->Name.'" type = text>
                                     <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->

                                    
                                   
                                    </div>

                                   <div style="display: block;" class="box-body">

                                   
                                    <table class="table">
                                    <tbody class = "tablet">';

                
                //$Array_of_BlockRowCollections = Block_row::where('blockID', '=', $Single_BlockCollection->blockID)->get();
                
                $Array_of_BlockRowCollections = $Single_BlockCollection->block_rows;

                foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {
                     $BlockrowIDName = $Single_BlockRowCollection->block_rowID;
                   
                       
                 
                  $HtmlLines.= '<tr  class="trow" id="'.$BlockrowIDName.'" > <td class="trow-header"><i class="fa fa-ellipsis-h"></i></td>';
                    
                    // $Array_of_ColumnSetCollections = Column_set::where('block_rowID', '=', $Single_BlockRowCollection->block_rowID)->get();
                    $Array_of_ColumnSetCollections = $Single_BlockRowCollection->column_sets;

                    foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection) {
                        
                        $ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
                        
                        
                        $HtmlLines.= '<td  class="thetd trow-body" colspan="'.$Single_ColumnSetCollection->col_span.'" id="'.$ColumnSetIDName.'"';
                        
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
                
                $HtmlLines.= '</tbody></table> </div></div>';
            }
            
            $HtmlLines.= '</div></div></Section>';
        }
    
        $HtmlLines.='</div>';
          
            return $HtmlLines;

       
    }



        }