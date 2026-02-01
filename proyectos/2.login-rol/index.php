<?php
require_once 'includes/session.php';

if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<form method="POST" action="login.php">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit">Ingresar</button>
</form>
