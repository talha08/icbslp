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

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/author/registration', 'AuthorRegistrationController@authorRegistration')->name('authorRegistration');
Route::post('/author/registration', 'AuthorRegistrationController@authorRegistrationSubmit')->name('authorRegistrationSubmit');

Route::get('/participant/registration', 'AuthorRegistrationController@participantRegistration')->name('participantRegistration');
Route::post('/participant/registration', 'AuthorRegistrationController@participantRegistrationSubmit')->name('participantRegistrationSubmit');




Route::get('/admin/authors', 'AdminController@authorPage')->name('admin.authors');
Route::get('/admin/participants', 'AdminController@participantPage')->name('admin.participants');
Route::get('/admin/authorDetails/{id}', 'AdminController@authorDetails')->name('admin.authorDetails');
Route::get('/admin/authorRegistrationDetails/{id}', 'AdminController@authorRegistrationDetails')->name('admin.authorRegistrationDetails');
