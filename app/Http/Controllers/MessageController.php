<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewReact;

class MessageController extends Controller
{
    public function send(Request $message)
    {
        event(new NewReact($message['message']));
    }

    public function streamer(Request $message)
    {
        return view('welcome');
    }

    public function alert(Request $message)
    {
        return view('alert');
    }
}
