<?php

namespace App\Http\Controllers\est;

use Illuminate\Http\Request;
use App\Models\Enum\est\EnumAcao;
use App\Models\est\ModelFormulario;
use App\Models\est\ModelAcao;

class Controller{
    
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
        return $this->getFormulario()->getId();
    }

    /**
     * Get the value of codigoAcao
     */ 
    public function getCodigoAcao(){
        return $this->getFormulario()->getAcao();
    }

    public function processaFormulario(Request $oRequest){
        if ($this->loadFormulario($oRequest)) {
            $sController = 'App\\Http\\Controllers\\' . $this->getFormulario()->getModulo()->getSigla() . '\\' . $this->getFormulario()->getController();
            $oController = new $sController();
            $oController->setRequisicao($oRequest);
            $oController->setFormulario($this->getFormulario());
            return $oController->processaDados();
        }
        
    }

    /**
     * Inicia o processamento da requisição
     */
    public function processaDados(){}

    /**
     * Carrega o formulário com base na rotina e ação recebidas por parâmetro
     */
    private function loadFormulario($oRequest){
        $oFormulario = ModelFormulario::findOrFail($oRequest->input('rot'));
        if($oFormulario){
            $this->setFormulario($oFormulario);
            return true;
        }else{
            //todo descobrir como exibir a mensagem de erro
        }
    }
}
