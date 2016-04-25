@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection
@section('pageinfo')
@endsection
@section('content')
{!! Form::open() !!}
{!! Form::close() !!}
<div class="box box-primary">
<div class="box-header">
<button style="float:right" id="print-button" >Print</button>
                  <h3 class="box-title">

                  Progress Review
                  </h3>
                </div>      
<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a aria-expanded="true" href="#tab_1" data-toggle="tab">General</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_2" data-toggle="tab">Today's Data Entry</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_3" data-toggle="tab">Total Data Entry</a></li>
                  
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <!-- /.box-header -->

                  <span style="color:red">>> Click on the labels to open/close panels</span>
                  <br>
                   @foreach($surveys as $survey)
                    @if(($survey->id=='CHV2') || ($survey->id=='MNHV2') || ($survey->id=='IMCIV1') )
                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$survey->id}}">
                            @if($survey->id=='CHV2')

                            Child Health 
                              <small>
                            ( <?php   
                              echo sizeof($ch);

                             ?> 

                             Records )
                             </small>
                            
                            @elseif($survey->id=='MNHV2')

                            Maternal and Neonatal Health

                                   <small>
                            ( <?php   
                              echo sizeof($mnh);

                             ?> 

                             Records )
                             </small>




                            @elseif($survey->id=='IMCIV1')

                            Integrated Management of Childhood Illness

                                   <small>
                            ( <?php   
                              echo sizeof($imci);

                             ?> 

                             Records )
                             </small>




                            @endif




                             <small id="{{$survey->id}}status_info">
                             </small>






                           


                          </a>

                        </h4>
                      </div>
                      <div id="collapse{{$survey->id}}" class="panel-collapse collapse">
                        <div class="box-body">
<table style="float:right">
                         <tr>
                                  <td><a id="excel{{$survey->id}}">Download Excel</a></td>                   
                           </tr>
                           
                      </table>
                
                <br>
                <br>
                <table id="example1{{$survey->id}}" cellspacing="0"  class="table table-bordered table-striped">
  



                    <thead>

                      <tr>

                     
                        
                        <th>Version</th>
               @if($survey->id=='IMCIV1')
                        
                @else

                        <th>Assessment Term</th>
                @endif
                        <th>Assessor</th>

                         <th>Date</th>
        @if($survey->id=='IMCIV1')
                           <th>Participant</th>
                @else

                         <th>Facility</th>
                      
                @endif


                         <th >County</th>
                         <th>Sub-County</th>
                         <th>Entered by</th>
                        

                        <th class="hideprint">Action</th>

                        
                        
                  
                      </tr>
                    </thead>
                    <thead>
                      <tr>

                     
                        
                           <th>Version</th>
               @if($survey->id=='IMCIV1')
                        
                @else

                        <th>Assessment Term</th>
                @endif
                        <th>Assessor</th>

                         <th>Date</th>
        @if($survey->id=='IMCIV1')
                           <th>Participant</th>
                @else

                         <th>Facility</th>
                      
                @endif


                         <th >County</th>
                         <th>Sub-County</th>
                         <th>Entered by</th>

                        <th class="hideprint">Action</th>

                        
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                    
                        @foreach($user_monitor as $user)
                         @if(substr($user->Survey,0,2)==substr($survey->id,0,2))
                        <tr>
                     <td>

                                {{$user->asurvey->Version}} :{{$user->asurvey->Runtime}}

                         </td>

                           @if($survey->id=='IMCIV1')
                        
                @else

                        
                        <td > {{ $user->Assessment_Term}}</td>
                @endif
                
                        <td > {{ isset($user->assessor_short->Name) ? $user->assessor_short->Name : "" }}</td>
                       
                        <td>{{ date_format(date_create($user->Date),'d F Y')}} </td>

                           @if($survey->id=='IMCIV1')
                        <td >{{ $user->participant->Name_of_Participant}}  </td>
                @else

                        
                       
                        <td >{{ $user->facility_short->FacilityName}}  </td>
                @endif
                        <td  >{{$user->facility_short->County}}</td>
                        <td>{{$user->facility_short->District}}

                        <td >{{ $user->user->name}} </td>
                        @if($user->Status=='Submitted')
 <td class="hideprint"><form action="{{config('app.prefix')}}/assessments/show/{{$user->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="VIEW"></form></td>   
               @elseif($user['Status']=='Incomplete' || $user['Status']=='New')

       <td><form class="theresume" AssID="{{$user->Assessment_ID}}" bad="{{isset($user->assessor_short->Name)}}">
    <input class="btn btn-primary form-control" type="submit" value="RESUME"></form></td>

     @else

      <td> {{$user->Status}}</td>

     @endif
                        
                       
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
                         <th>Entered by</th>
                        

                        <th class="hideprint">Action</th>
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
                      </div>
                    </div>

                @endif
              @endforeach
                  </div><!-- /.tab-pane -->





                  <div class="tab-pane" id="tab_2">
                  <span style="color:red"> >> Click on the labels to open/close panels</span>
                      @foreach($surveys as $survey)
                                         @if(($survey->id=='CHV2') || ($survey->id=='MNHV2') || ($survey->id=='IMCIV1') )

                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2{{$survey->id}}">
                             @if($survey->id=='CHV2')

                            Child Health




                            @endif
                            @if($survey->id=='MNHV2')

                            Maternal and Neonatal Health




                            @endif
                            @if($survey->id=='IMCIV1')

                            Integrated Management of Childhood Illness




                            @endif
                          </a>
                        </h4>
                      </div>
                      <div id="collapse2{{$survey->id}}" class="panel-collapse collapse">
                        <div class="box-body">
                         <table id="example2{{$survey->id}}" class="table table-bordered table-striped">
  


                  
                    <thead>
                    <tr >
                    <?php
                      echo date('d F Y');
                     

      
     ?>

                   

              
              
                       
                     

                         
                     


                    </tr>



                      <tr>

                     
                        
                        <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                   <!--  -->

                        @foreach($counties_assessed as $county)

                        <tr>
                        
                        <td>
                          
                         {{$county}}
                        </td>

                        <td> 
                       
                        @foreach($submittedt as $subt)
                            @if($county==$subt['County'] && substr($subt['Description'],0,2)==substr($survey->Description,0,2))
                                
{{$subt['submitted']}}
                                

                                

                            @endif


                        @endforeach
                                                     

                              
                  
                      </td>




                        <td > 

                         @foreach($incompletet as $inct)
                            @if($county==$inct['County'] && substr($inct['Description'],0,2)==substr($survey->Description,0,2))
                                
{{$inct['incomplete']}}
                                

                                

                            @endif

                        @endforeach

                                
                      
                        </td>





                        
        
                    

<td class="hideprint"><form action="{{config('app.prefix')}}/usermanagement/export/{{$location}}/todayentry/{{$county}}/{{$survey->id}}">
    <input class="btn btn-primary form-control" type="submit" value="DOWNLOAD"></form></td>   

                       
                       
                        
                        
                       
                       </tr>
                       
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        
                         <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                    
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                        </div>
                      </div>
                    </div>
                                  <script type="text/javascript">
                                
   </script>
                    @endif

                    @endforeach



                    
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                  <span style="color:red">>> Click on the labels to open/close panels</span>


                  @foreach($surveys as $survey)


                                         @if(($survey->id=='CHV2') || ($survey->id=='MNHV2') || ($survey->id=='IMCIV1') )
                  <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3{{$survey->id}}">
                            @if($survey->id=='CHV2')

                            Child Health




                            @endif
                            @if($survey->id=='MNHV2')

                            Maternal and Neonatal Health




                            @endif
                            @if($survey->id=='IMCIV1')

                            Integrated Management of Childhood Illness




                            @endif
                          </a>
                        </h4>
                      </div>

                      <div id="collapse3{{$survey->id}}" class="panel-collapse collapse">
                        <div class="box-body">
 <table id="example3{{$survey->id}}" class="table table-bordered table-striped">
  


                  
                    <thead>
              



                      <tr>

                     
                        
                        <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                   <!--  -->

                        @foreach($counties_assessed as $county)
                        <tr>

                      

                        
                        <td> {{$county}}</td>

                        <td> 
                               
                        @foreach($submitted as $sub)
                              @if($county==$sub['County'] && substr($sub['Description'],0,2)==substr($survey->Description,0,2))
                                
                                  {{$sub['submitted']}}
                           
                            @endif

                        @endforeach
                                                   
                  
                      </td>




                        <td > 

                           @foreach($incomplete as $inc)
                              @if($county==$inc['County'] && substr($inc['Description'],0,2)==substr($survey->Description,0,2))
                                
{{$inc['incomplete']}}
                                

                                

                            @endif

                        @endforeach

                               


                      
                        </td>



                        
        
                    

<td class="hideprint"><form action="{{config('app.prefix')}}/usermanagement/export/{{$location}}/totalentry/{{$county}}/{{$survey->id}}">
    <input class="btn btn-primary form-control" type="submit" value="DOWNLOAD"></form></td>   

                       
                       
                        
                        
                       
                       </tr>
                       
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        
                         <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                    
                        
                  
                      </tr>
                    </tfoot>
                  </table>                      
                    </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>

</div>


 @foreach($surveys as $survey)
 @if($survey->id=='CHV2'|| 'MNHV2'||'IMCIV1')
  <script type="text/javascript">

</script>
@endif
@endforeach





@endsection



 @section('javascript')

  



 
  

 <!-- DATA TABLES -->


 @foreach($surveys as $survey)
                     @if(($survey->id=='CHV2') || ($survey->id=='MNHV2') || ($survey->id=='IMCIV1') )


       
        <script type="text/javascript">



         $(".theresume").submit(function(e) { 

        var AssID = $(this).attr('AssID');
        var Bad = $(this).attr('Bad');

      

        var token = $('input[name=_token]').val();
          e.preventDefault();


            var data = {

        'action':'check',
        'AssID':AssID,
       '_token': $('input[name=_token]').val()

    };

   


     $.ajax({

    
      url: '{{config("app.prefix")}}/survey/session',
      type: "post",
       data: data,
       error: function(){

        alert('Unable to perform request');

       },
      success: function(data){

      

       

              if(!data){

             

             if(Bad) window.location = ('{{URL::asset("/assessments/resume/")}}/'+AssID);
           else window.location = ('{{URL::asset("/assessments/badresume/")}}/'+AssID);

           }else if(data){


            alert('This survey is currrently being filled, please try again a few minutes later');


           }




      }
    });




     

        


          return false;



});
       
 
 
$(document).ready(function() {


      



  


var table=$('#example1{{$survey->id}}').DataTable( 
 {
   
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select='<select id="{{$survey->id}}' + column.index()+ '"class="colms" style="width:100%"  ><option style="width:100%" value="">All</option></select>';

                var select = $(select)
                    .appendTo( $(column.header()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option style="width:100%" value="'+d+'">'+d+'</option>' )
                } );
            } );

        }



    } );


  //   $('#refresh{{$survey->id}}').click(function()
  //     {
  // $('.colms').val("");
  // table.draw();

  //       });
 document.getElementById("example1{{$survey->id}}_filter").style.display = 'none';
  $('#{{$survey->id}}Action').hide();



  });

   

    </script>

    <script type="text/javascript">

 $(function () 
 {
       $('#example2{{$survey->id}}').DataTable(

        {
           "aaSorting": [[ 1, "desc" ]]
         });
       

       $('#example3{{$survey->id}}').DataTable(
       {
           "aaSorting": [[ 1, "desc" ]]

         });

     });




 $('#excel{{$survey->id}}').click(function()
{
    

   window.open('{{config("app.prefix")}}/usermanagement/export/preview/general/{{$survey->id}}/download');
           
  });


function ajax2() {
 
    var data = {
          'version':$('#{{$survey->id}}Version').val(),
          'term':$('#{{$survey->id}}Assessment Term').val(),
          'assessor':$('#{{$survey->id}}Assessor').val(),
          'date':$('#{{$survey->id}}Date').val(),
          'facility':$('#{{$survey->id}}Facility').val(),
          'county':$('#{{$survey->id}}County').val(),
          'user':$('#{{$survey->id}}Entered by').val(),

         '_token': $('input[name=_token]').val()
        
    };

   $.ajax({
       url: '{{config("app.prefix")}}/usermanagement/ajax',
      type: "post",
       data: data,
           success: function(data){

          var  testval = JSON.parse(data)['testval'];
          
    $('#testerval2').val(testval);
  }
 
   }); 




       

}

    
     






    </script>
@endif
 @endforeach



 <script type="text/javascript">


      $('#print-button').click(function()

      {
        
        $('.hideprint').hide();

          window.print();

      $('.hideprint').show();
               

      });


       $('#tester').click(function()
{
    

  ajax();
           
  });


function ajax() {
 
    var data = {
          'testval':$('#testerval').val(),
         '_token': $('input[name=_token]').val()
        
    };

   $.ajax({
       url: '{{config("app.prefix")}}/usermanagement/ajax',
      type: "post",
       data: data,
           success: function(data){

          var  testval = JSON.parse(data)['testval'];
          
    $('#testerval2').val(testval);
  }
 
   }); 




       

}




     

 </script>




        
  @endsection

 