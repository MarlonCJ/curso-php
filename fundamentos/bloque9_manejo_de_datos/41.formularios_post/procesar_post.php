<?php

var_dump($_POST);

echo '<br>';

if(isset($_POST['nombre']) && $_POST['nombre'] !== ''){
    echo 'Hola ' . $_POST['nombre'];
}else{
    echo 'El campo esta vacio';
}