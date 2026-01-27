<?php

// if(isset($_GET['nombre'])){
//     echo $_GET['nombre'];
// }else{
//     echo 'No se recibió el nombre';
// }

// mejor

if(isset($_GET['nombre']) && $_GET['nombre'] !== '') {
    echo 'Hola ' . $_GET['nombre'];
} else{
    echo 'El nombre está vacio';
}

echo '<br>';
var_dump($_GET);