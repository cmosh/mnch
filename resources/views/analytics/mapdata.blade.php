
try {
   var MidtermSubmitt = parseInt(x['Midterm'+county]['Submitted']);
} catch(error) {
   var MidtermSubmitt = 0;
}

try {
  var EndtermSubmitt = parseInt(x['Endterm'+county]['Submitted']);
} catch(error) {
   var EndtermSubmitt = 0;
}

try {
   var BaselineSubmitt = parseInt(x['Baseline'+county]['Submitted']);
} catch(error) {
   var BaselineSubmitt = 0;
}

var tempterm = $('#Term').val();
var TotalSubmitt = 0;
switch (tempterm) {
  case "Baseline":
    var TotalSubmitt = parseInt(BaselineSubmitt) 
    break;
  case "Midterm":
    var TotalSubmitt = parseInt(MidtermSubmitt) 
    break;
  case "Endterm":
     var TotalSubmitt = parseInt(EndtermSubmitt) 
    break;
  default:
    var TotalSubmitt = 0 
}


try {
   var TotalTotal = parseInt(x['Baseline'+county]['Total Facilities']); 
} catch(error) {
  var TotalTotal = 0;
}

  





