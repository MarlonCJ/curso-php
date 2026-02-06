<?php

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


function mostrarUsuario($usuario)
{
    echo 'Nombre: ' . $usuario['nombre'] . '<br>';
    echo 'Email: ' . $usuario['email'] . '<br>';
    echo 'Edad: ' . $usuario['edad'] . '<br>';
    echo 'Estado: ' . $usuario['estado'] . '<br>';
    echo '-----------------------------<br>';
}

foreach ($usuarios as $usuario) {
    mostrarUsuario($usuario);
}

mostrarUsuario($usuarios[0]);