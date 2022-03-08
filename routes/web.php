<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news', [NewsController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/support', [SupportController::class, 'index']);

Route::get('/knowledge', [KnowledgeController::class, 'index']);

Route::get('/solutions', [SolutionsController::class, 'index']);

Route::get('/calendar', [CalendarController::class, 'index']);

Route::get('/contacts', [ContactsController::class, 'index']);
