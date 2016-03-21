<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Block_row extends Eloquent {

	// each Block_row has many column_sets
    public function column_sets() {
        return $this->hasMany('App\Tables\Column_set','block_rowID','block_rowID');
    }

    public function block() {
        return $this->belongsTo('App\Tables\Block','blockID','blockID');
    }

}
