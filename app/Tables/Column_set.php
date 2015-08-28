<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Column_set extends Model {

	public function block_row() {
        return $this->belongsTo('App\Tables\Block_row','block_rowID','block_rowID');
    }
    public function field_set() {
        return $this->belongsTo('App\Tables\Field_set','field_setID','field_setID');
    }
   
}
