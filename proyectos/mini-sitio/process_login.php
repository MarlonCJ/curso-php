<?php
require_once 'bootstrap.php';

// Validar método
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

// Sanitización básica
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

// Validación
if ($email === '' || $password === '') {
    header('Location: login.php?error=1');
    exit;
}

// Verificación
if ($email === ADMIN_EMAIL && $password === ADMIN_PASSWORD) {
    $_SESSION['auth'] = true;
    $_SESSION['user'] = $email;

    header('Location: dashboard.php');
    exit;
}

header('Location: login.php?error=1');
exit;
