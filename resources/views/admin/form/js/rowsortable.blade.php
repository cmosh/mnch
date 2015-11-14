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
      var icon = $(this);     
      icon.closest(".trow").find(".trow-body").toggle();
    });
  });


  $('.trow-header').mousedown(function() {
    var x = $( this ).parent().attr('id');
   window.selectedrow = x;
   window.selectedtable = window.selectedrow.substr(0, window.selectedrow.length-4); 

});
$('.trow-header').mouseup(function() {

  var thetable = 'table'+window.selectedtable; 
  var i=1;
    $("#"+thetable+" tr.trow").each(function() {
      this.id = window.selectedtable+"RW"+ pad(''+i);
      i++;
         });
  });

  </script>
