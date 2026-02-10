<?php
require_once 'config.php';

// Validar que venga por POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Sanitización básica
$email    = trim($_POST['email']);
$password = trim($_POST['password']);

// Validación
if ($email === '' || $password === '') {
    header('Location: index.php?error=1');
    exit;
}

// Verificación de credenciales
if ($email === USUARIO_EMAIL && $password === USUARIO_PASSWORD) {
    $_SESSION['usuario'] = $email;
    header('Location: dashboard.php');
    exit;
}

// Error de login
header('Location: index.php?error=1');
exit;
