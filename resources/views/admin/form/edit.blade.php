
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/dragging.css" rel="stylesheet" type="text/css" />
     <link href="/bower_components/jq/jquery-ui.css" rel="stylesheet" /> 


@endsection 

@section('content')
   
    {!! Form::open() !!}     
    <?php echo $Mel?>
    {!! Form::close() !!}





      
			
			


			

        

@endsection

@section('javascript')

  <script src="/pace/pace.min.js"></script>
  <link href="/pace/pace.css" rel="stylesheet" />

 <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="/bower_components/admin-lte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
 <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>
    <script src="/bower_components/jq/jquery-ui.js"></script>   



@include('admin/form/js/fields')
  @include('admin/form/js/sectionsortable')
    @include('admin/form/js/boxsortable')
    @include('admin/form/js/rowsortable')



 


    




@endsection 