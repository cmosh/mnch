
//load modules...
var http= require('http'),  
config = require('./config'),
https= require('https'), //set up server with express
 express = require('express'),
 bodyParser=require('body-parser'),
 morgan=require('morgan'),
 app = express(),//define our express app
 path = require('path'),
 mongoose=require('mongoose');

/* mongoptions = config.mongoptions,
 database= config.database;*/

 mongoose.connect(config.database,config.mongoptions);
 




// APP CONFIGURATION
//use bodyParser to grab info from post body 

//configure application to use CORS requests 
app.use(function(req,res,next){
	res.setHeader('Access-Control-Allow-Origin', '*');
	res.setHeader('Access-Control-Allow-Methods', 'GET','POST','DELETE', 'PUT');
	res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,Content-Type, Authorization');
	next();
});

//parse application/x-www-form-urlencoded parser
app.use(bodyParser.urlencoded({extended:true}));
// parse application/json
app.use(bodyParser.json());

//CONFIGURE API ROUTES
 rawdataRouter = require('./app/routes/rawdata')(app, express);

app.use('/rawdata', rawdataRouter);

//use morgan to log all requests to console
app.use(morgan('dev'));

//set up my static folder for serving assets
app.use(express.static(__dirname + '/public'));

//one route to my index file (landing page)
app.get('*', function(req,res){
	res.sendFile(path.join(__dirname + '/public/app/views/home.html'));
});

//specify express port and host address
http.createServer(app).listen(config.port,'0.0.0.0');

//report progress
console.log('Server started and listening on ' + config.port);



