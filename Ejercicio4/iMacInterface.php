<?php

interface iMacInterface {
    // Definimos la constante de la marca
    const MARCA = "Apple";
    
    // Métodos que deberán ser implementados
    public function getMarca();
    public function getSoftware();
    public function setMarca($marca);
    public function setSoftware($software);
}