<?php

use App\Http\Controllers\ChatMessageController;
use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Broadcast::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);
Route::get('/test/store', [TestController::class, 'store']);
Route::get('/test/notification', [TestController::class, 'notification']);
Route::get('/test/channel', [TestController::class, 'channel']);

Route::get('/chat', [ChatMessageController::class, 'show']);

Route::get('/users', function () {
    return response(User::get(), 200);
});

Route::get('/messages', [ChatMessageController::class, 'index']);
Route::post('/messages', [ChatMessageController::class, 'register']);
