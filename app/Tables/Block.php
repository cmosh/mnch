<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Block extends Model {

	// each Block has many block_rows
    public function block_rows() {
        return $this->hasMany('App\Tables\Block_row','blockID','blockID');
    }

     public function section() {
        return $this->belongsTo('App\Tables\Section','sectionID','sectionID');
    }

}
