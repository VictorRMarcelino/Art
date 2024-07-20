<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\est\ControllerConsulta;

Route::get('/rot={iRot}/aca={iAcao}', [ControllerConsulta::class, 'processaDados']);

Route::post('/rot={rot}/aca={acao}', function() {

});
