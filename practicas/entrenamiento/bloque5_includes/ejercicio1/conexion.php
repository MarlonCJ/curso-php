<?php 

function conexion($user, $pass){
    if($user === 'admin' && $pass === "12345" ){
        echo 'Bienvenido ' . $user;
    }else{
        echo "Usuario o Contraseña incorrectos";
    }
}