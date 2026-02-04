<?php 

    $nombre = 'Marlon';
    $apellido = 'Jara';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Bienvenidos</h2>
    <p>Hola <?php echo $nombre . " " . $apellido; ?> </p>

    <h3>Metodo Get</h3>

    <form action="getpage.php" method="get">
        <input type="text" name="username" id="username" placeholder="username"><br><br>
        <button type="submit">Enviar</button>
    </form>
    
    <h3>Metodo Post</h3>

    <form action="postpage.php" method="POST">
        <input type="text" name="username" id="username" placeholder="username"><br><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>