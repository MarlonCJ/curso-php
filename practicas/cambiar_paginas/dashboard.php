<?php
    require_once 'includes/session.php';
    require_once 'includes/auth.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenido <?php echo $_SESSION['user'];?></h2>

    <?php if($_SESSION['user'] === 'admin'): ?>
        <a href="admin.php">Ir al panel administrativo</a>
    <?php endif; ?><br><br>

    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>