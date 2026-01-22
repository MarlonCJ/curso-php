<?php


// ARRAYS ASOCIATIVOS

$usuario = [
    'nombre' => 'Marlon',
    'edad' => '32',
    'rol' => 'admin'
];

// acceder

echo $usuario['nombre'];
echo "\n";

// Wordpress usa arrays asociativos en todo


// RECORRER ARRAYS ASOCIATIVOS

foreach($usuario as $clave => $valor){
    echo $clave . ': ' . $valor . "\n";
}

/*
🧠 Errores comunes (evítalos)

❌ Acceder a índices que no existen
❌ Usar arrays sin validar
❌ Mezclar datos sin sentido

Más adelante veremos:

*/

isset($usuario['rol']);
