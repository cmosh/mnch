<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Moloquent;
use Carbon\Carbon;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Moloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {

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
        $MarchDate = Carbon::createFromDate(2016, 3, 3, 'America/Toronto');
        return $query->where('status',1)->where('role','<',2)->where('created_at','>=',$MarchDate);
                     
     }

     public function assessments() {
        return $this->hasMany('App\Models\Assessments','UserId','id')
        			->where('Status','Submitted');
    }

    public function assessmentsT(){
    	return $this->hasMany('App\Models\Assessments','UserId','id')
    				->where('Status','Submitted')
    				->where('updated_at', '>=', Carbon::today());
    }

     public function assessmentsY(){
        return $this->hasMany('App\Models\Assessments','UserId','id')
                    ->where('Status','Submitted')
                    ->where('updated_at', '>=', Carbon::today()-1);
    }

     public function assessmentsJ(){
        return $this->hasMany('App\Models\Assessments','UserId','id')
                    ->where('Status','Submitted')
                    ->where('updated_at', '>=', Carbon::today()-2);
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
