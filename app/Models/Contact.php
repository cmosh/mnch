<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class Contact extends Moloquent {
use SyncsWithFirebase;



	 public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}

}
