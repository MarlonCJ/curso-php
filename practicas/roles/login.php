<?php

require_once 'includes/session.php';


if(empty($_POST['user']) || empty($_POST['password'])){
    echo 'Todos los campos son obligatorios';
    exit;
}

$username = $_POST['user'];
$password = $_POST['password'];

if($username === 'admin' && $password === '1234'){
    $_SESSION['user'] = 'admin';
    $_SESSION['rol'] = 'admin';
    header('Location: dashboard.php');
    exit;
}

if($username === 'user' && $password === '1234'){
    $_SESSION['user'] = 'user';
    $_SESSION['rol'] = 'user';
    header('Location: dashboard.php');
    exit;
}

echo 'Username or password incorrect';


