function executeAutomaticVisibility(e){$("[name="+e+"]:checked").each(function(){$("[automaticallyVisibleIfIdChecked^="+this.id+"]").show(),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".themultiple").attr("data-parsley-mincheck","1"),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".thenormal").attr("required","")}),$("[name="+e+"]:not(:checked)").each(function(){$("[automaticallyVisibleIfIdChecked^="+this.id+"]").hide(),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".themultiple").removeAttr("data-parsley-mincheck"),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".thenormal").removeAttr("required"),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".rmselect").removeAttr("selected"),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".thenormal").removeAttr("checked"),$("[automaticallyVisibleIfIdChecked^="+this.id+"]").find(".thenormal").val("")})}function executecoolness(e){$("[name="+e+"]:checked").each(function(){$("[coolradio="+this.id+"]").show(),$("[coolradio="+this.id+"]").attr("required","")}),$("[name="+e+"]:not(:checked)").each(function(){$("[coolradio="+this.id+"]").hide(),$("[coolradio="+this.id+"]").removeAttr("required"),$("[coolradio="+this.id+"]").val("")})}$(document).ready(function(){triggers=$("[automaticallyVisibleIfIdChecked]").map(function(){return $("#"+$(this).attr("automaticallyVisibleIfIdChecked")).get()}),$.unique(triggers),triggers.each(function(){executeAutomaticVisibility(this.name),$(this).change(function(){executeAutomaticVisibility(this.name)})})}),$(document).ready(function(){triggers=$("[coolradio]").map(function(){return $("#"+$(this).attr("coolradio")).get()}),$.unique(triggers),triggers.each(function(){executecoolness(this.name),$(this).change(function(){executecoolness(this.name)})})}),$(document).ready(function(){$("#demo-form").parsley({successClass:"success",errorClass:"error",errors:{classHandler:function(e){return $(e).closest(".control-group")},errorsWrapper:'<span class="help-inline"></span>',errorElem:"<span></span>"}})}),$(".coolhidden").change(function(){var e=$(this).attr("coolstore");$("#"+e).val(this.value)}),$(".coolmultiple").change(function(){var e=this.name,i=e.slice(0,-2),t="#"+i+"other",a="";$("#"+i+" option:selected").each(function(){a+=$(this).val()+" "}),a.indexOf("-1")>-1?($(t).show(),$(t).attr("required","")):($(t).hide(),$(t).removeAttr("required"))});