
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

var TotalSubmitt = parseInt(MidtermSubmitt) + parseInt(EndtermSubmitt) + parseInt(BaselineSubmitt); 


try {
   var TotalTotal = parseInt(x['Midterm'+county]['Total Facilities']); 
} catch(error) {
  var TotalTotal = 0;
}

  





