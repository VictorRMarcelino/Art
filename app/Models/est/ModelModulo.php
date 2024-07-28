<?php

namespace App\Models\est;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelModulo extends Model{
    use HasFactory;

    //Propriedades Padrões
    protected $table = 'tbmodulo';
    protected $primaryKey = 'modid'; 

    private $id;
    private $titulo;
    private $sigla;

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

    /**
     * Get the value of sigla
     */ 
    public function getSigla(){
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     */ 
    public function setSigla($sigla){
        $this->sigla = $sigla;
    }
}
