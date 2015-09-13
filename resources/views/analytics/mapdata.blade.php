 var  MidtermAttempt = x['Midterm'+county]['All_Attempted']+0;
    var MidtermSubmitt = x['Midterm'+county]['Submitted']+0;
  var   MidtermNotSubmitt = x['Midterm'+county]['Not_Submitted']+0;
  var   MidtermTotal = x['Midterm'+county]['Total Facilities']+0;
   var  MidtermNotAttempt = MidtermTotal - MidtermAttempt;

var  EndtermAttempt = x['Endterm'+county]['All_Attempted']+0;
    var EndtermSubmitt = x['Endterm'+county]['Submitted']+0;
  var   EndtermNotSubmitt = x['Endterm'+county]['Not_Submitted']+0;
  var   EndtermTotal = x['Endterm'+county]['Total Facilities']+0;
   var  EndtermNotAttempt = EndtermTotal - EndtermAttempt;

var  BaselineAttempt = x['Baseline'+county]['All_Attempted']+0;
    var BaselineSubmitt = x['Baseline'+county]['Submitted']+0;
  var   BaselineNotSubmitt = x['Baseline'+county]['Not_Submitted']+0;
  var   BaselineTotal = x['Baseline'+county]['Total Facilities']+0;
   var  BaselineNotAttempt = BaselineTotal - BaselineAttempt;

   var  TotalAttempt = MidtermAttempt+EndtermAttempt+BaselineAttempt;
    var TotalSubmitt = MidtermSubmitt + EndtermSubmitt +BaselineSubmitt;
  var   TotalNotSubmitt = MidtermNotSubmitt + EndtermNotSubmitt + BaselineNotSubmitt;
  var   TotalTotal = BaselineTotal;
   var  TotalNotAttempt = TotalTotal - TotalAttempt;




