<?php

namespace App\Models\est;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\est\ModelModulo;

class ModelFormulario extends Model{
    use HasFactory;

    //Propriedades Padrões
    protected $table = 'tbformulario';
    protected $primaryKey = 'id'; 

    /**
     * Retorna o valor do ID
     */ 
    public function getId(){
        return $this->id;
    }

    public function getModulo(){
        if (isset($this->moduloId)) {
            $oModulo = ModelModulo::findOrFail($this->moduloId);
        }

        return $oModulo;
    }

    public function getController(){
        return $this->controller;
    }

    public function getInclude(){
        return $this->include;
    }
}
