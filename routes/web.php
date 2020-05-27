<?php

Route::get('/event', function () {
    return view('event.index');
});

Route::get('/home', function () {
    return view('event.register');
});
