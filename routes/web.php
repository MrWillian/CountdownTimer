<?php

Route::resource('/event', 'EventController');

Route::get('/', 'EventController@index');
