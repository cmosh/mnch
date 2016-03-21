<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Field extends Eloquent {

	//
		public function field_set() {
        return $this->belongsTo('App\Tables\Field_set','field_setID','field_setID');
    }
}
