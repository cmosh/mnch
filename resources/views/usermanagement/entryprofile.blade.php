@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />



   <link href="/bower_components/jq/jquery-ui.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="/bower_components/jq/jquery-ui.js"></script>
 

 

@endsection 

@section('content')
<div id="row_addusers" class="row">
<div class="col-lg-12">


              <!-- small box -->
               <div class="small-box bg-green">
                <div class="inner">
                  
                  <p style="font-size:17pt">{{$user_details[0]->name}}</p>
                  <p style="font-size:13pt">{{$user_details[0]->county}} County</p>
                  <p style="font-size:13pt">



                 <?php 
                      if($user_details[0]->role===0)
                      {
                        echo "county user";
                      }
                       if($user_details[0]->role==1)
                      {
                        echo "data clerk";
                      }
                       if($user_details[0]->role==2)
                      {
                        echo "program user";
                      }
                       if($user_details[0]->role==3)
                      {
                        echo "system user";
                      }
                       if($user_details[0]->role==='')
                      {
                        echo "Unknown";
                      }



                      ?>






                  </p>

                </div>
                
              </div>
            </div>

             

</div>




<div class="box box-primary">
                <div class="box-header">
                
           





              
                  <h3 class="box-title">

                  
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a aria-expanded="true" href="#tab_1" data-toggle="tab">Completed Surveys</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_2" data-toggle="tab">Incomplete Surveys</a></li>
                  
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">


                  @foreach($surveys as $survey)
                    @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )
                     <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1{{$survey->surveyID}}">
                            @if($survey->surveyID=='CHV2')

                            Child Health 
                   

                            @endif
                            @if($survey->surveyID=='MNHV2')

                            Maternal and Neonatal Health

                           




                            @endif
                            @if($survey->surveyID=='IMCIV1')

                            Integrated Management of Childhood Illness




                            @endif






                           


                          </a>

                        </h4>
                      </div>
                      <div id="collapse1{{$survey->surveyID}}" class="panel-collapse collapse in">
                      <div class="box-body">
                   <table id="example1{{$survey->surveyID}}" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th>Version</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th >County</th>
                     
                        

                        <th>Action</th>

                        
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($complete as $comp)
                         @if(substr($comp->Survey,0,2)==substr($survey->surveyID,0,2))
                         
                        <tr>
                       
                     
                        
                         <td>

                        @foreach($surveys as $survey)

                            @if($survey->surveyID==$comp->Survey)

                                {{$survey->Version}} :{{$survey->Runtime}}

                            @endif




                        @endforeach



                         </td>
                        <td > {{$comp->Assessment_Term}}</td>



                        <td > {{ $comp->assname}}</td>
                        
                        <?php

                          $date= date_create($comp->Date);
                          $dateformated=date_format($date,'d F Y');

                         ?>
                        <td><span><?php echo $dateformated?> </span>  </td>
                        <td ><span>{{ $comp->FacilityName}}</span>  </td>
                        <td  ><span>{{$comp->County}}</span></td>
                        
                      
 <td class="hideprint"><form action="/assessments/show/{{$comp->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="VIEW"></form></td>   
                     
                          
                          
                        
                        
                       
                       </tr>
                       @endif
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                      
                       <th>Version</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th>County</th>

                        <th>Action</th>
                        

                        
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                  </div>
                  </div>
                  @endif
                @endforeach
                </div>




                <div class="tab-pane" id="tab_2">


                  @foreach($surveys as $survey)
                    @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )
                     <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2{{$survey->surveyID}}">
                            @if($survey->surveyID=='CHV2')

                            Child Health 
                   

                            @endif
                            @if($survey->surveyID=='MNHV2')

                            Maternal and Neonatal Health

                           




                            @endif
                            @if($survey->surveyID=='IMCIV1')

                            Integrated Management of Childhood Illness




                            @endif






                           


                          </a>

                        </h4>
                      </div>
                      <div id="collapse2{{$survey->surveyID}}" class="panel-collapse collapse in">
                      <div class="box-body">
                   <table id="example2{{$survey->surveyID}}" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th>Version</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th >County</th>
                     
                        

                        <th>Action</th>

                        
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($incomplete as $inco)
                         @if(substr($inco->Survey,0,2)==substr($survey->surveyID,0,2))
                         
                        <tr>
                       
                     
                        
                         <td>

                        @foreach($surveys as $survey)

                            @if($survey->surveyID==$inco->Survey)

                                {{$survey->Version}} :{{$survey->Runtime}}

                            @endif




                        @endforeach



                         </td>
                        <td > {{$inco->Assessment_Term}}</td>



                        <td > {{ $inco->assname}}</td>
                        
                        <?php

                          $date= date_create($inco->Date);
                          $dateformated=date_format($date,'d F Y');

                         ?>
                        <td><span><?php echo $dateformated?> </span>  </td>
                        <td ><span>{{ $inco->FacilityName}}</span>  </td>
                        <td  ><span>{{$inco->County}}</span></td>
                        
                      
 <td class="hideprint"><form action="/assessments/edit/{{$inco->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="RESUME"></form></td>   
                     
                          
                          
                        
                        
                       
                       </tr>
                       @endif
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                      
                       <th>Version</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th>County</th>

                        <th>Action</th>
                        

                        
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                  </div>
                  </div>
                  @endif
                @endforeach
                </div>









                  </div>



                  


                  </div>
                  </div>
               
                 
                </div><!-- /.box-body -->
              </div>
              <!-- test -->



             
       

    
    



    <!-- test-end -->



@endsection


 @section('javascript')

  



 
   <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
      <script src="/bower_components/zeroclipboard/dist/ZeroClipboard.min.js" type="text/javascript"></script>
   
 <!-- DATA TABLES -->
 @foreach($surveys as $survey)
                     @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )

  <script type="text/javascript">




  $(function () 
 {
       $('#example1{{$survey->surveyID}}').DataTable();

       $('#example2{{$survey->surveyID}}').DataTable();

     });

     


      
    </script>
    @endif

    @endforeach

         
  @endsection
 