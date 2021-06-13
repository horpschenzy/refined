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
Route::get('/memberslogin', 'MemberController@memberslogin')->name('memberslogin');

Route::post('/admin/login', 'FrontendController@customlogin');
Route::post('/login', 'FrontendController@customlogin');
Route::post('/register', 'ApplicationController@store');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/apply', 'FrontendController@apply')->name('apply');
Route::get('/secret', 'FrontendController@secret')->name('secret');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/faq', 'FrontendController@faq')->name('faq');

//ADMIN
Route::get('/applicants', 'AdminController@applicants')->name('get.applicants');
Route::post('/assign/applicant/{id} ', 'AdminController@assignApplicants');
Route::post('/reset/password/{id} ', 'AdminController@resetPasswordApplicants');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/profile', 'AdminController@profile')->name('profile');
Route::get('/rejected', 'AdminController@rejected')->name('rejected');
Route::get('/users', 'AdminController@users')->name('admin.users');
Route::get('/approved', 'AdminController@approved')->name('approved');
Route::get('/pending', 'AdminController@pending')->name('pending');
Route::get('/livestream', 'AdminController@livestream')->name('livestream');
Route::post('/livestream', 'LivestreamController@store');
Route::get('/classroom', 'AdminController@classroom')->name('classroom');
Route::get('/classroom/{id}/{type}', 'AdminController@showClassroom');
Route::get('/resource', 'AdminController@resource')->name('resource');
Route::post('/resource', 'ResourceController@store');
Route::get('/attendance', 'AdminController@attendance')->name('attendance');
Route::get('/examandtest', 'ExamController@index')->name('examandtest');
Route::get('/results', 'ExamController@adminresults')->name('results');
Route::post('/delete', 'AdminController@delete');
Route::post('/reject', 'AdminController@reject');
Route::post('/accept', 'AdminController@accept');
Route::post('/pend', 'AdminController@pend');
Route::post('/delete/stream', 'LivestreamController@delete');
Route::post('/delete/user', 'AdminController@deleteUser');
Route::post('/edit/user/', 'AdminController@editUser');
Route::post('/end', 'LivestreamController@end');
Route::post('/start', 'LivestreamController@start');
Route::post('/pend', 'AdminController@pend');
Route::post('/logout', 'AdminController@logout')->name('logout');
Route::get('/classes', 'CourseController@index')->name('classes');
Route::post('/classes', 'CourseController@store');
Route::get('/ExamandTest', 'ExamController@index')->name('exam');
Route::get('/family', 'AdminController@family')->name('family');

Route::get('/addlesson', 'LessonController@index')->name('addlesson');
Route::get('/users', 'AdminController@users')->name('admin.users');
Route::get('/send-mail', 'AdminController@sendMail');
Route::post('/add/admin', 'AdminController@addAdmin');

Route::get('/markattendance', 'CourseController@attendance');
Route::post('/markattendance', 'CourseController@markAttendance');

Route::get('/assignment', 'AssignmentController@index')->name('assignment');
Route::get('/view/submissions/{id}', 'ApplicationAssignmentController@viewSubmissions');
Route::post('/mark/assignment/{id}', 'ApplicationAssignmentController@markAssignment');
Route::post('/assignment', 'AssignmentController@store');
Route::post('edit/assignment/{id}', 'AssignmentController@update');
Route::post('delete/assignment', 'AssignmentController@deleteAssignment');
Route::post('submit/assignment/{id}', 'ApplicationAssignmentController@store');
Route::get('solve/issue', 'AdminController@solveRegIssue');


//Member
Route::get('/member/dashboard', 'MemberController@index')->name('member.dashboard');
Route::get('/member/reject/{email_code}', 'MemberController@reject');
Route::get('/member/accept/{email_code}', 'MemberController@accept');
Route::post('/accept/admission/{email_code}', 'MemberController@acceptAdmission');
Route::post('/reject/admission/{email_code}', 'MemberController@rejectAdmission');
Route::get('/member/resource', 'MemberController@resource')->name('member.resources');
Route::get('/member/classroom', 'MemberController@classroom')->name('member.classroom');
Route::get('/member/classroom/{id}/{type}', 'MemberController@showClassroom');
Route::get('/member/courses', 'MemberController@course')->name('member.course');
Route::get('/member/examandtest', 'MemberController@examandtest')->name('member.examandtest');
Route::get('/member/settings', 'MemberController@settings')->name('member.settings');
Route::get('/member/profile', 'MemberController@profile')->name('member.profile');
Route::post('/edit/profile', 'MemberController@editProfile');
Route::post('/change/password', 'MemberController@changePassword');
Route::get('/member/results', 'ExamController@results')->name('member.results');
Route::get('/member/assignment', 'AssignmentController@memberAssignment')->name('member.assignment');

