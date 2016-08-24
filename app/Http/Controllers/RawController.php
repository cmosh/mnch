<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Node;
	
class RawController extends Controller {

		public function index(){
			return view('analytics.raw.index');
		}	  
		
}
