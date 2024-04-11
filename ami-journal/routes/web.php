<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EditorController;

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

//Navbaron lévő routeok
Route::get('/', function () {
    return view('pages.welcome.index');
})->name('welcome.index');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/editor', [EditorController::class, 'index'])->name('editor.index');

/*Route::get('/articles', function () {
    return view('pages.articles.index');
})->name('articles'); */

Route::get('/about', function() {
    return view('pages.about.index');
})->name('about.index');


//Autentikáció
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('/admin', function() {
    return view('adminpanel.adminpanel');
});

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
});
Route::get('navbar', function () {
    return view('navbar')->middleware('accepted.reviewer');
});







