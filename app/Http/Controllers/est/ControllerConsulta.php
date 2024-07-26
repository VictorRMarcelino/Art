<?php

namespace App\Http\Controllers\est;

use Illuminate\Http\Request;
use App\Http\Controller\est\Controller;

class ControllerConsulta extends Controller{

    /**
     * Realiza o processamento da consulta
     */
    public function processaDados(Request $oRequest){
        return view('glw.glw_view_manutencao_registrar_usuario');
    }
}
