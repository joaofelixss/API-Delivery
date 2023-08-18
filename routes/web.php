<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id}', function ($id) {
    return view('contato', ['id'=> $id]);
});
