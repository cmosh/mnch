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



   $('.box-header').mousedown(function() {
    var x = $( this ).parent().attr('id');
    
   window.selectedbox = x;
   window.selectedsection = window.selectedbox.substr(5, window.selectedbox.length-9); 
  
});
$('.box-header').mouseup(function() {

  var thesection = 'sec'+window.selectedsection; 
  var i=1;
    $("#"+thesection+" div.direct-chat-primary").each(function() {
      var x = this.id.substr(5,this.id.length);
      alert(x);
       $('#'+x).attr('id',window.selectedsection+"BLK"+ i);
      this.id = "block"+window.selectedsection+"BLK"+ i;

      alert(this.id);

      i++;
         });
  });

  </script>
