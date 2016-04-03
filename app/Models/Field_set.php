<?php namespace App\Models;

use Moloquent;

class Field_set extends Moloquent {

	//

	// each Field_set has many fields
    public function fields() {
        return $this->hasMany('App\Models\Field','field_setID','field_setID');
    }

     public function field() {
        return $this->hasOne('App\Models\Field','field_setID','field_setID');
    }

    // each Field_set has many columnsets
    public function column_sets() {
        return $this->hasMany('App\Models\Block','field_setID','field_setID');
    }

}
