<?php namespace App\Tables;

use App\Http\Controllers\ArrayRedis as Rache;




class form   {

	


  public static function edit($SurveyID) {

  	 $Survey = Survey::where('surveyID', '=',$SurveyID)->first();

      

        $entire = Rache::forever('edited_'.$SurveyID,function()use($Survey){

               return $Survey->load('sections.blocks.block_rows.column_sets.field_set.fields');
            });

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
                      
                      <table width="100%">
                      <tr>
                      <td width="25%">
                          <button type="button" obj="'.$Sec->sectionID.'" objtype="section" class="above form-control btn bg-maroon">Insert Above</button>
                          </td>
                          <td width="25%">
                          <button type="button" obj="'.$Sec->sectionID.'" objtype="section" class="below form-control btn bg-purple">Insert Below</button>
                          </td>
                          <td width="25%">
                          <button type="button" obj="'.$Sec->sectionID.'" objtype="section" class="delete form-control btn btn-danger">Delete</button>
                          </td>
                           <td width="25%">
                          <button type="button" obj="'.$Sec->sectionID.'" objtype="section" class="save form-control btn btn-success">Save</button>
                          </td>
                        </tr>
                        </table>
                        </div>
                        </div>';

  $Array_of_BlockCollections = $Sec->blocks;

            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '<div class="box box-primary"  >
                                    <div class="box-header">
                                     <input class="form-control" id="'.$BlockIDName.'" name="'.$BlockIDName.'" value="'.$Single_BlockCollection->Name.'" type = textarea>
                      
                                   
                                    </div>

                                      <table width="100%">
                      <tr>
                      <td width="25%">
                          <button type="button" obj="'.$BlockIDName.'" objtype="section" class="above form-control btn bg-maroon">Insert Above</button>
                          </td>
                          <td width="25%">
                          <button type="button" obj="'.$BlockIDName.'" objtype="section" class="below form-control btn bg-purple">Insert Below</button>
                          </td>
                          <td width="25%">
                          <button type="button" obj="'.$BlockIDName.'" objtype="section" class="delete form-control btn btn-danger">Delete</button>
                          </td>
                           <td width="25%">
                          <button type="button" obj="'.$BlockIDName.'" objtype="section" class="save form-control btn btn-success">Save</button>
                          </td>
                        </tr>
                        </table>
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
                        
                        $HtmlLines.= '<td   colspan="';
                        
                        $HtmlLines.= $Single_ColumnSetCollection->col_span;
                        
                        $HtmlLines.= '" id="';
                        $HtmlLines.= $ColumnSetIDName;
                        $HtmlLines.= '"';
                        
                        $fieldsetID = $Single_ColumnSetCollection->field_setID;
                        
                        $currentFieldset = $Single_ColumnSetCollection->field_set;
                           
                            
                           if(!isset( $currentFieldset->type)) $typededuction = "error";
                           else{ $typededuction = $currentFieldset->type;}

                           

                        
                              

                                    $HtmlLines.= 'style="vertical-align:middle">hereit is';
                                  
                                    
                                 

                              
                            
                        
                        
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