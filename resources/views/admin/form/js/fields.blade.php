 <script type="text/javascript">





  $.fn.select2.amd.require([
    "select2/core",
    "select2/utils",
    "select2/compat/matcher"
  ], function (Select2, Utils, oldMatcher) {
   
  
  	var $ajax = $(".fieldset");

    function formatRepo (repo) {
      if (repo.loading) return repo.text;

      var markup = "<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__avatar'><img src='/img/" + repo.type + ".png'>"+repo.type+"</div>" +
        "<div class='select2-result-repository__meta'>" +
          "<div class='select2-result-repository__title'> Set: " + repo.field_setName + "</div>";

   
        markup += "<div class='select2-result-repository__description'> ID: " + repo.field_setID + "</div>";
      

      markup += "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'>Field(s): " +  repo.fields.length + "</div>" +

        "<div class='select2-result-repository__stargazers'>Value(s): ";


        for (var i = repo.fields.length - 1; i >= 0; i--) {

         	 markup +=repo.fields[i].Label + " = " +repo.fields[i].Value+", ";
         }; 

         markup = markup.replace(/, +$/, '');


        markup += " </div>"+



      "</div>" +
      "</div></div>";

      return markup;
    }

    function formatRepoSelection (repo) {
      return repo.field_setName || repo.text; 
    }

    $ajax.select2({
      ajax: {
        url: "/admin/surveys/fields/",
        type:'post',
        dataType: 'json',
       
        delay: 250,
        data: function (params) {
          return {
            search: params.term, // search term
            page: params.page,
            _token: $('input[name=_token]').val()
          };
        },
        processResults: function (data, params) {
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used
          params.page = params.page || 1;

           var select2Data = $.map(data, function (obj) {
                    obj.id = obj.field_setID;
                    obj.text = obj.field_setName;

                    return obj;
                });

          return {
            results: select2Data
            // pagination: {
            //   more: (params.page * 30) < data.total_count
            // }
          };
        },
        cache: true
      },
      escapeMarkup: function (markup) { return markup; },
      minimumInputLength: 1,
      templateResult: formatRepo,
      templateSelection: formatRepoSelection
    });

  

});
  

  
  
</script>
