<?php

// Incluir las clases
require_once 'Persona.php';
require_once 'Informatico.php';
require_once 'TecnicoRedes.php';

// Crear instancias
$persona = new Persona("Juan", "Pérez", 1.75, 30);
$informatico = new Informatico("Ana", "García", 1.65, 25, "PHP, JavaScript", 3);
$tecnico = new TecnicoRedes("Carlos", "López", 1.80, 35, "Python, Java", 5, "CCNA", 7);

// Probar que el nieto (TecnicoRedes) tiene acceso a los métodos del abuelo (Persona)
echo "Probando herencia:\n";
echo $tecnico->hablar() . "\n";  // Método de Persona
echo $tecnico->programar() . "\n";  // Método de Informático
echo $tecnico->auditarRedes() . "\n";  // Método propio

// Probar otros métodos
echo "\nProbando otros métodos:\n";
echo $tecnico->caminar() . "\n";
echo $tecnico->repararOrdenador() . "\n";

?>