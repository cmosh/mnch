@extends('template')
@section('title')
 <title>MNCH | {{$title}}</title>
@endsection
@section('content')
	
<style>iframe{width:100%;}</style>
<style>.embed-container { position: relative; padding-bottom: 100%;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>


<iframe id="iframe" style="border : none;" src="/redis" scrolling="Yes"></iframe>

</div>

 

@endsection




@section('js')

<script>iFrameResize({log:true})</script>
   <script type="text/javascript">
   window.open = function (url, name, features, replace) {
    document.getElementById('#iframe').src = url;
}
</script>

    
   
@endsection