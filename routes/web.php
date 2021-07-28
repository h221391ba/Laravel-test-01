<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
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


//攜帶參數的方法
// Route::get('/{name}', function ($name) {
//     return view('welcome', ['name' => $name]);
// });

//轉到其他路由
// Route::get('/', function () {
//     return view('welcome');


    // 導去指定頁面
    // return redirect('contact');
// });

//路由切換頁面的方式 完整寫法
Route::get('/contact', function () {
    return view('contact');
});

//路由切換頁面的方式 簡易寫法 ('url', 'file name')
Route::view('/hello', 'hello');

Route::get('/', [ProductListController::class, 'index']);

// Route::get('/productList', 'App\Http\Controllers\ProductListController@index');
