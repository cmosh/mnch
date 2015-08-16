<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Datarecord extends Model {
	

	//

	protected $table='datarecords';

	public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}

}
