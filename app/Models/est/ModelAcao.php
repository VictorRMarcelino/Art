<?php

namespace App\Models\est;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAcao extends Model{
    use HasFactory;

    //Propriedades Padrões
    protected $table = 'tbacao';
    protected $primaryKey = 'acaid'; 

    private $id;
    private $titulo;

    /**
     * Get the value of id
     */ 
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id){
        $this->id = $id;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo(){
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */ 
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
}
