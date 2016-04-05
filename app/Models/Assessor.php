<?php namespace App\Models;

use Moloquent;

class Assessor extends Moloquent {

	protected $collection = 'assessors';
	 public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}

}
