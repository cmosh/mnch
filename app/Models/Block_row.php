<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;

class Block_row extends Moloquent {
use SyncsWithFirebase;

protected $collection ="block_rows";
	// each Block_row has many column_sets
    public function column_sets() {
        return $this->hasMany('App\Models\Column_set','block_rowID','block_rowID');
    }

    public function block() {
        return $this->belongsTo('App\Models\Block','blockID','blockID');
    }

    public function collection()
        {
             return $this->collection;
        }
}
