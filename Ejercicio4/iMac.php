<?php

require_once 'iMacInterface.php';

class iMac implements iMacInterface {
    // Propiedades
    public $marca;
    public $software;
    
    // Constructor
    public function __construct($software) {
        $this->marca = self::MARCA; // Usamos la constante de la interfaz
        $this->software = $software;
    }
    
    // Implementación de los métodos de la interfaz
    public function getMarca() {
        return $this->marca;
    }
    
    public function getSoftware() {
        return $this->software;
    }
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function setSoftware($software) {
        $this->software = $software;
    }
}