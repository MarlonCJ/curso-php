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
    <title>Iniciar Sesión</title>
</head>
<body>

    <form action="login.php" method="POST">
        <label for="user">User <input type="text" name="user" id="user"></label><br><br>
        <label for="password">Password <input type="text" name="password" id="password"></label><br><br>
        <button type="submit">login</button>
    </form>
    
</body>
</html>