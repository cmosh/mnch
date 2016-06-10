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
        refs=[];
      proto=window.location.protocol,hloc=window.location.host+"/MNCH";
      refs[0]=proto + "//" + hloc + "/analytics/CHV1";
      refs[1]=proto + "//" + hloc + "/analytics/CHV2";
        a_versions= "<a "+" href='"+refs[0]+"'"+">Version' 1 : 2012-2013 </a>";
    a_versions+="<a "+" href='"+refs[1]+"'"+">Version 2 : 2014 - Present</a>";
    a_versions+="<a href='#'>All</a>";
        break;
      case "MNHV1":
      case "MNHV2":
        console.log(pathArray[last]);
        refs=[];
      proto=window.location.protocol,hloc=window.location.host+"/MNCH";
      refs[0]=proto + "//" + hloc + "/analytics/MNHV1";
      refs[1]=proto + "//" + hloc + "/analytics/MNHV2";
         a_versions= "<a "+" href='"+refs[0]+"'"+">Version' 1 : 2012-2013 </a>";
    a_versions+="<a "+" href='"+refs[1]+"'"+">Version 2 : 2014 - Present</a>";
         a_versions+="<a href='#'>All</a>";

          break; 
      case "IMCIV1":
      console.log(pathArray[last]);
      
      proto=window.location.protocol,hloc=window.location.host+"/MNCH";
      refs=proto + "//" + hloc + "/analytics/IMCIV1";
      a_versions= "<a "+" href='"+refs+"'"+">Version' 1 </a>";
      default:
        console.log(pathArray[last]);
         a_versions="no versions";

}



  $("#verLinks").html(a_versions);
  //console.log(a_versions);

    
     }

else if(i==last && pathArray[last]=="rawdata" || pathArray[last]=="login" || pathArray[last]=="register"){
  $("#verDrop").attr("hidden","true");
  console.log(pathArray[last]);
  }

else if(i==last){
 console.log(pathArray[last]);
}

     }

    

     

}