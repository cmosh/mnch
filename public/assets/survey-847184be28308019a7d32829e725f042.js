
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

   function executecoolness(name) {
    $("[name="+name+"]:checked").each(function() {
        
        $("[coolradio=" + this.id+"]").show();

            });
    $("[name="+name+"]:not(:checked)").each(function() {
        
        $("[coolradio=" + this.id+"]").hide();
        $("[coolradio=" + this.id+"]").removeAttr('required');
            $("[coolradio=" + this.id+"]").val('');
          
    });
}

$(document).ready( function() {
    triggers = $("[coolradio]")
        .map(function(){ return $("#" + $(this).attr("coolradio")).get() })
    $.unique(triggers);
    triggers.each( function() {
        executecoolness(this.name);
        $(this).change( function(){ executecoolness(this.name); } );
    });
});

  $(document).ready(function () {
        $('#demo-form').parsley({
            successClass: 'success',
            errorClass: 'error',
            errors: {
                classHandler: function(el) {
                    return $(el).closest('.control-group');
                },
                errorsWrapper: '<span class=\"help-inline\"></span>',
                errorElem: '<span></span>'
            }
        });
    });


   


  

$( ".coolhidden" ).change(function() {

  var replaceval =  $(this).attr('coolstore');

  $('#'+replaceval).val(this.value);

 
});


 

$( ".coolmultiple" ).change(function() {
  var str = this.name;
  var str2 =  str.slice(0,-2)
  var thehidden = '#' +str2 + 'other';
//arrValues.indexOf('Sam') > -1
  
  var size = "";

  $("#"+str2+ " option:selected").each(function () {
                size += $(this).val() + " ";
            });



  if (size.indexOf('-1') > -1) {
  $(thehidden).show();
  // $(thehidden).attr('required','');
}else{
   $(thehidden).hide();
   $(thehidden).removeAttr('required');
}
   
   

});
;
// This is a manifest file that'll be compiled into app.js, which will include all the files

// listed below.

//

// Any JavaScript/Coffee file within this directory, lib/assets/js, provider/assets/js,

// or provider/assets/js of packages, if any, can be referenced here using a relative path.

//

// It's not advisable to add code directly here, but if you do, it'll appear in whatever order it

// gets included (e.g. say you have require_tree . then the code will appear after all the directories

// but before any files alphabetically greater than 'app.js'

//

// Read Mincer README (https://github.com/nodeca/mincer#mincer-directives) for details

// about supported directives.

//

//(=)require_directory survey_page
;
// This is a manifest file that'll be compiled into app.js, which will include all the files

// listed below.

//

// Any JavaScript/Coffee file within this directory, lib/assets/js, provider/assets/js,

// or provider/assets/js of packages, if any, can be referenced here using a relative path.

//

// It's not advisable to add code directly here, but if you do, it'll appear in whatever order it

// gets included (e.g. say you have require_tree . then the code will appear after all the directories

// but before any files alphabetically greater than 'app.js'

//

// Read Mincer README (https://github.com/nodeca/mincer#mincer-directives) for details

// about supported directives.

//

//(=)require survey_page
;
