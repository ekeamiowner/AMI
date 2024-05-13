<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\DeveloperTeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VolumeController;
use App\Http\Controllers\OpenArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('welcome.index');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/open-article', [OpenArticleController::class, 'openArticle'])->name('open-article');

Route::get('/about', function() {
    return view('pages.about.index');
})->name('about.index');

Route::get('/developers', [DeveloperTeamController::class, 'index']) -> name('developers.index');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/editor', [EditorController::class, 'index'])->name('editor.index');
    Route::put('/editor/update', [EditorController::class, 'update'])->name('editor.update');
    Route::post('/editor/download', [EditorController::class, 'download'])->name('editor.download');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('pages.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('pages.profile.partials.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('pages.profile.partials.password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('pages.profile.partials.destroy');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/volumes', [VolumeController::class, 'index'])->name('volumes.index');
    Route::get('/usermanagement', [UserController::class, 'index'])->name('usermanagement.index');
    Route::post('/usermanagement', [UserController::class, 'update'])->name('usermanagement.update');
    Route::post('/usermanagement/update', [UserController::class, 'update'])->name('usermanagement.update');
});

/* Route::get('/admin', function() {
    return view('adminpanel.adminpanel');
});
*/

Route::get('/volumes', 'VolumeController@index')->name('volumes.index');
Route::get('/volumes/create', 'VolumeController@create')->name('volumes.create');
Route::post('/volumes', 'VolumeController@store')->name('volumes.store');
Route::get('/volumes/{volume}/store', [VolumeController::class, 'storePage'])->name('volumes.storePage');
Route::put('/volumes/{volume}/updateArticles', [VolumeController::class, 'updateArticles'])->name('volumes.updateArticles');

require __DIR__.'/auth.php';
