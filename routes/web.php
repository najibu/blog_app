<?php

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

Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');

// Tickets routes
Route::get('contact', 'TicketsController@create');
Route::post('contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');

// Sending email routes
Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('ns.najibu@gmail.com', 'Learning Laravel');

        $message->to('ns.najibu@gmail.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";
});

// Comments
Route::post('/comment', 'CommentsController@newComment');

//Auth 
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');

//Admin 
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function(){
  Route::get('users', ['as' => 'admin.user.index', 'uses' => 'UsersController@index']);
  Route::get('roles', 'RolesController@index');
  Route::get('roles/create', 'RolesController@create');
  Route::post('roles/create', 'RolesController@store');
});