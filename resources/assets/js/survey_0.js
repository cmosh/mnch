  function executeAutomaticVisibility(name) {
    $("[name="+name+"]:checked").each(function() {
        $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").show();
        
    $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".themultiple").attr('data-parsley-mincheck','1');

     $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".thenormal").attr('required','');
          
             

  
});   
   
    $("[name="+name+"]:not(:checked)").each(function() {
       $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").hide();
          $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".themultiple").removeAttr('data-parsley-mincheck');
      $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".thenormal").removeAttr('required');
            $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".rmselect").removeAttr('selected');
      $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".thenormal").removeAttr('checked');
        $("[automaticallyVisibleIfIdChecked^=" + this.id+"]").find(".thenormal").val('');
         

    });
}

$(document).ready( function() {
    triggers = $("[automaticallyVisibleIfIdChecked]")
        .map(function(){ return $("#" + $(this).attr("automaticallyVisibleIfIdChecked")).get() })
    $.unique(triggers);
    triggers.each( function() {
        executeAutomaticVisibility(this.name);
        $(this).change( function(){ executeAutomaticVisibility(this.name); } );
    });
});