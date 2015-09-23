<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CacheController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	 public function __construct() {
        $this->middleware('auth');


    }



	public function redmin()
	{
		return view('cache.redmin');
		
	}


	public function memcached()
	{
		return view('cache.memcached');
	}



}
