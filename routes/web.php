<?php

use App\Http\Controllers\DonutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DonutController::class, 'index']);

Route::get('/contato/{id?}', function ($id = null) {
    return view('contato', ['id'=> $id]);
});
