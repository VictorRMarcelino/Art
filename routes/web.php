<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\est\Controller;

Route::get('/art', [Controller::class, 'processaFormulario']);
Route::post('/art', [Controller::class, 'processaFormulario']);
