<?php

namespace App\Http\Controllers\est;

use Illuminate\Http\Request;
use App\Models\Enum\est\EnumAcao;
use App\Models\est\ModelFormulario;
use App\Models\est\ModelAcao;

abstract class Controller{
    
    /**
     * @var Request
     */
    private $Requisicao;

    /**
     * @var ModelFormulario
     */
    private $Formulario;

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
     * Get the value of Formulario
     *
     * @return  ModelFormulario
     */ 
    public function getFormulario(){
        return $this->Formulario;
    }

    /**
     * Set the value of Formulario
     *
     * @param  ModelFormulario  $Formulario
     */ 
    public function setFormulario(ModelFormulario $Formulario){
        $this->Formulario = $Formulario;
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

    public function processaFormulario(){
        $this->setCodigoRotina($oRequest->input('rot'));
        $this->setCodigoAcao($oRequest->input('aca'));
        
        if ($this->loadFormulario()) {
            $this->processaDados();
        }
        
    }

    /**
     * Inicia o processamento da requisição
     */
    abstract public function processaDados(Request $oRequest);

    /**
     * Carrega o formulário com base na rotina e ação recebidas por parâmetro
     */
    private function loadFormulario(){
        $oAcao = ModelAcao::where('id', $this->getCodigoAcao())->firstOrFail();

        if($oAcao){
            $oFormulario = ModelFormulario::where(['id', ]);
        }
    }
}
