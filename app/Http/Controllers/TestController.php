<?php

namespace App\Http\Controllers;

use App\Events\ChatReceveid;
use App\Models\User;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;

class TestController
{
    public function index()
    {
        $user = User::find(1);
        
        return $user;
    }

    public function store()
    {
        User::create([
            'name' => 'Admin',
            'password' => '123456',
            'email' => 'alex1@peepi.com.br'
        ]);
    }

    public function notification(Request $request)
    {
        return view('index');
    }

    public function channel(Request $request)
    {
        event(new ChatReceveid('sending message test'));
    }
}