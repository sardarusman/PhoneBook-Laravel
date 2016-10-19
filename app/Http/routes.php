<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ContactController@home');
 
Route::auth();

Route::group(['middleware'=> 'auth'], function () {
   
    Route::get('contacts', 'ContactController@index'); // List All Contacts

    Route::get('contacts/add', 'ContactController@add'); // List All Contacts

    Route::post('contacts/create', 'ContactController@store'); // Store Contacts

    Route::post('contacts/update/{id}', 'ContactController@update'); // update contacts record

    Route::get('contacts/delete/{id}', 'ContactController@delete');
});
