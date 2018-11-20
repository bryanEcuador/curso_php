<?php

Namespace app\model;

class BaseElement {
   

    public $nombre;
    public $apellidos;
    public $profesion;
    private $correo;
    public $celular;
    public $linkedin;
    public $twitter;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function __get($propiedad){
           return $this->propiedad; 
    }

    public function __set($propiedad,$valor){
        return $this->propiedad = $valor;
    }

    public function getLinkTwitter(){
        return $this->twitter;
    }
    
}