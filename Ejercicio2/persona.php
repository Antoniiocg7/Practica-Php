<?php

class Persona {
    // Propiedades
    protected $nombre;
    protected $apellido;
    protected $altura;
    protected $edad;
    
    // Constructor
    public function __construct($nombre, $apellido, $altura, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->altura = $altura;
        $this->edad = $edad;
    }
    
    // Getters
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getApellido() {
        return $this->apellido;
    }
    
    public function getAltura() {
        return $this->altura;
    }
    
    public function getEdad() {
        return $this->edad;
    }
    
    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    
    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    // Métodos adicionales
    public function hablar() {
        return "Hola, soy " . $this->nombre;
    }
    
    public function caminar() {
        return "Estoy caminando";
    }
}
