<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ForgotPasswordController;


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

Route::get('/about', function () {
    return view('about-welcome');
});

Route::get('/contact', function () {
    return view('contact-welcome');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/follow', function () {
    return view('follow');
})->name('follow')->middleware('auth');


Route::get('/add-video',[VideoController::class,'addVideo']);
Route::post('/add-video',[VideoController::class,'addVideoSubmit'])->name('video.addsubmit');

Route::get('/list-video-welcome-invest',[VideoController::class,'showVideoWelcomeInvest']);
Route::get('/list-video-welcome-budget',[VideoController::class,'showVideoWelcomeBudget']);
Route::get('/list-video-welcome-money',[VideoController::class,'showVideoWelcomeMoney']);
Route::get('/list-video-welcome-play',[VideoController::class,'showVideoWelcomePlay']);

Route::get('/list-video-home-invest',[VideoController::class,'showVideoHomeInvest'])->middleware('auth');
Route::get('/list-video-home-budget',[VideoController::class,'showVideoHomeBudget'])->middleware('auth');
Route::get('/list-video-home-money',[VideoController::class,'showVideoHomeMoney'])->middleware('auth');
Route::get('/list-video-home-play',[VideoController::class,'showVideoHomePlay'])->middleware('auth');


Route::get('/list-video/{id}',[VideoController::class,'showDataVideo'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/about-home', [App\Http\Controllers\HomeController::class, 'index2'])->name('about-home')->middleware('auth');
Route::get('/contact-home', [App\Http\Controllers\HomeController::class, 'index3'])->name('contact-home')->middleware('auth');

Route::get('/modif-user/{id}', [App\Http\Controllers\UserController::class, 'editUser'])->middleware('auth');
Route::post('/Home', [App\Http\Controllers\UserController::class, 'updateUser'])->name('user.update')->middleware('auth');

Route::get('/modif-pass/{id}', [App\Http\Controllers\UserController::class, 'editUserPass'])->name('home')->middleware('auth');
Route::post('/home', [App\Http\Controllers\UserController::class, 'updateUserPass'])->name('user.updatePass')->middleware('auth');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
