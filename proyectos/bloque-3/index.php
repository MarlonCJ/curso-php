<?php

// Listado de Usuarios

// Nombre: Juan Pérez
// Email: juan@email.com
// Edad: 28
// Estado: Activo
// ---------------------

// Nombre: Ana Gómez
// Email: ana@email.com
// Edad: 17
// Estado: Inactivo
// ---------------------

// Nombre: Carlos Ruiz
// Email: carlos@email.com
// Edad: 35
// Estado: Activo
// ---------------------

$usuarios = [
    [
        'nombre' => 'Juan Pérez',
        'email' => 'juan@email.com',
        'edad' => 28,
        'estado' => 'Activo',
    ],
    [
        'nombre' => 'Ana Gómez',
        'email' => 'ana@email.com',
        'edad' => 17,
        'estado' => 'Inactivo',
    ],
    [
        'nombre' => 'Carlos Ruiz',
        'email' => 'carlos@email.com',
        'edad' => 35,
        'estado' => 'Activo',
    ]
];


// SE PUEDE PERO NO TIENES CONTROL DE LAS SALIDAD DE LOS DATOS
// foreach($usuarios as $clave => $valor){
//     foreach($valor as $usuario => $val){
//         echo $usuario ." : " . $val ."<br>";
//     }
//     echo "<br>";
// }

// MEJOR FORMA


// foreach($usuarios as $usuario){
//     echo 'Nombre: '. $usuario['nombre'] . '<br>';
//     echo 'Nombre: '. $usuario['email'] . '<br>';
//     echo 'Nombre: '. $usuario['edad'] . '<br>';
//     echo 'Nombre: '. $usuario['estado'] . '<br>';
//     echo '----------------------------<br>';
// }


// ===SALIDAS===

echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '  <meta charset="UTF-8">';
echo '  <title>Listado de Usuarios</title>';
echo '</head>';
echo '<body>';
echo '<h1>Listado de Usuarios</h1>';
foreach($usuarios as $usuario){
    echo 'Nombre: '. $usuario['nombre'] . '<br>';
    echo 'Email: '. $usuario['email'] . '<br>';
    echo 'Edad: '. $usuario['edad'] . '<br>';
    echo 'Estado: '. $usuario['estado'] . '<br>';
    echo '----------------------------<br>';
}
echo '</body>';
echo '</html>';


