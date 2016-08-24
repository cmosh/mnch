<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;

class Block extends Moloquent {

use SyncsWithFirebase;


	// each Block has many block_rows
    public function block_rows() {
        return $this->hasMany('App\Models\Block_row','blockID','blockID');
    }

     public function section() {
        return $this->belongsTo('App\Models\Section','sectionID','sectionID');
    }

    public function collection()
        {
             return $this->collection;
        }

}
