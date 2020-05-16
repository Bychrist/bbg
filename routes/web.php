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

// ============== event
Route::get('/event', 'PageController@Event');
Route::get('view/event/{id}',  'PageController@EventShow');

//


Route::get('/member/login', 'PageController@MemberLogin')->name('MemberLogin');
Route::get('/news', 'PageController@News')->name('News');
Route::get('/contact', 'PageController@Contact')->name('Contact');
Route::get('/membership','PageController@Membership')->name('Membership');

Auth::routes();


// =====================admin routes

/* the event routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('view/events', 'EventController@index');
Route::get('create/event', 'EventController@create');
Route::post('store/event', 'EventController@store' );
Route::get('edit/event/{id}', 'EventController@edit' );
Route::post('update/event/{id}', 'EventController@update' );
Route::get('delete/event/{id}', 'EventController@destroy' );
/* the event routes */









//=======================admin routes
