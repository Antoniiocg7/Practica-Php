<?php

require_once 'iMac.php';

// Crear una instancia de iMac
$miMac = new iMac("macOS Sonoma");

// Mostrar información
echo "Marca: " . $miMac->getMarca() . "\n";
echo "Software: " . $miMac->getSoftware() . "\n";

// Mostrar la constante de la interfaz
echo "Marca constante: " . iMacInterface::MARCA . "\n";

// Intentar cambiar el software
$miMac->setSoftware("macOS Ventura");
echo "Nuevo software: " . $miMac->getSoftware() . "\n";
