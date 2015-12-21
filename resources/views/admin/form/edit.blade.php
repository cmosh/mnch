
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('cdns')

  <!-- Select2 -->
    

@endsection 

@section('content')
   
  
    <?php  echo $Mel?>
      {!! Form::open() !!}     
    {!! Form::close() !!}




        

@endsection

@section('javascript')

 

 

<script type="text/javascript">
  function pad(s) 
{ 
   while (s.length < 2) 
      s = '0' + s; 
   return s; 
};

</script>
@include('admin/form/js/fields')
  @include('admin/form/js/sectionsortable')
    @include('admin/form/js/boxsortable')
    @include('admin/form/js/rowsortable')



 


    




@endsection 