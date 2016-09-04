//assessment model schema

var mongoose=require('mongoose'),
 Schema = mongoose.Schema;
 /*bcrypt = require('bcrypt-nodejs');*/
 /*var usrSchema= new Schema({
 	name: String,
 	username: {type: String, required: true, index: {unique: true}},
 	password: {type:String , required: true, select: false}
 	
 });*/
var AssessmentSchema = new Schema ({
	Assessment_ID: {type: String, required:true, 
	index:{unique:true} },
	Facility_ID: { type: Number, required:true, 
			index:{unique:true} },
	Assessment_Term: { type: String, required:true , index:true } ,
	Date: Date,
	Survey:{type: String,required:true, index:true  },
	UserId: {type: String, required: true } ,
	Status: {type: String, required: true, index:true },
	PartID: Number,
	updated_at:{ type: Date,required:true},
	created_at:{ type: Date,required:true},
	Data:{}

}, { collection: 'assessments'});


/*PersonSchema.pre('save',function(next){
	var person = this;
	if(!person.isModified('password')) return next();
	bcrypt.hash(person.password,null,null,function(err,hash){
		if(err) return next(err);
		person.password = hash;
		next();
	});
});*/


/*PersonSchema.methods.comparePassword = function(password){
	var person = this;
	return bcrypt.compareSync(password, person.password);
};*/

module.exports = mongoose.model('Assessment', AssessmentSchema);
/*usrSchema.pre('save',function(next){
	var user= this;
	if (!user.isModified('password')) return next();
	bcrypt.hash(user.password, null, null, function(err,hash){
	if (err) return next(err);
	user.password=hash;
	next();
	})
});

usrSchema.methods.comparePassword= function(password){
	var user = this ;
	return bcrypt.compareSync(password, user.password);
};

module.exports = mongoose.model('Usr',usrSchema);*/