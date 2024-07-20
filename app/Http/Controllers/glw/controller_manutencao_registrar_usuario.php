<?php

namespace App\Http\Controllers\glw;

use Illuminate\Http\Request;
use App\Http\Controllers\est\ControllerManutencao;
use App\Models\glw\ModelUsuario;

class ControllerManutencaoRegistrarUsuario extends ControllerManutencao{
    
    /**
     * {@inheritDoc}
     */
    public function getInstanceModel(){
        return new ModelUsuario();
    }

}
