<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Telegram;

class TelegramController extends Controller
{
    public function index(){
    	$response = Telegram::getMe();

		$botId = $response->getId();
		$firstName = $response->getFirstName();
		$username = $response->getUsername();

		return $username;
    }
}
