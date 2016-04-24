  var MainBlooddata = new google.visualization.DataTable();
        MainBlooddata.addColumn('string', 'H1');
        MainBlooddata.addColumn('number', 'H2');
        MainBlooddata.addRows(jsonData['MainBlood']);

        // Set chart options
        var MainBloodoptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300,
                        sliceVisibilityThreshold:0};

        // Instantiate and draw our chart, passing in some options.
        var MainBlood = new google.visualization.PieChart(document.getElementById('MainBlood'));
        MainBlood.draw(MainBlooddata, MainBloodoptions);

         function resizeMainBlood () {
      
       
            MainBlood.draw(MainBlooddata, MainBloodoptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeMainBlood, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeMainBlood);
    }