<?php

class Informatico extends Persona {
    protected $lenguajes;
    protected $experienciaProgramador;
    
    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador) {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }
    
    // Getters y Setters específicos
    public function getLenguajes() {
        return $this->lenguajes;
    }
    
    public function getExperienciaProgramador() {
        return $this->experienciaProgramador;
    }
    
    public function setLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
    }
    
    public function setExperienciaProgramador($experienciaProgramador) {
        $this->experienciaProgramador = $experienciaProgramador;
    }
    
    // Métodos específicos
    public function programar() {
        return "Estoy programando en " . $this->lenguajes;
    }
    
    public function repararOrdenador() {
        return "Estoy reparando un ordenador";
    }
    
    public function hacerOfimatica() {
        return "Estoy usando programas de ofimática";
    }
}
