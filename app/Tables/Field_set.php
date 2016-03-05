<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Field_set extends Eloquent {

	//

	// each Field_set has many fields
    public function fields() {
        return $this->hasMany('App\Tables\Field','field_setID','field_setID');
    }

     public function field() {
        return $this->hasOne('App\Tables\Field','field_setID','field_setID');
    }

    // each Field_set has many columnsets
    public function column_sets() {
        return $this->hasMany('App\Tables\Block','field_setID','field_setID');
    }

}
