<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request){
//        dd($request);
        $message = new Message();
        $message->message = $request->message;
        $message->user_id = $request->user_id;
        $message->save();
        return redirect()->back()->with;
    }
}
