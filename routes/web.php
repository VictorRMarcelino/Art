<?php

use Illuminate\Support\Facades\Route;

Route::get('/rot={iRot}/aca={iAcao}', function ($iRot, $iAca) {
    return view('glw/glw_view_manutencao_registrar');
});

Route::post('/rot={rot}/aca={acao}', function() {

});
