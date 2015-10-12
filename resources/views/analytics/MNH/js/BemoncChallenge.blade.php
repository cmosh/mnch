var BemoncChallengedata = google.visualization.arrayToDataTable(jsonData['BemoncChallenge']);

       var BemoncChallengeoptions = {
        
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var BemoncChallenge = new google.visualization.BarChart(document.getElementById('BemoncChallenge'));
      BemoncChallenge.draw(BemoncChallengedata, BemoncChallengeoptions);

       function resizeBemoncChallenge () {
      
       
           BemoncChallenge.draw(BemoncChallengedata, BemoncChallengeoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeBemoncChallenge, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeBemoncChallenge);
    }
