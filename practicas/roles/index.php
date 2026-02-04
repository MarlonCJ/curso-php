<?php

require_once 'includes/session.php';

if(isset($_SESSION['user'])){
    header('Location: dashboard.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>login</title>
</head>
<body>

    <h2>Login</h2>

    <form action="login.php" method="post">
        <label for="user">UserName: <input type="text" name="user" id="user"></label><br>
        <label for="password">Password: <input type="text" name="password" id="password"></label><br><br>
        <button type="submit">Login</button>
    </form>



</body>
</html>