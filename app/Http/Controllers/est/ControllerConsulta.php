<?php

namespace App\Http\Controllers\est;

use Illuminate\Http\Request;
use App\Http\Controller\est\Controller;

abstract class ControllerConsulta extends Controller{

    private $dadosRetorno = [];

    /**
     * Get the value of dadosRetorno
     */ 
    public function getDadosRetorno(){
        return $this->dadosRetorno;
    }

    /**
     * Set the value of dadosRetorno
     */ 
    public function setDadosRetorno($dadosRetorno){
        $this->dadosRetorno = $dadosRetorno;
    }

    public function adicionaDadoRetorno($sDados, $xValor){
        $this->dadosRetorno[$sDado] = $xValor;
    }

    protected function beforeCarregaView(){}

    /**
     * Realiza o processamento da consulta
     */
    public function processaDados(){
        $this->beforeCarregaView();
        return view($this->getFormulario()->getModulo()->getSigla() . '.' . $this->getFormulario()->getInclude(), $this->getDadosRetorno());
    }
}
