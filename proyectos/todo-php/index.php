<?php

session_start();

/*
 *Si el array de tareas no existe en la sesion
 *lo creamos por primera vez 
 */

if(!isset($_SESSION['task'])){
    $_SESSION['task'] = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO-DO PHP</title>
</head>
<body>
    <h1>Mi primera app en PHP</h1>

    <p>Contenido actual de la sesion:</p>

<pre>
    <?php  
        print_r($_SESSION['task']);
    ?>
</pre>

</body>
</html>