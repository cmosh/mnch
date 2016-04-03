<?php namespace App\Models;

use Moloquent;

class Block_row extends Moloquent {

	// each Block_row has many column_sets
    public function column_sets() {
        return $this->hasMany('App\Models\Column_set','block_rowID','block_rowID');
    }

    public function block() {
        return $this->belongsTo('App\Models\Block','blockID','blockID');
    }

}
