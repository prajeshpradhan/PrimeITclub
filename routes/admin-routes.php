<?php

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', 'AdminController@index')->name('dashboard');


    //Events Routes
    Route::resource('events', 'EventController');

    //Company Routes
    Route::resource('companies', 'CompanyController');
});
