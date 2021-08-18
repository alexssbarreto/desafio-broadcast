<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index()
    {
        return view('messages');
    }

    public function list()
    {
        return Messages::all();
    }

    public function register(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $user = User::find($request->input('user_id'));

        $message = new Messages($request->all());

        $message->user()->associate($user);
        $message->save();

        return response(null, 201);
    }
}
