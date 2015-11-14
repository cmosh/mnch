  <script>
  $(function() {
    $( ".tablet" ).sortable({
   
      handle: ".trow-header",
      cancel: ".trow-toggle",
      placeholder: "row-placeholder ui-corner-all"
    });


 
    $( ".trow" )
     
      .find( ".trow-header" )
       
        .prepend( "<span class='trow-toggle'></span>");
 
    $( ".trow-toggle" ).click(function() {
      var icon = $( this );
     
      icon.closest( ".trow" ).find( ".trow-body" ).toggle();
    });
  });
  </script>
