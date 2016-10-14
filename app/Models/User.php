<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Moloquent;
use Carbon\Carbon;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Mpociot\Firebase\SyncsWithFirebase;
class User extends Moloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {
    use SyncsWithFirebase;


	use Authenticatable, Authorizable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $collection = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password','county','PhoneNumber','IDNumber','role','status'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function collection()
        {
             return $this->collection;
        }
        
	public function scopeNonAdmins($query)
     {

     	return $query->where('role','<',4);
     				 
     }

     public function scopeActive($query)
     {

     	return $query->where('status',1);
     				 
     }

     public function scopeTrack($query)
     {
        $MarchDate = Carbon::createFromDate(2016, 3, 3, 'Africa/Nairobi');
        return $query->where('status',1)->where('role','<',2)->where('created_at','>=',$MarchDate);
                     
     }

     public function assessments() {
        return $this->hasMany('App\Models\Assessments','UserId','id')
        			->where('Status','Submitted');
    }

    public function gt_kajiado() {
        return $this->hasMany('App\Models\Assessments','UserId','id')
                    ->where('Status','Submitted')
                    ->where('Assessment_Term','Endterm');        
    }

    public function assessmentsT(){
        $today = Carbon::today()->startOfDay();
        $evening = Carbon::today()->endOfDay();        
    	return $this->hasMany('App\Models\Assessments','UserId','id')
    				->where('Status','Submitted')
                    ->where('updated_at', '>=', $today)
    				->where('updated_at', '<', $evening);
    }

     public function assessmentsY(){        
        $yesterday_morning = Carbon::today()->subDay()->startOfDay();          
        $yesterday_evening = Carbon::today()->subDay()->endOfDay();          
        return $this->hasMany('App\Models\Assessments','UserId','id')
                    ->where('Status','Submitted')
                    ->where('updated_at','<',$yesterday_evening)
                    ->where('updated_at', '>=',$yesterday_morning);
    }

    public function assessmentsJ(){
        $yesterday_morning = Carbon::today()->subDay();          
        $two_days_ago_morning = Carbon::today()->subDay(2);   
        return $this->hasMany('App\Models\Assessments','UserId','id')
                    ->where('Status','Submitted')
                    ->where('updated_at','<',$yesterday_morning)
                    ->where('updated_at', '>=', $two_days_ago_morning);
    }

    public function assessmentsP(){
        $two_days_ago_morning = Carbon::today()->subDay(2);          
        $three_days_ago_morning = Carbon::today()->subDay(3);   
        return $this->hasMany('App\Models\Assessments','UserId','id')
                    ->where('Status','Submitted')
                    ->where('updated_at','<',$two_days_ago_morning)
                    ->where('updated_at', '>=', $three_days_ago_morning);
    }


	 public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}


}
