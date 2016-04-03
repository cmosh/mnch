<?php namespace App\Models;

use Moloquent;

class Block extends Moloquent {

	// each Block has many block_rows
    public function block_rows() {
        return $this->hasMany('App\Models\Block_row','blockID','blockID');
    }

     public function section() {
        return $this->belongsTo('App\Models\Section','sectionID','sectionID');
    }

}
