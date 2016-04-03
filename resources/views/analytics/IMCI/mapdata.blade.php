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
if(isset(x[county]['Submitted']))var BaselineSubmitt = parseInt(x[county]['Submitted']); else var BaselineSubmitt =0;
var BaselineSubmitt = parseInt(x[county]['Submitted']);
var TotalSubmitt = parseInt(BaselineSubmitt); 