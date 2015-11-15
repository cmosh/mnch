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



   $('.theelipses').mousedown(function() {
    var x = $( this ).attr('block');
    
   window.selectedbox = x;
   window.selectedsection = window.selectedbox.substr(5, window.selectedbox.length-9); 
  
});
$('.theelipses').mouseup(function() {
  
  var thesection = 'sec'+window.selectedsection; 
  alert(thesection);
  var i=1;
    $("#"+thesection+" .theblockto").each(function() {
      var x = this.id.substr(5,this.id.length);
      alert(x);
       $('#'+x).prop('name',window.selectedsection+"BLK"+ i);
       $('#'+x).prop('id',window.selectedsection+"BLK"+ i);
      this.id = "block"+window.selectedsection+"BLK"+ i;

      alert(this.id);

      i++;
         });
  });

  </script>
