<?php
require_once 'includes/session.php';

if (empty($_POST['usuario']) || empty($_POST['password'])) {
    echo 'Todos los campos son obligatorios';
    exit;
}

$usuario = $_POST['usuario'];
$password = $_POST['password'];

/*
Usuarios simulados:
admin / 1234  → rol admin
user  / 1234  → rol usuario
*/

if ($usuario === 'admin' && $password === '1234') {
    $_SESSION['usuario'] = 'admin';
    $_SESSION['rol'] = 'admin';
    header('Location: dashboard.php');
    exit;
}

if ($usuario === 'user' && $password === '1234') {
    $_SESSION['usuario'] = 'user';
    $_SESSION['rol'] = 'usuario';
    header('Location: dashboard.php');
    exit;
}

echo 'Credenciales incorrectas';
