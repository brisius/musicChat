<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatEvent;

class ChatController extends Controller
{
    public function chat(){
        return view('chat');
    }
    public function send(request $request){
        //return $request->all();
        $user = User::find(Auth::id());
        event(new ChatEvent($request->message,$user));
    }
   /* public function send(){
        $message='hello';
        $user = User::find(Auth::id());
        event(new ChatEvent($message,$user));
    }*/
}
