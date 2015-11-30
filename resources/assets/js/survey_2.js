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
  $(thehidden).attr('required','');
}else{
   $(thehidden).hide();
   $(thehidden).removeAttr('required');
}
   
   

});









