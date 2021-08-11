<?php

namespace App\Http\Controllers;

use App\Events\ChatMessage;
use App\Models\Messages;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index(Messages $message)
    {
        return view('messages');
    }

    public function list(Messages $message)
    {
        return $message->get();
    }

    public function register(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        Messages::create($request->all());

        return response(null, 201);
    }
}
