//
$(document).ready(function() {
// note this array has outer scope
var phrases = [];

$('.county').each(function(){
        // this is inner scope, in reference to the .county element
        var county = '';
        $(this).find('li').click(function(){
            // cache jquery var
            var current = $(this);
			//console.log(current.data("state"));
		});
		
		$(this).find('div').hover(
			 function () {
			   $(this).css({"color":"#8fd400"});
			 }, 
			 function () {
			   $(this).css({"color":"#cacaca"});
			 }
		);
		
		$(this).find('div').each(function(){
            // cache jquery var
            var current = $(this);
            // check if our current li has children (sub elements)
            // if it does, skip it
            // ps, you can work with this by seeing if the first child
            // is a UL with blank inside and odd your custom BLANK text
            if(current.children().size() > 0) {return true;}
            // add current text to our current county
            county += current.data("state");
			//console.log(current.data("state"));
			$(this).css('color', '#cacaca');
        });
        // now that our current county is completely build we add it to our outer array
        phrases.push(county);
    });
    // note the comma in the alert shows separate phrases
    //console.log(phrases);	
})