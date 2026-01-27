<?php

if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {

    $nombre = trim($_POST['usuario']);
    $nombre = htmlspecialchars($nombre);

    setcookie('usuario', $nombre, time() + 3600);

    header('Location: index.php');
    exit;
}


// 📌 Importante:

//     - Cookie dura 1 hora
//     - Redireccionamos para ver el efecto