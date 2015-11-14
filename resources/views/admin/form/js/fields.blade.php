 <script type="text/javascript">





  $.fn.select2.amd.require([
    "select2/core",
    "select2/utils",
    "select2/compat/matcher"
  ], function (Select2, Utils, oldMatcher) {
   
  
  	var $ajax = $(".fieldset");

    function formatFset (fset) {
      if (fset.loading) return fset.text;

      var markup = "<div class='select2-result-fsetsitory clearfix'>" +
        "<div class='select2-result-fsetsitory__avatar'><img src='/img/" + fset.type + ".png'>"+fset.type+"</div>" +
        "<div class='select2-result-fsetsitory__meta'>" +
          "<div class='select2-result-fsetsitory__title'> Set: " + fset.field_setName + "</div>";

   
        markup += "<div class='select2-result-fsetsitory__description'> ID: " + fset.field_setID + "</div>";
      

      markup += "<div class='select2-result-fsetsitory__statistics'>" +
        "<div class='select2-result-fsetsitory__forks'>Field(s): " +  fset.fields.length + "</div>" +

        "<div class='select2-result-fsetsitory__stargazers'>Value(s): ";


        for (var i = fset.fields.length - 1; i >= 0; i--) {

         	 markup +=fset.fields[i].Label + " = " +fset.fields[i].Value+", ";
         }; 

         markup = markup.replace(/, +$/, '');


        markup += " </div>"+



      "</div>" +
      "</div></div>";

      return markup;
    }

    function formatFsetSelection (fset) {
      return fset.field_setName || fset.text; 
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
            results: select2Data,
            pagination: {
              more: (params.page * 30) < data.total_count
            }
          };
        },
        cache: true
      },
      escapeMarkup: function (markup) { return markup; },
      minimumInputLength: 1,
      templateResult: formatFset,
      templateSelection: formatFsetSelection
    });

  

});
  

  
  
</script>
