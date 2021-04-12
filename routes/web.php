<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', 'FrontendController@landing')->name('first');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Frontend
Route::get('/login', 'FrontendController@register')->name('login');
Route::post('/register', 'ApplicationController@store');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/apply', 'FrontendController@apply')->name('apply');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/faq', 'FrontendController@faq')->name('faq');
