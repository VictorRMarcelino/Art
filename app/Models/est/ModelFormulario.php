<?php

namespace App\Models\est;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFormulario extends Model{
    use HasFactory;

    //Propriedades Padrões
    protected $table = 'tbformulario';
    protected $primaryKey = 'forid'; 

    private $id;
    private $moduloId;
    private $acao;
    private $titulo;
    private $controller;
    private $include;
}
