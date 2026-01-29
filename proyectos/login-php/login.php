<?php

require_once 'includes/session.php';


if(empty($_POST['usuario']) || empty($_POST['password'])){
    echo 'Todos los campos son obligatorios';
    exit;
}

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if($usuario === 'admin' && $password === '1234'){
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.php');
    exit;
}else{
    echo 'Credenciales Incorrectas';
}

