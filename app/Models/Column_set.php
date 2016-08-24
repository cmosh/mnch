<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;

class Column_set extends Moloquent {
use SyncsWithFirebase;

protected $collection ="column_sets";

	public function block_row() {
        return $this->belongsTo('App\Models\Block_row','block_rowID','block_rowID');
    }
    public function field_set() {
        return $this->belongsTo('App\Models\Field_set','field_setID','field_setID');
    }

    public function collection()
        {
             return $this->collection;
        }
   
}
