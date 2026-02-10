<?php
require_once 'config.php';

// Proteger la página
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <title>Dashboard</title>';
echo '</head>';
echo '<body>';

echo '<h1>Bienvenido</h1>';
echo '<p>Usuario autenticado: ' . $_SESSION['usuario'] . '</p>';
echo '<a href="logout.php">Cerrar sesión</a>';

echo '</body>';
echo '</html>';
