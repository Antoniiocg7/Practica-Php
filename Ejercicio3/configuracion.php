<?php

class Configuracion {
    // Propiedades estáticas
    public static $color;
    public static $newsletter;
    public static $entorno;
    
    // Getters estáticos
    public static function getColor() {
        return self::$color;
    }
    
    public static function getNewsletter() {
        return self::$newsletter;
    }
    
    public static function getEntorno() {
        return self::$entorno;
    }
    
    // Setters estáticos
    public static function setColor($color) {
        self::$color = $color;
    }
    
    public static function setNewsletter($newsletter) {
        self::$newsletter = $newsletter;
    }
    
    public static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }
}