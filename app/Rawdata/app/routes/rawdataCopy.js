/* EXCEL SHEET*/

 var Assessment = require('../models/assessment'),
 path = require('path'),
 XLSX = require('XLSX'),
 ch_rawdata = require('../controllers/ch_rawdata');

 rfilename = 'mnchrawdata.xlsx';
 readfile= path.join(__dirname+ "/uploads/"+ rfilename) ;
 console.log('Executing excel read route');
 console.log('file location : '+ readfile);
 var workbook = XLSX.readFile(readfile);
 console.log('reading from ' + rfilename);

module.exports=function(app,express){
 
 var rawdataRouter = express.Router();
 ch_surv_data = {};

rawdataRouter.route('/ch_excel')
 .get(function(req,res){

 function clone(obj) {
    // Handle the 3 simple types, and null or undefined
    if (null == obj || "object" != typeof obj) return obj;

    // Handle Date
    if (obj instanceof Date) {
        var copy = new Date();
        copy.setTime(obj.getTime());
        return copy;
    }

    // Handle Array
    if (obj instanceof Array) {
        var copy = [];
        for (var i = 0, len = obj.length; i < len; i++) {
            copy[i] = clone(obj[i]);
        }
        return copy;
    }

    // Handle Object
    if (obj instanceof Object) {
        var copy = {};
        for (var attr in obj) {
            if (obj.hasOwnProperty(attr)) copy[attr] = clone(obj[attr]);
        }
        return copy;
    }

    throw new Error("Unable to copy obj! Its type isn't supported.");
};

  function makeRowsArray(secRowsCols, assessment){
 if(Array.isArray(secRowsCols) && typeof assessment !== null && typeof assessment !== undefined ){
	var rowsArray = [];
	for (var i = 0; i < secRowsCols.length; i++) {
		var row_col = secRowsCols[i];
		var row_pat = row_col.substring(0,16);
		
		console.log('look for rows like' );
		console.log(row_pat);
		if(i>0){
			old_col = secRowsCols[ i -1];
			old_pat = old_col.substring(0,16);
			console.log('old_pat is: ');
			console.log(old_pat);
			if(old_pat === row_pat){
			console.log('cur_item #'+ i + ' has same row_pattern as the previous, skipping row');
			continue;	
			}
		}
		else{
			console.log('first cur_item. So Im setting old pattern');
			old_pat = secRowsCols[0];
		}
	
		var row = ch_rawdata.getSingleRowArray(secRowsCols,row_pat);
		if(Array.isArray(row)){
			if(row.length >= 1){
				rowsArray.push(row);
				console.log('pushed row to rowsArray');
			}
			else{
				console.log('row array was empty (no items) ');
			}
		}
	}

	return rowsArray;
}
else{
		console.log('secRowsCols or Assessment undefined');
	}
};
setupSurveyExcelSection = function(array) {
 		console.log('Starting Survey Setup to run through array');
 		console.log('Length of survey as array with items is: ');
 		console.log(array.length);

 if(Array.isArray(array)){//check if it arg is a valid array

 	console.log('Beginning to run through array for provided survey');	
 	x = 0;
 	ch_surv_data.mapdata=[];

 	array.forEach(function(assess) {//for each assessment found in the array do the following
		 	//console.log(assess.Survey);
		 	//console.log(assess.Data);

		  	if(typeof assess.Data != 'undefined' && typeof assess.Data != null){//check if the assessment item has a Data field
		  	console.log('props for item #'+ x + ' in array of length '+ array.length );
		  	//console.log(assess.Data);
		    //propnames = Object.getOwnPropertyNames(assess.Data);
		    assess_no= 'item #'+x; 
		    //ch_surv_data.props.unshift(assess_no);
		    console.log('propsnames returned for assessment #'+ x);
		    //console.log(chdata_array);
		    //console.log('Adding assessment data for #'+x + ' array to mapdata');

		    x++;
		  	}
		  	else
		  	{
		  		console.log('assessment data appears undefined');
		  		return 'failed to assessprops';
		  	}
		    
		  });
 		console.log('Setting first assessment')
 		ch_surv_data.firstAssess = array.shift();
 		ch_surv_data.datakeys=Object.keys(ch_surv_data.firstAssess.Data);
 		surveydata_check(ch_surv_data.firstAssess,ch_surv_data.datakeys);
 		ch_surv_data.col_blk1 = ch_rawdata.getSecDataKeys(ch_surv_data.datakeys,'CHV2SEC1BLK1RW');
 		ch_surv_data.rowsArr= makeRowsArray(ch_surv_data.col_blk1, ch_surv_data.firstAssess);
 		//ch_surv_data.datavalues= Object.values(ch_surv_data.firstAssess.Data);
 		}
 		else
 		{
 			console.log('that wan\'snt an array');
 			return 'failed to assessprops 2';
 		}
  

};


surveydata_check = function(assessment1,datakeys){
	console.log('surverdata_check function called');
	if(datakeys !=undefined && datakeys != null && datakeys.length >1 && assessment1.Data != 'undefined' && assessment1.Data != null)
	 {
	 for (var i = 0; i < datakeys.length; i++) {
	 	console.log('value of datakey['+ i + '] is :');
	 	
	 	col_id = datakeys[i];
	 	console.log(col_id);
	 	if(typeof assessment1.Data[col_id] != 'undefined'){
	 		if(!Array.isArray(assessment1.Data[col_id])){
	 			if(typeof assessment1.Data[col_id] === 'number' || typeof assessment1.Data[col_id] === 'string'){
	 				console.log(' assessment1.Data[col_id] is a number or string');
	 				ch_surv_data.mapdata.push(assessment1.Data[col_id]);

	 			}
	 		}
	 		else{
	 			console.log('array coming through');
	 			console.log(assessment1.Data[col_id]);
	 			assess_col = assessment1.Data[col_id];
	 			for (var z = 0; z < assess_col.length; z++) {
	 				ch_surv_data.mapdata_arraystring='';
	 				if(assess_col.length >1 && z != (assess_col.length - 1) )
	 				ch_surv_data.mapdata_arraystring += assess_col[z] + ','; 
	 				if(z == (assess_col.length - 1) || assess_col.length == 1)
	 				ch_surv_data.mapdata_arraystring += assess_col[z] ;


	 			};
	 			
	 			console.log('assessment.Data.datakeys['+ i +']' + ' is and Array of length '+ assess_col.length);

	 		}
	 	}
	 	else{
	 				console.log('assessment.Data.datakeys[i] was undefined or null');
	 				console.log('assessment.Data.datakeys[i] value is : ');
	 				console.log(assessment1.Data[col_id]);
	 	}
	 		
	 	}
	 }
		else
		{
			console.log('check datakeys array or if assessment.Data exists');
		}
	
};

 getValidCHAssessments = function(err, chassess){
	
 	//var query_s= { /*'Survey': { $in: ['CHV1', 'CHV2'] },*/ 'Status' : 'Submitted'};
 	if (err != null) {
 		console.log(error);
 		res.send(err);
 		return err;
 	}
 		else{
 			if(chassess !== 'undefined' && chassess !== null)
 			console.log(chassess.length);
 			console.log('found something');
 			setupSurveyExcelSection(chassess);
 			ch_surv_data.assessments= chassess;
 			res.send(ch_surv_data);
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

//CODING IS BEAUTIFUL, CHALLENGING , REWARDING ,STRATEGIC.

// Get the value 

//query the ch surveys
var quer= Assessment.find().where('Survey').in(['CHV1', 'CHV2']).where('Status').equals('Submitted').limit(100);
	
assessmo =  quer.exec(getValidCHAssessments);
console.log(assessmo);

console.log('ch survey data ');
//chassessments = chdata;

/*
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.unshift("Lemon","Pineapple");

var obj = { foo: "bar", baz: 42 };
console.log(Object.entries(obj)); // [ ['foo', 'bar'], ['baz', 42] ]

console.log('chassessments : ');
console.log(chassessments);
if(typeof chassessments !== 'undefined' && chassessments!='nothing' ){
	if(chassessments.isArray ){
	var assess_props = propcheck(chassessments);
	console.log('Displaying props');
	console.log(asses_props);
	res.json({
		
		success: true,
		sheetname: first_sheet_name,
		objprops: assess_props,
		//workbook: workbook,
		assessments_arr: chassessments,
		sheet: worksheet

	});
}

else{
	console.log('chassessments wasnt an array it was : ' + chassessments);
	res.send(chassessments);
}
}
else{
	console.log('we found undefined chassessments');
	res.send('Yup, found undefined chassessments');
}*/

});

/*

var workbook = XLSX.readFile('/uploads/test.xlsx');

// Using query builder
Person.
  find({ occupation: /host/ }).
  where('name.last').equals('Ghost').
  where('age').gt(17).lt(66).
  where('likes').in(['vaporizing', 'talking']).
  limit(10).
  sort('-occupation').
  select('name occupation').
  exec(callback);

var first_sheet_name = workbook.SheetNames[0];
var address_of_cell = 'A1';
 
// Get worksheet 
var worksheet = workbook.Sheets[first_sheet_name];
 
// Find desired cell 
var desired_cell = worksheet[address_of_cell];
 
// Get the value 
var desired_value = desired_cell.v;

function datenum(v, date1904) {
	if(date1904) v+=1462;
	var epoch = Date.parse(v);
	return (epoch - new Date(Date.UTC(1899, 11, 30))) / (24 * 60 * 60 * 1000);
}

function sheet_from_array_of_arrays(data, opts) {
	var ws = {};
	var range = {s: {c:10000000, r:10000000}, e: {c:0, r:0 }};
	for(var R = 0; R != data.length; ++R) {
		for(var C = 0; C != data[R].length; ++C) {
			if(range.s.r > R) range.s.r = R;
			if(range.s.c > C) range.s.c = C;
			if(range.e.r < R) range.e.r = R;
			if(range.e.c < C) range.e.c = C;
			var cell = {v: data[R][C] };
			if(cell.v == null) continue;
			var cell_ref = XLSX.utils.encode_cell({c:C,r:R});
			
			if(typeof cell.v === 'number') cell.t = 'n';
			else if(typeof cell.v === 'boolean') cell.t = 'b';
			else if(cell.v instanceof Date) {
				cell.t = 'n'; cell.z = XLSX.SSF._table[14];
				cell.v = datenum(cell.v);
			}
			else cell.t = 's';
			
			ws[cell_ref] = cell;
		}
	}
	if(range.s.c < 10000000) ws['!ref'] = XLSX.utils.encode_range(range);
	return ws;
}

/* original data */
/*var data = [[1,2,3],[true, false, null, "sheetjs"],["foo","bar",new Date("2014-02-19T14:30Z"), "0.3"], ["baz", null, "qux"]]
var ws_name = "SheetJS";

function Workbook() {
	if(!(this instanceof Workbook)) return new Workbook();
	this.SheetNames = [];
	this.Sheets = {};
}

var wb = new Workbook(), ws = sheet_from_array_of_arrays(data);

/* add worksheet to workbook *//*
wb.SheetNames.push(ws_name);
wb.Sheets[ws_name] = ws;

/* write file *//*
XLSX.writeFile(wb, 'test.xlsx');

class Polygon {
  constructor(height, width) {
    this.height = height;
    this.width = width;
  }
  
  get area() {
    return this.calcArea();
  }

  calcArea() {
    return this.height * this.width;
  }
}


*/
return rawdataRouter;
};