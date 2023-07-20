<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function ()
{
    return view('Welcome');
});

route::get('Home',function(){
    return view('Home');
});
Route::get('/index', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/ProductsName', [PagesController::class, 'ProductsName']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');
Route::resource('ProductsName','ProductController'::class);
Route::resource('ProductsName', App\Http\Controllers\ProductController::class);
// Route::get('Home',[HomeController::class,'index']);
