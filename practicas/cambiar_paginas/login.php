<?php

require_once 'includes/session.php';

if(empty($_POST['username']) || empty($_POST['password'])){
    echo 'Todos los campos son obligatorios <br><br>';
    echo "<a href='index.php'>Volver</a>";
    exit;
}


if($_POST['username'] === 'admin' && $_POST['password'] === '1234'){
    $_SESSION['user'] = 'admin';
    $_SESSION['rol'] = 'admin';
    header('Location: dashboard.php');
    exit;
}

if($_POST['username'] === 'user' && $_POST['password'] === '1234'){
    $_SESSION['user'] = 'user';
    $_SESSION['rol'] = 'user';
    header('Location: dashboard.php');
    exit;
}

echo 'Usuario o Contraseña incorrecta';







