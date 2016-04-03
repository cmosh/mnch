<?php namespace App\Models;

use Moloquent;

class Field extends Moloquent {

	//
		public function field_set() {
        return $this->belongsTo('App\Models\Field_set','field_setID','field_setID');
    }
}
