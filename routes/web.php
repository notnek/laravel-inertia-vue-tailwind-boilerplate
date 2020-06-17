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

Route::get('login')->name('login')->uses('Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login')->name('login.attempt')->uses('Auth\LoginController@login')->middleware('guest');
Route::post('logout')->name('logout')->uses('Auth\LoginController@logout');

Route::get('register')->name('register')->uses('Auth\RegisterController@showRegistrationForm')->middleware('guest');
Route::post('register')->name('register.attempt')->uses('Auth\RegisterController@register')->middleware('guest');

Route::get('forgot-password')->name('password.request')->uses('Auth\ForgotPasswordController@showLinkRequestForm')->middleware('guest');
Route::post('forgot-password')->name('password.email')->uses('Auth\ForgotPasswordController@sendResetLinkEmail')->middleware('guest');
Route::get('reset-passsword/{token}')->name('password.reset')->uses('Auth\ResetPasswordController@showResetForm')->middleware('guest');
Route::post('reset-password')->name('password.update')->uses('Auth\ResetPasswordController@reset')->middleware('guest');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/', 'HomeController');
