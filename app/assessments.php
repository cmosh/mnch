<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class assessments extends Model  {

	//
	protected $table='assessments';

	 public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}

}