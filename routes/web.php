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
Route::get('/success', 'FrontendController@success')->name('success');
Route::get('/login', 'FrontendController@login')->name('login');
Route::post('/admin/login', 'FrontendController@customlogin');
Route::post('/register', 'ApplicationController@store');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/apply', 'FrontendController@apply')->name('apply');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/faq', 'FrontendController@faq')->name('faq');

//ADMIN
Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/rejected', 'AdminController@rejected')->name('rejected');
Route::get('/approved', 'AdminController@approved')->name('approved');
Route::get('/pending', 'AdminController@pending')->name('pending');
Route::post('/logout', 'AdminController@logout')->name('logout');
Route::get('/course', 'CourseController@index')->name('course');
Route::get('/ExamandTest', 'ExamController@index')->name('exam');

Route::get('/addlesson', 'LessonController@index')->name('addlesson');

