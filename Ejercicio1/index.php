<?php

// Incluir la clase Coche
require_once 'coche.php';

// Crear instancias
$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);
$coche2 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche3 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

// Probar los métodos
$coche->setColor("ROSA");
$coche->setMarca("Audi");

// Probar aceleración y frenado
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

// Mostrar información
echo $coche->mostrarInformacion("HOLA MUNDO DESDE UN METODO");

?>
