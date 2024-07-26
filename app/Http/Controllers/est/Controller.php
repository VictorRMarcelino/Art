<?php

namespace App\Http\Controllers\est;

use Illuminate\Http\Request;

class Controller{
    
    /**
     * @var Request
     */
    private $Requisicao;
    private $codigoRotina;
    private $codigoAcao;

    /**
     * Get the value of Requisicao
     *
     * @return  Request
     */ 
    public function getRequisicao(){
        return $this->Requisicao;
    }

    /**
     * Set the value of Requisicao
     *
     * @param  Request  $Requisicao
     */ 
    public function setRequisicao(Request $Requisicao){
        $this->Requisicao = $Requisicao;
    }

    /**
     * Get the value of codigoRotina
     */ 
    public function getCodigoRotina(){
        return $this->codigoRotina;
    }

    /**
     * Set the value of codigoRotina
     */ 
    public function setCodigoRotina($codigoRotina){
        $this->codigoRotina = $codigoRotina;
    }

    /**
     * Get the value of codigoAcao
     */ 
    public function getCodigoAcao(){
        return $this->codigoAcao;
    }

    /**
     * Set the value of codigoAcao
     */ 
    public function setCodigoAcao($codigoAcao){
        $this->codigoAcao = $codigoAcao;
    }

    /**
     * Inicia o processamento da requisição
     */
    public function processaDados(Request $oRequest){
        $this->setCodigoRotina($oRequest->input('rot'));
        $this->setCodigoAcao($oRequest->input('aca'));
    }
}
