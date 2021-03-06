<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events\ChatEvent;
use Illuminate\Support\Facades\Auth;



class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chat () {
        return view('chat');
    }
    public function send (Request $request) {
        $user = User::find(Auth::id());
        event(new ChatEvent($request->message, $user));

        return $request->all();
    }
//    public function send () {
//        $user = User::find(Auth::id());
//        $message='yasssa send';
//        event(new ChatEvent($message, $user));
//    }
}
