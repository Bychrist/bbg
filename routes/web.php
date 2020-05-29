<?php

use Illuminate\Support\Facades\Route;


Auth::routes(['verify' => true]);

// =============== Page routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', 'PageController@About')->name('About');
Route::get('/event', 'PageController@Event');
Route::get('view/event/{id}',  'PageController@EventShow');
Route::get('/news', 'PageController@News')->name('News');
Route::get('/contact', 'PageController@Contact')->name('Contact');
Route::get('/membership','PageController@Membership')->name('Membership');
//================== end page routes



// =====================admin routes
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['Admin'])->group(function () {

/* the event routes */
    Route::get('view/events', 'Admin\EventController@index');
    Route::get('create/event', 'Admin\EventController@create');
    Route::post('store/event', 'Admin\EventController@store' );
    Route::get('edit/event/{id}', 'Admin\EventController@edit' );
    Route::post('update/event/{id}', 'Admin\EventController@update' );
    Route::get('delete/event/{id}', 'Admin\EventController@destroy' );
 /* the event routes */ 
 
 

/* the members routes */
    Route::get('view/members', 'Admin\MemberController@index');
/* the end of members routes */


/* the profile routes */

Route::get('admin/view/profile/{id}', 'Admin\ProfileController@show');


/*  the end of profile routes */


});


//=====================end admin routes



//================== user routes

Route::middleware(['User'])->group(function () {

   Route::get('profile-update', 'users\ProfileController@UpdateProfile');
   Route::post('create/profile', 'users\ProfileController@CreateProfile');
   Route::get('view/profile', 'users\ProfileController@ViewProfile');
   Route::get('user/create-news', 'users\NewsController@CreateNews');
   Route::post('create/news/article', 'users\NewsController@StoreNews');
   Route::get('view/news/article', 'users\NewsController@ViewNews');
   Route::get('update/article/{id}', 'users\NewsController@UpdateNews');
   Route::post('update/news/article/{id}','users\NewsController@UpdateNewsArticle');
   Route::get('delete/article/{id}', 'users\NewsController@DeleteNewsArticle');

});


//end user routes
