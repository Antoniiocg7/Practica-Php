<?php

require_once 'Configuracion.php';

// Configuramos valores usando los setters estáticos
Configuracion::setColor("azul");
Configuracion::setNewsletter(true);
Configuracion::setEntorno("desarrollo");

// Obtenemos valores usando los getters estáticos
echo "Color: " . Configuracion::getColor() . "\n";
echo "Newsletter: " . (Configuracion::getNewsletter() ? "Activado" : "Desactivado") . "\n";
echo "Entorno: " . Configuracion::getEntorno() . "\n";

// También podemos acceder directamente a las propiedades estáticas
Configuracion::$color = "rojo";
echo "Nuevo color: " . Configuracion::$color . "\n";
