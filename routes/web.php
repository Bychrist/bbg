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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'PageController@About')->name('About');

Route::get('/events', 'PageController@Event')->name('Event');
Route::get('/member/login', 'PageController@MemberLogin')->name('MemberLogin');
Route::get('/news', 'PageController@News')->name('News');
Route::get('/contact', 'PageController@Contact')->name('Contact');
Route::get('/membership','PageController@Membership')->name('Membership');

Auth::routes();


// =====================admin routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('view/events', 'EventController@index');

//=======================admin routes
