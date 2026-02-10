<?php
require_once 'config.php';

// Si ya hay sesión, redirigir
if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php');
    exit;
}

echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <title>Login</title>';
echo '</head>';
echo '<body>';

echo '<h1>Iniciar Sesión</h1>';

if (isset($_GET['error'])) {
    echo '<p style="color:red;">Credenciales incorrectas</p>';
}

echo '<form method="POST" action="login.php">';
echo '    <label>Email:</label><br>';
echo '    <input type="email" name="email"><br><br>';
echo '    <label>Password:</label><br>';
echo '    <input type="password" name="password"><br><br>';
echo '    <button type="submit">Ingresar</button>';
echo '</form>';

echo '</body>';
echo '</html>';
