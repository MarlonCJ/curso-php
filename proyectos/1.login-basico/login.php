<?php

require_once 'includes/session.php';
// require_once 'includes/auth.php';

if(empty($_POST['user']) || empty($_POST['password'])){
    echo 'Todos los Campos son Obligatorios';
    exit;
}

$user = $_POST['user'];
$password = $_POST['password'];


if($user === "admin" && $password === "12345"){
    $_SESSION['user'] = $user;
    header('Location: dashboard.php');
    exit;
}else{
    echo "Usuario o Contraseña incorrectas";
}

