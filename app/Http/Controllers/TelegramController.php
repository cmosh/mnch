<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Telegram;
use Session;

class TelegramController extends Controller
{
    public function index(request $request){
    return	Session::all();
		
    }

    public function hook(){
    return $response = Telegram::setWebhook(['url' => 'http://41.89.6.209/MNCH/telegram/'.config('telegram.bot_token').'/webhook']);
    }
}
