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
                        
                        <div class="box  sec-header box-'.$color.'  direct-chat direct-chat-primary" >                     
                     <div class="box-header with-border">
                    
                     <i class="fa fa-ellipsis-h"></i>
                          <div class="box-tools pull-right">

                               <button class="btn btn-box-tool" data-widget="chat-pane-toggle"><i class="fa fa-pencil"></i></button>

                  </div><!-- /.box-tools -->

                    
                        </div>
                         <div style="display: block;" class="box-body">
                            <div class="direct-chat-messages">
                    <!-- Actual Body -->
                    
                     <input class="form-control" style="text-align:center;height: 100%;width:100%;" id="'.$Sec->sectionID.'" name="'.$Sec->sectionID.'" value="' . $Sec->name . '" type = "textarea">


                  
                 
                  </div>

                   <div class="direct-chat-contacts">

                     <!-- Options  -->
                     '.self::$SectionOptions.'


                  </div>
                         
                        
                        </div>
                        </div>

 
                    
                           <div class="sec sec-body">';

  $Array_of_BlockCollections = $Sec->blocks;


            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '<div class="box box-'.$color.' direct-chat direct-chat-primary" >

                                     <div class="box-header with-border">
                                     <i class="fa fa-ellipsis-h"></i>
                                      
                                     <div class="box-tools pull-right">
                             <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              <button class="btn btn-box-tool"   data-widget="chat-pane-toggle"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                  </div><!-- /.box-tools -->

                                    
                                   
                                    </div>

                                   <div style="display: block;" class="box-body">
                                    <div class="direct-chat-messages">
<input class="form-control " style="text-align:center; width: 100%;" id="'.$BlockIDName.'" name="'.$BlockIDName.'" value="'.$Single_BlockCollection->Name.'" type = "text">
                                   
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
                
                $HtmlLines.= '</tbody></table> </div>

                 <div class="direct-chat-contacts">
                  <!-- Options -->
                  '.self::$BlockOptions.'                  </div>

                </div></div>';
            }
            
            $HtmlLines.= '</div></div></Section>';
        }
    
        $HtmlLines.='</div>';
          
            return $HtmlLines;

       
    }


       private static $SectionOptions = ' <table class="table">
               
                <tbody>
                  <tr>
                  <td  style="vertical-align:middle">
                    <i class="menu-icon fa fa-strikethrough fa-4x" style="color:#3C8DBC;"></i>
                  Section
                  </td>
                    <td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-trash" style="color:red"></i> Delete
                  </a>
                    </td>
                  <td>
                  <a command="optimise" class="btn btn-app">
                    
                    <i class="fa fa-arrow-up" style="color:green"></i> Add Above
                  </a>
                  </td>
                  <td>
                  <a command="clearcache" class="btn btn-app">
                    <i class="fa fa-arrow-down" style="color:green"></i> Add Below
                  </a>
                  </td>

                </tr>
                  <tr>
                  <td  style="vertical-align:middle">
                    <i class="menu-icon fa fa-bold fa-4x" style="color:#1D9F75"></i>
                  Blocks
                  </td>
                    <td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-trash"  style="color:red"></i> Delete All
                  </a>
                    </td>
                  <td>
                  <a command="optimise" class="btn btn-app">
                    
                    <i class="fa fa-minus"></i> Minimise All
                  </a>
                  </td>
                  <td>
                  <a command="clearcache" class="btn btn-app">
                    <i class="fa fa-plus" style="color:green"></i> Add New
                  </a>
                  </td>

                </tr>
                 <tr>
                  <td  style="vertical-align:middle">
                    <i class="menu-icon fa fa-align-justify fa-4x" style="color:#FFF7EE"></i>
                  Rows
                  </td>
                  <td>
                  </td>
                    <td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-trash"  style="color:red"></i> Delete All
                  </a>
                    </td>
                 
                  <td>
                     </td>

                </tr>



                </tbody>
                </table>';

   private static $BlockOptions = ' <table class="table">
               
                <tbody>
                
                  <tr>
                  <td  style="vertical-align:middle">
                    <i class="menu-icon fa fa-bold fa-4x" style="color:#1D9F75"></i>
                  Block
                  </td>
                    <td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-trash"  style="color:red"></i> Delete
                  </a>
                    </td>
                  <td>
                  <a command="optimise" class="btn btn-app">
                    
                    <i class="fa fa-arrow-up" style="color:green"></i> Add Above
                  </a>
                  </td>
                  <td>
                  <a command="clearcache" class="btn btn-app">
                    <i class="fa fa-arrow-down" style="color:green"></i> Add Below
                  </a>
                  </td>

                </tr>
                 <tr>
                  <td  style="vertical-align:middle">
                    <i class="menu-icon fa fa-align-justify fa-4x" style="color:#FFF7EE"></i>
                  Rows
                  </td>
                    <td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-trash"  style="color:red"></i> Delete All
                  </a>
                    </td>
                     <td>
                     </td>
                  <td>
                  <a command="clearcache" class="btn btn-app">
                    <i class="fa fa-plus" style="color:green"></i> Add New
                  </a>
                  </td>
                 

                </tr>



                </tbody>
                </table>';
  
   

    

 


     



        }