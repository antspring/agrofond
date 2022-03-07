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
    return view('pages.index');
})->name('home');

Route::get('/news', function(){
    return view('pages.news');
});

Route::get('/services', function(){
    return view('pages.services');
});

Route::get('/support', function(){
    return view('pages.support');
});

Route::get('/knowledge', function(){
    return view('pages.knowledge');
});

Route::get('/solutions', function(){
    return view('pages.solutions');
});

Route::get('/calendar', function(){
    return view('pages.calendar');
});

Route::get('/contacts', function(){
    return view('pages.contacts');
});
