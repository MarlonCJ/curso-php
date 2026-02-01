<?php

require_once 'includes/session.php';
require_once 'includes/auth.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    </body>
    <h2>Bienvenido <?php echo $_SESSION['user'] ?></h2>

    <a href="logout.php">Cerrar Sesión</a>
</html>