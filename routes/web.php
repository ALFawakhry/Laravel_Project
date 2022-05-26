<?php

use App\Http\Controllers\testcontroller;
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


Route::get('/test' , [testcontroller::class , 'show']);

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/index_mayar', function () {
    return view('index_mayar');
});
Route::get('/index3', function () {
    return view('index3');
});
Route::get('/index4', function () {
    return view('index4');
});
Route::get('/index5', function () {
    return view('index5');
});
Route::get('/index6', function () {
    return view('index6');
});
Route::get('/index7', function () {
    return view('index7');
});
Route::get('/appointment', function () {
    return view('appointment');
});
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact','contactform')->name('contactform');
// Route::post('/send',[App\Http\Controllers\contactcontroller::class,'send'])->namespace('send.email');
Route::post('/send', 'App\Http\Controllers\contactcontroller@send')->name('send.email');