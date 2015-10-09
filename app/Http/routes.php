<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::Resource('flyers', 'FlyersController');