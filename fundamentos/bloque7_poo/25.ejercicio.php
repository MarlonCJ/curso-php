<?php

class Producto {

    public $nombre;
    public $precio;

}

$producto = new Producto();
$producto->nombre = 'Televisor';
$producto->precio = 1200000;

echo $producto->nombre;
echo '<br>';
echo $producto->precio;


// Ejecuta
// Mira el resultado
// No modifiques nada más