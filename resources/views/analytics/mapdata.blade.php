 var  MidtermAttempt = x['Midterm'+county]['All_Attempted'];
    var MidtermSubmitt = x['Midterm'+county]['Submitted'];
  var   MidtermNotSubmitt = x['Midterm'+county]['Not_Submitted'];
  var   MidtermTotal = x['Midterm'+county]['Total Facilities'];
   var  MidtermNotAttempt = MidtermTotal - MidtermAttempt;

var  EndtermAttempt = x['Endterm'+county]['All_Attempted'];
    var EndtermSubmitt = x['Endterm'+county]['Submitted'];
  var   EndtermNotSubmitt = x['Endterm'+county]['Not_Submitted'];
  var   EndtermTotal = x['Endterm'+county]['Total Facilities'];
   var  EndtermNotAttempt = EndtermTotal - EndtermAttempt;

var  BaselineAttempt = x['Baseline'+county]['All_Attempted'];
    var BaselineSubmitt = x['Baseline'+county]['Submitted'];
  var   BaselineNotSubmitt = x['Baseline'+county]['Not_Submitted'];
  var   BaselineTotal = x['Baseline'+county]['Total Facilities'];
   var  BaselineNotAttempt = BaselineTotal - BaselineAttempt;

 var  TotalAttempt = MidtermAttempt+EndtermAttempt+BaselineAttempt;
    var TotalSubmitt = MidtermSubmitt + EndtermSubmitt +BaselineSubmitt;
  var   TotalNotSubmitt = MidtermNotSubmitt + EndtermNotSubmitt + BaselineNotSubmitt;
  var   TotalTotal = MidtermTotal;
   var  TotalNotAttempt = TotalTotal - TotalAttempt;





