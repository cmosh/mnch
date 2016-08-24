<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Node;
	
class NodeController extends Controller {		

		public function startnode() {
		return	Node::start();
		}

		public function stopnode() {
		return	Node::stop();
		}

		public function restartnode(){
		return Node::restart();
		}
		
}
