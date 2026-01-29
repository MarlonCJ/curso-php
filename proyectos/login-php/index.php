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
    <title>Login PHP</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    <form method="POST" action="login.php">
        <label>Usuario
            <input type="text" name="usuario">
        </label><br><br>

        <label>contraseña
            <input type="password" name="password">
        </label><br><br>

        <button type="submit">Ingresar</button>
    </form>

</body>
</html>