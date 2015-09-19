function year3() {
    $( "#u5N" ).children().addClass("fa fa-refresh fa-spin");
      $(  "#u5N"  ).addClass("overlay");
    var data = {
          'county':$('#County').val(),
         '_token': $('input[name=_token]').val(),
         'Year1': $('#Year1').val(),
         'Year2': $('#Year2').val(),
         'Year3': $('#Year3').val(),
         'Year4': $('#Year4').val(),
         'Term':$('#Term').val()
             }; 
   $.ajax({
      url: '/analytics/ajax',
      type: "post",
       data: data,
           success: function(data){
       // mapdata = JSON.parse(data)['map'];
    var jsonData = JSON.parse(data)['analytics'];
       @include('analytics/CH/js/nondiarrhoea')
      $(  "#u5N"  ).children().removeClass("fa fa-refresh fa-spin");
      $( "#u5N"  ).removeClass("overlay");
      } 
   });  
}