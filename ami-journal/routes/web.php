<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\SubmissionCreateController;

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
    return view('pages.welcome');
});
Route::get('/login',function () {
    return view('login.login');
});
Route::get('/admin', function() {
    return view('adminpanel.adminpanel');
});
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::get('/home', [HomeController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/about', function() {
    return view('pages.about');
});
Route::get('/register', function () {
    return view('register.register');
})->name('register');

Route::get('/submissions', function () {
    return view('pages.submissions');
});
Route::get('/submissions/create', function () {
    return view('pages.submissionscreate');
});

