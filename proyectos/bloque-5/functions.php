<?php


function mostrarUsuario($usuario){

    echo 'Nombre: '. $usuario['nombre'] . '</br>';
    echo 'Email: '. $usuario['email'] . '</br>';
    echo 'Edad: ' . $usuario['edad'] . '</br>';
    echo 'Estado: ' . $usuario['estado'] . '</br>';
    echo '---------------------------------</br>';
}