  <script>
  $(function() {
    $( ".sec" ).sortable({
   
      handle: ".box-header",
      cancel: ".box-toggle",
      placeholder: "box-placeholder ui-corner-all"
    });


 
    $( ".box" )
     
      .find( ".box-header" )
       
        .prepend( "<span class='box-toggle'></span>");
 
    $( ".box-toggle" ).click(function() {
      var icon = $( this );
     
      icon.closest( ".box" ).find( ".box-body" ).toggle();
    });
  });
  </script>
