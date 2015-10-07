@extends('template')

@section('content')
    
<style>iframe{width:100%;}</style>
<style>.embed-container { position: relative; padding-bottom: 100%;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>


<iframe src="/cache" style="border : none;" scrolling="no"></iframe>

</div>

 
   





@endsection




@section('js')
<script type="text/javascript" src="/iframe/js/iframeResizer.min.js"></script>
<script>iFrameResize({log:true})</script>
   

    
   
@endsection