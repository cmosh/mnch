function year2() {
    $( "#anT" ).children().addClass("fa fa-refresh fa-spin");
      $(  "#anT"  ).addClass("overlay");
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
       var jsonData = JSON.parse(data);
       @include('analytics/CH/js/annualTrends')
      $(  "#anT"  ).children().removeClass("fa fa-refresh fa-spin");
      $( "#anT"  ).removeClass("overlay");
      } 
   });  
}