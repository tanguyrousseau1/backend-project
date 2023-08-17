<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;

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

Route::get('/contact', [Controllers\ContactController::class, 'getContact']);

Route::get('/profile', [Controllers\UserController::class, 'getProfile']);

Route::get('/faq', [Controllers\FAQController::class, 'getQuestions']);

Route::get('/', function () {
    $news = DB::table('news')->get();

    return view('index', ['news' => $news]);
});
