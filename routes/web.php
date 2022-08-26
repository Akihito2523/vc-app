<?php

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

Route::get('/', function () {
    return view('welcome');
});

//ルーティングから直接Viewに表示
// Route:::Httpメソッド(URI, ACTION);
Route::get('/route/hello', function () {
    return '<h1>Hello from ROute!';
});

//viewを表示
Route::get('view/hello', function () {
    return view('message.hello');
});

//変数を直接渡す
Route::get('view/var', function () {
    $Variable = 'Ello from ウェブ.php';
    return view('message.var', ['variable' => $Variable]);
});

//URLを渡す
Route::get('view/word/{msg}', function ($msg) {
    return view('message.word', ['msg' => $msg]);
});

//URLを複数渡す
Route::get('view/word/{name}/{msg}', function ($name, $msg) {
    return view('message.word2', [
        'name' => $name,
        'msg' => $msg
    ]);
});

//コントローラーからViewを表示
Route::get('controller/hello', [App\http\Controllers\MessageController::class, 'hello']);

Route::get('controller/var', [App\http\Controllers\MessageController::class, 'var']);

//URLパラメーターは{}に入れ、受け取った値はコントローラーに渡される
Route::get('controller/word/{msg}', [App\http\Controllers\MessageController::class, 'word']);

Route::get('controller/word2/{name}/{msg}', [App\http\Controllers\MessageController::class, 'word2']);
