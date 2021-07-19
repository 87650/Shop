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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/main', [App\Http\Controllers\Main::class, 'index'])->name('main');
Route::get('/main/json', [App\Http\Controllers\Main::class, 'categories_get']);
Route::post('/main/set', [App\Http\Controllers\Main::class, 'categories_set']);
Route::get('/goods/create', [App\Http\Controllers\Goods::class, 'create_view'])->name('goods');
Route::post('/goods/create/json', [App\Http\Controllers\Goods::class, 'create']);