<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChatMessageController extends Controller
{
    public function show()
    {
        App::setLocale('pt');

        echo 'Recuperado como json' . __('test message short') . '<br />';
        echo 'Recuperado como array: ' . __('messages.welcome');

        return view('messages');
    }

    public function index()
    {
        return Messages::all();
    }

    public function register(Request $request)
    {
        $request->validate([
            'message' => 'required|numeric|string'
        ]);

        $user = User::find($request->input('user_id'));

        $message = new Messages($request->all());
        $message->user()->associate($user);
        $message->save();

        return response(null, 201);
    }
}
