<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\est\Controller;

Route::get('/art', [Controller::class, 'processaDados']);
Route::post('/art', [Controller::class, 'processaDados']);
