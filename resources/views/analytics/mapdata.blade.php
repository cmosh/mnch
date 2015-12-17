function isset ()
{
    
  var a = arguments,
    l = a.length,
    i = 0,
    undef;

  if (l === 0)
  {
    throw new Error('Empty isset');
  }

  while (i !== l)
  {
    if (a[i] === undef || a[i] === null)
    {
      return false;
    }
    i++;
  }
  return true;
}

if(isset(x['Midterm'+county]['Submitted']))var MidtermSubmitt = parseInt(x['Midterm'+county]['Submitted']); else var MidtermSubmitt = 0;
if(isset(x['Endterm'+county]['Submitted']))var EndtermSubmitt = parseInt(x['Endterm'+county]['Submitted']); else var EndtermSubmitt = 0;
if(isset(x['Baseline'+county]['Submitted']))var BaselineSubmitt = parseInt(x['Baseline'+county]['Submitted']);  else var BaselineSubmitt =0;
var TotalSubmitt = parseInt(MidtermSubmitt) + parseInt(EndtermSubmitt) + parseInt(BaselineSubmitt); 
var TotalTotal = parseInt(x['Midterm'+county]['Total Facilities']); 
  





