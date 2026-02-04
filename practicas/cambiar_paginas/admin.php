<?php
    require_once 'includes/session.php';
    require_once 'includes/auth.php';
    require_once 'includes/roles.php';

    roles('admin');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenidos <?php echo $_SESSION['user']; ?></h2>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>