<?php

require_once 'includes/session.php';

if(isset($_SESSION['usuario'])){
    header('Location: dashboard.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="usuario">Usuario <input type="text" name="usuario" id="usuario"></label><br><br>
        <label for="password">Contraseña <input type="text" name="password" id="password"></label><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
