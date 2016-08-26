 // use Array.isArray or Object.prototype.toString.call
// to differentiate regular objects from arrays
//typeof [1, 2, 4] === 'object';
var ch_rawdata= {};
 XLSX = require('XLSX');

ch_rawdata.getRowName=function(sectionDatakeys){
	for (var i = 0; i < sectionDatakeys.length; i++) {
		sectionDatakeys[i]
	};
};

ch_rawdata.getSecDataKeys = function(fsum_datakeys,pattern){
	var reg_pat;
	reg_pat = pattern;
	if(reg_pat != null && reg_pat != undefined){
	re = new RegExp(reg_pat,'i');	

	if(Array.isArray(fsum_datakeys)){
		console.log('array size is '+fsum_datakeys.length );
		console.log('returning col_blk_keys');
		var col_blk_keys = [];
		for (var i = 0; i < fsum_datakeys.length; i++) {
			var col_item = fsum_datakeys[i];
			var myArray = re.exec(col_item);
			if(myArray !== null ){
				col_blk_keys.push(myArray.input);
				console.log('displaying myArray item after pushing col_item #'+i );
				console.log(myArray);
				//console.log(col_blk_keys);
			}else{
				console.log('col_item #'+ i + ' was a regex mismatch');
				console.log('Check other sections');
		}

		
	}
	
		return col_blk_keys;
	}

		else{
			return 'failed my man, fsum_datakeys not of type Array';
		}
	}

	else{
		console.log('regex pattern null or undefined');
	}


	
	
};

ch_rawdata.getSingleRowArray = function(secRowsCols1,row_pattern){
	var re = new RegExp(row_pattern, 'i');
	var cur_row = [];
	if(Array.isArray(secRowsCols1) && typeof row_pattern !== null && typeof row_pattern !== undefined){
		for (var i = 0; i < secRowsCols1.length; i++) {
			var cur_item = secRowsCols1[i];
			var rwMatch = re.exec(cur_item);//match regString for row
			if(rwMatch !== null){
				cur_row.push(rwMatch.input);//add match to cur_row array
				console.log('cur_item #'+ i + 'was a match for '+ row_pattern );
			}
			else{
				console.log('rwMatch was null');
				console.log('col_item : '+ cur_item + 'didn\'t match '+ row_pattern);
				continue;
			}
		}

		return cur_row; //return array of current row with matching columns
	}
};

ch_rawdata.setFacilitySummaryExcel=function(wbk,ch_surv,s_datakeys){

	console.log('Launching setFacilitySummaryExcel');
		// Get worksheet 
			if(typeof ch_surv == 'object' && wbk != undefined && wbk != null && s_datakeys != null)
			{	
				var work_buch = {};

				var first_sheet = wbk.SheetNames[0];
				 console.log('name of first sheet is : ' + first_sheet);
				 var worksheet = wbk.Sheets[first_sheet];

				if(Array.isArray(s_datakeys)){

					var alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
					var a_strt = 'M', m_index  = alpha.indexOf('M');
					var Sec1_Range = XLSX.utils.decode_range(worksheet['!ref']);
					var ad_index = Sec1_Range.e.c - 3;
					console.log( 'Alpha '+ a_strt + ' : '+alpha[m_index] );
					
					/*"Sec1_Range": {
					      "s": {
					        "c": 0,
					        "r": 1
					      },
					      "e": {
					        "c": 32,
					        "r": 67
					      }
					    }*/

					   
						var str ;
					    for (var j = m_index ; j <= 25; j++) {
					    	var row_t = 9;
					    	for (var col_key = 0; col_key < s_datakeys[0].length; col_key++) {
					    		for (var i = 0; i < s_datakeys.length; i++) {
					    					col_off = col_key + 2;
					    					if(col_key == (s_datakeys[0].length - 2) || col_key>(s_datakeys[0].length - 2)){
					    						col_off = s_datakeys[0].length - 2;
					    					}
					    					
							    			str = s_datakeys[i][col_off];
							    			worksheet[alpha[j]+ row_t] = {v: str, t: 's'};
							    			row_t++;//
							    			 
							    		
						    	};
					    	};
					    	
					    };
					    
					   /* for (; j < 30; j++) {
					    row_t = 9;
					    for (var col_key2 = 0; col_key2 < s_datakeys[0].length; col_key2++) {
					    		for (var i = 0; i < s_datakeys.length; i++) {
					    					col_off2 = col_key2 + 2;
					    					if(col_key2 == (s_datakeys[0].length - 2) || col_key2>(s_datakeys[0].length - 2)){
					    						col_off2 = s_datakeys[0].length - 2;
					    					}
					    					
							    			str = s_datakeys[i][col_off2];
							    			worksheet[alpha[j]+ row_t] = {v: str, t: 's'};
							    			row_t++;//
							    			 
							    		
						    	};
					    	};
					        worksheet['A' + alpha[j - 26] + row_t] = {v: str, t: 's'};
					    }*/
					
					//xlsx.writeFile(workbook, 'rand.xlsx');
					 console.log('start column index : '+  m_index );
					 console.log('end column index : '+  ad_index);



				} else{

					console.log('Sec Arrays expected, something else was found');

				}
				//work_buch.lastRow = x;
				work_buch.wb = wbk;
				return work_buch;

			} else {
				console.log('Error with ch_surv / wbk /s_datakeys make sure they are variables with values');
			}

		
		 
		 
};




//var chdata= '';
ch_rawdata.getValidCHAssessments = function(err, chassess){
	
 	//var query_s= { /*'Survey': { $in: ['CHV1', 'CHV2'] },*/ 'Status' : 'Submitted'};
 	if (err != null) {
 		console.log(error);
 		//res.send(err);
 		return err;
 	}
 		else{
 			if(chassess !== 'undefined' && chassess !== null)
 			console.log(chassess.length);
 			console.log('found something');

 			res.send(chassess);
 			//chassessments = chassess;
 			return chassess;
 		}
 	/*Assessment.
 	find(query_s, function(err,assessments){
 		if(err){
 			console.log('we found errors');
 			console.log(err);
 			return err;
 		//return the assessments
 	}

 	else {

 		console.log(assessments.length);
 		console.log('returning assessments');
 		return assessments;
	}

});*/

};

module.exports= ch_rawdata;