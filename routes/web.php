<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
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

Route::get('/page/index/landingpage',[Pagecontroller::class,'home'])->name('home');
Route::get('/product/service',[Pagecontroller::class,'product'])->name('product');
Route::get('/teams',[Pagecontroller::class,'team'])->name('team');
Route::get('/about',[Pagecontroller::class,'about'])->name('aboutus');
Route::get('/contact',[Pagecontroller::class,'contact'])->name('contactus');