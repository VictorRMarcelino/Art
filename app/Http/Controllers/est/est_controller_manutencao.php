<?php

namespace App\Http\Controllers\est;

use Illuminate\Http\Request;
use App\Models\Enum\est\EnumAcao;

abstract class ControllerManutencao{
    
    private $Request;
    private $Model;

    /**
     * Get the value of Request
     */ 
    public function getRequest(){
        return $this->Request;
    }

    /**
     * Set the value of Request
     */ 
    public function setRequest($Request){
        $this->Request = $Request;
    }

    /**
     * Get the value of Model
     */ 
    public function getModel(){
        return $this->Model;
    }

    /**
     * Set the value of Model
     *
     * @return  self
     */ 
    public function setModel($Model){
        $this->Model = $Model;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(){
        $this->setModel($this->getInstanceModel());
    }

    /**
     * Retorna uma instância do modelo
     */
    abstract public function getInstanceModel();

    /**
     * Realiza o processamento da requisição
     * @param Request $oRequest
     * 
     */
    public function processaDados(Request $oRequest){
        $this->setRequest($oRequest);

        $iAcao = 1;

        switch($iAcao){
            case EnumAcao::ACAO_INCLUIR:
                $this->processaDadosInclusao();
                break;
            case EnumAcao::ACAO_ALTERAR:
                $this->processaDadosAlteracao();
                break;
            case EnumAcao::ACAO_INCLUIR:
                $this->processaDadosExclusao();
                break;
        }
    }

    /******************************************************************************************************
     *********************************************** INCLUSÃO ********************************************* 
     ******************************************************************************************************/

     protected function beforeExecutaInclusao(){}

     /**
      * Processa a inclusão do registro no DB
      */
     protected function processaDadosInclusao(){
        $this->getModel()->insert();
     }

     protected function afterExecutaInclusao(){}

     /******************************************************************************************************
     *********************************************** ALTERAÇÃO ********************************************* 
     ******************************************************************************************************/

     protected function beforeExecutaAlteracao(){}

     /**
      * Processa a alteração do registro no DB
      */
     protected function processaDadosAlteracao(){
        $this->getModel()->update();
     }

     protected function afterExecutaAlteracao(){}

     /******************************************************************************************************
     *********************************************** EXCLUSAO ********************************************** 
     ******************************************************************************************************/

     protected function beforeExecutaExclusao(){}

     /**
      * Processa a exclusão do registro no DB
      */
     protected function processaDadosExclusao(){
        $this->getModel()->delete();
     }

     protected function afterExecutaExclusao(){}
}
