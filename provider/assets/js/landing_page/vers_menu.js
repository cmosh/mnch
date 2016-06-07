$(document).ready(function(){

    $(".cmpr").attr("hidden","true");
    getVersion();
    
 }

  );

 function getVersion(){
  var pathArray = window.location.pathname.split( '/' );
  var last=pathArray.length-1;
  var seclast=pathArray.length-2;
  var pathPart = "",  a_versions="";
    for (i = 0; i < pathArray.length; i++) {
      pathPart= pathArray[i];
      console.log("pathPart: " + pathPart + " index: " + i + " seclast : " + pathArray[seclast] );
   

      if(i==last && pathArray[seclast]=="analytics"){

      switch (pathPart) {
      case "CHV1":
      case "CHV2":
      console.log(pathArray[last]);
        a_versions= "<a class='cmpr' href='{{config('app.prefix')}}/analytics/CHV1'>Version 1 : 2012-2013 </a>";
    a_versions+="<a href='{{config('app.prefix')}}/'>Version 2 : 2014 - Present</a>";
    a_versions+="<a class='cmpr' href='#'>All</a>";
        break; 
      case "MNHV1":
      case "MNHV2":
        console.log(pathArray[last]);
         a_versions="<a class='cmpr' href='{{config('app.prefix')}}/analytics/MNHV1'>Version 1 : 2012 - 2013</a>";
         a_versions+="<a href='{{config('app.prefix')}}/analytics/MNHV2'>Version 2 : 2014 - Present</a>";
         a_versions+="<a class='cmpr' href='#'>All</a>";

          break; 
      case "IMCIV1":
      console.log(pathArray[last]);
      a_versions="<a href='{{config('app.prefix')}}/analytics/IMCIV1'> Version 1</a>";
      default:
        console.log(pathArray[last]);
         a_versions="no versions";

}



  $("#verLinks").html(a_versions);
  //console.log(a_versions);

    
     }

else if(i==last && pathArray[last]=="rawdata"){
  $("#verDrop").attr("hidden","true");
  console.log(pathArray[last]);
  }

else if(i==last){
 console.log(pathArray[last]);
}

     }

    

     

}