<?php

namespace App\Http\Controllers;

use GuyWarner\GoogleChatAlerts\Facades\GoogleChatAlert;

class GoogleChatController extends Controller 
{
    public function send() 
    {
        GoogleChatAlert::message("您好， 歡迎光臨。");
    }
}