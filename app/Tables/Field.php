<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Field extends Model {

	//
		public function field_set() {
        return $this->belongsTo('App\Field_set','field_setID','field_setID');
    }
}
