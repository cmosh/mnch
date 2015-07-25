<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Column_set extends Model {

	public function block_row() {
        return $this->belongsTo('App\Block_row','block_rowID','block_rowID');
    }
    public function field_set() {
        return $this->belongsTo('App\Field_set','field_setID','field_setID');
    }
}
