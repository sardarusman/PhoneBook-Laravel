<?php



Route::get('/', 'ContactController@home');
 
Route::auth();

Route::group(['middleware'=> 'auth'], function () {
   
    Route::get('contacts', 'ContactController@index'); // List All Contacts

    Route::get('contacts/add', 'ContactController@add'); // List All Contacts

    Route::post('contacts/create', 'ContactController@store'); // Store Contacts

    Route::get('contacts/edit/{id}', 'ContactController@edit'); // edit contacts record

    Route::post('contacts/update/{id}', 'ContactController@update'); // update contacts record

    Route::get('contacts/delete/{id}', 'ContactController@delete');
});
