
<?php


// ARRAY EJERCICIO
/*
Crea un array asociativo $producto con:

    nombre
    precio
    stock

Imprime:

"El producto ___ cuesta ___"

Usa array asociativo, no variables sueltas.
*/


$producto = [
    'nombre' => 'television',
    'precio' => 1200000,
    'stock' => 50,
];


echo 'El producto ' . $producto['nombre'] . ' Cuesta '. $producto['precio'];