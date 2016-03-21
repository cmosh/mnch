<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Block extends Eloquent {

	// each Block has many block_rows
    public function block_rows() {
        return $this->hasMany('App\Tables\Block_row','blockID','blockID');
    }

     public function section() {
        return $this->belongsTo('App\Tables\Section','sectionID','sectionID');
    }

}
