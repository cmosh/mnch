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

if(isset(x['Baseline'+county]['Submitted']))var BaselineSubmitt = parseInt(x['Baseline'+county]['Submitted']); else var BaselineSubmitt = 0;
var TotalSubmitt = parseInt(BaselineSubmitt); 
if(isset(x['Baseline'+county]['Total Facilities']))var TotalTotal = parseInt(x['Baseline'+county]['Total Facilities']); else var TotalTotal = 0;
  





