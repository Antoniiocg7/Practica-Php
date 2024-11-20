<?php
class Coche {
    // Propiedades
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    // Constructor
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
    // Getters
    public function getColor() {
        return $this->color;
    }
    
    public function getMarca() {
        return $this->marca;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }
    
    public function getCaballaje() {
        return $this->caballaje;
    }
    
    public function getPlazas() {
        return $this->plazas;
    }
    
    // Setters
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }
    
    public function setCaballaje($caballaje) {
        $this->caballaje = $caballaje;
    }
    
    public function setPlazas($plazas) {
        $this->plazas = $plazas;
    }
    
    // Métodos adicionales
    public function acelerar() {
        $this->velocidad++;
    }
    
    public function frenar() {
        if($this->velocidad > 0) {
            $this->velocidad--;
        }
    }
    
    public function getVelocidadActual() {
        return $this->velocidad;
    }
    
    public function mostrarInformacion($mensaje = "") {
        // Comprobar si es un objeto y no está vacío
        if(!is_object($this)) {
            return "Error: No es un objeto válido";
        }
        
        $info = "=== Información del Coche ===\n";
        $info .= "Color: " . $this->color . "\n";
        $info .= "Marca: " . $this->marca . "\n";
        $info .= "Modelo: " . $this->modelo . "\n";
        $info .= "Velocidad: " . $this->velocidad . " km/h\n";
        $info .= "Caballaje: " . $this->caballaje . " CV\n";
        $info .= "Plazas: " . $this->plazas . "\n";
        
        if(!empty($mensaje)) {
            $info .= "Mensaje: " . $mensaje . "\n";
        }
        
        return $info;
    }
}