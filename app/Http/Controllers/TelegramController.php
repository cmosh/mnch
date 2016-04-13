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
    return $response = Telegram::setWebhook(['url' => 'https://41.89.6.209/MNCH/'.config('telegram.bot_token').'/webhook']);
    }

    public function send($message){
    	  Telegram::sendMessage([
  'chat_id' => 'CHAT_ID', 
  'text' => $message
		]);
    }
    public function webhook(){

   $updates = Telegram::getWebhookUpdates();

   Telegram::sendMessage([
  'chat_id' => 'CHAT_ID', 
  'text' => 'Hello World'
		]);

		$messageId = $response->getMessageId();
    }
}
