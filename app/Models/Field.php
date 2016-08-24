<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class Field extends Moloquent {
use SyncsWithFirebase;
protected $collection ="fields";

	//
		public function field_set() {
        return $this->belongsTo('App\Models\Field_set','field_setID','field_setID');
    }

    public function collection()
        {
             return $this->collection;
        }
}
