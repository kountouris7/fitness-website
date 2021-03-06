<?php


Route::get('/', 'ViewsController@welcome')->name('home');

Route::get('/classes', 'ViewsController@classes');

Route::get('/personaltraining', 'ViewsController@personal');

Route::get('/gallery', 'ViewsController@gallery');

Route::get('/booklesson', 'BookLessonController@booklesson');

Route::post('/booklesson', 'BookLessonController@store')->name('booklesson');

Route::get('/subscribe', 'RegistrationController@subscribe')->name('subscribe');

Route::post('/subscribe', 'RegistrationController@store');

Route::get('/sign','SignController@sign')->name('sign');

Route::post('/sign', 'SignController@store');

Route::get('/logout', 'SignController@destroy')->name('logout');





