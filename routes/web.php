<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

//facebook login
Route::get('facebook/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('facebook.login');

Route::get('facebook/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
})->name('facebook.callback');

//google login
Route::get('google/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('google/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
})->name('google.callback');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//
Route::get('login','HomeController@index')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('/{any}', 'HomeController@index')->where('any', '.*');


