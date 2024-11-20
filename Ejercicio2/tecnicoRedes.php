<?php

class TecnicoRedes extends Informatico {
    protected $auditarRedes;
    protected $experienciaRedes;
    
    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador, 
                              $auditarRedes, $experienciaRedes) {
        parent::__construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador);
        $this->auditarRedes = $auditarRedes;
        $this->experienciaRedes = $experienciaRedes;
    }
    
    // Getters y Setters
    public function getAuditarRedes() {
        return $this->auditarRedes;
    }
    
    public function getExperienciaRedes() {
        return $this->experienciaRedes;
    }
    
    public function setAuditarRedes($auditarRedes) {
        $this->auditarRedes = $auditarRedes;
    }
    
    public function setExperienciaRedes($experienciaRedes) {
        $this->experienciaRedes = $experienciaRedes;
    }
    
    // Método específico
    public function auditarRedes() {
        return "Estoy auditando redes";
    }
}