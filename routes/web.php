<?php

use App\Http\Controllers\GoogleChatController;
use Illuminate\Support\Facades\Route;

Route::get('google-chat/send/', [GoogleChatController::class, 'send']);
