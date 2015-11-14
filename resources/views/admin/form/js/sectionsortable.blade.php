  <script>
  $(function() {
    $( ".fm" ).sortable({
   
      handle: ".sec-header",
      cancel: ".sec-toggle",
      placeholder: "sec-placeholder ui-corner-all"
    });


 
    $( ".secbox" )
     
      .find( ".sec-header" )
       
        .prepend( "<span class='sec-toggle'></span>");
 
    $( ".sec-toggle" ).click(function() {
      var icon = $( this );
     
      icon.closest( ".secbox" ).find( ".sec-body" ).toggle();
    });
  });
  </script>
