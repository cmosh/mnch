<?php namespace App\Models;

use Moloquent;

class Column_set extends Moloquent {

	public function block_row() {
        return $this->belongsTo('App\Models\Block_row','block_rowID','block_rowID');
    }
    public function field_set() {
        return $this->belongsTo('App\Models\Field_set','field_setID','field_setID');
    }
   
}
