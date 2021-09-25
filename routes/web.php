<?php

App::setLocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('projects', 'ProjectController')
      ->parameters(['portafolio' => 'project'])
      ->names('projects');  



Route::post('contact', 'MessageController@store')->name('messages.store');
Route::view('/contacto', 'contact')->name('contact');





Auth::routes();


