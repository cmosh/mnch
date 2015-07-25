<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model {

	// each Block has many block_rows
    public function block_rows() {
        return $this->hasMany('App\Block_row','blockID','blockID');
    }

     public function section() {
        return $this->belongsTo('App\Section','sectionID','sectionID');
    }

}
