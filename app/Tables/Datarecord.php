<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Datarecord extends Eloquent {
	

	//

	protected $collection='datarecords';

	public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}

}
