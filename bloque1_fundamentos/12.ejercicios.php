<?php 

// 🧪 EJERCICIOS BÁSICOS (1–5)
// 🔹 EJERCICIO 1

// Objetivo: Validar ejecución básica

// Instrucciones:

// Crear archivo ej1.php
// Usar echo para imprimir EXACTAMENTE:
// PHP funcionando correctamente

// Reglas:

// No usar HTML
// No usar variables


echo "PHP funcionando correctamente";


// 🔹 EJERCICIO 2

// Objetivo: Uso de variables

// Instrucciones:

// Crear $nombre = "Carlos"
// Imprimir EXACTAMENTE:
// Nombre: Carlos

// Reglas:

// Usar concatenación
// No hardcodear en echo


$nombre = "Carlos";

echo "Nombre: " . $nombre;



// 🔹 EJERCICIO 3

// Objetivo: Múltiples variables

// Instrucciones:

// $edad = 30
// $ciudad = "Bogotá"
// Imprimir EXACTAMENTE:
// Edad: 30
// Ciudad: Bogotá

// Reglas:

// Usar <br>
// Respetar orden

$edad = 30;
$ciudad = "Bogotá";

echo "Edad: " . $edad;
echo "<br>";
echo "Ciudad: " . $ciudad;
echo "<br>";


// 🔹 EJERCICIO 4

// Objetivo: Integración PHP + HTML

// Instrucciones:

// $usuario = "Admin"
// Mostrar dentro de HTML EXACTAMENTE:
// Bienvenido Admin

// Reglas:

// No imprimir HTML desde PHP

$usuario = "Admin";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bienvenido <?php echo $usuario ?></p>
</body>
</html>

<?php


// 🔹 EJERCICIO 5

// Objetivo: Comentarios correctos

// Instrucciones:

// Usar:
// //
// #
// /* */
// Imprimir EXACTAMENTE:
// Sistema activo

//Sistema activo

#Sistema activo

/* Sistema activo */

echo "Sistema activo";


// 🧪 EJERCICIOS INTERMEDIOS (6–15)


// 🔹 EJERCICIO 6

// Instrucciones:

// $nombre = "Carlos"
// Imprimir EXACTAMENTE:
// Hola Carlos

// Reglas:

// Variable definida antes del echo



$nombre = "Carlos";

echo "Hola " . $nombre;


// 🔹 EJERCICIO 7

// Instrucciones:

// $nombre = "Carlos"
// $edad = 30
// Imprimir EXACTAMENTE:
// Carlos tiene 30 años


$nombre = "Carlos";
$edad = 30;

echo $nombre . " tiene " . $edad . " años";


// 🔹 EJERCICIO 8

// Instrucciones:

// $nombre = "Marlonete"
// Mostrar dentro de <h1>:
// Hola Marlonete



$nombre = "Marlonete";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola <?php echo $nombre ?></h1>
</body>
</html>


<?php

// 🔹 EJERCICIO 9

// Instrucciones:

// Mostrar EXACTAMENTE:
// Inicio
// Fin

// Reglas:

// Usar 2 bloques PHP separados
?>

<?php 
    echo "Inicio";
    echo "<br>";
?>

<?php 
    echo "Fin";
    echo "<br>";
?>

<?php
// 🔹 EJERCICIO 10

// Instrucciones:

// Usar print
// Mostrar EXACTAMENTE:
// Probando print

print "Probando print";


// 🔹 EJERCICIO 11

// Instrucciones:

// $a="A", $b="B", $c="C"
// Mostrar EXACTAMENTE:
// A B C

$a = "A";
$b = "B";
$c = "C";

echo $a . " " . $b . " " . $c;


// 🔹 EJERCICIO 12

// Instrucciones:

// Usar comentario multilínea
// Mostrar EXACTAMENTE:
// Comentario probado

    echo "comentario probado";


// 🔹 EJERCICIO 13

// Instrucciones:

// Mostrar EXACTAMENTE:
// Servidor OK

// Reglas:

// Respetar mayúsculas

echo "Servidor OK";

// 🔹 EJERCICIO 14

// Instrucciones:

// $usuario = "Admin"
// Mostrar en HTML EXACTAMENTE:
// Usuario: Admin


$usuario = "Admin";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Usuario: <?php echo $usuario ?></p>
</body>
</html>


<?php


// 🔹 EJERCICIO 15

// Instrucciones:

// $mensaje = "Bienvenido al sistema PHP"
// Mostrar EXACTAMENTE:
// Bienvenido al sistema PHP



$mensaje = "Bienvenido al sistema PHP";

echo $mensaje;


// 🧪 EJERCICIOS AVANZADOS (16–20)
// 🔹 EJERCICIO 16

// Instrucciones:

// $nombre="Juan"
// $edad=28
// $ciudad="Medellín"
// Imprimir EXACTAMENTE:
// Juan tiene 28 años y vive en Medellín


$nombre = "Juan";
$edad = 28;
$ciudad = "Medellín";

echo $nombre . " tiene " . $edad . " años y vive en " . $ciudad;

// 🔹 EJERCICIO 17

// Instrucciones:

// $mensaje="Sistema cargado correctamente"
// Mostrar EXACTAMENTE:
// Sistema cargado correctamente

// Reglas:

// Separar lógica arriba y salida abajo

$mensaje = "Sistema cargado correctamente";

echo $mensaje;


// 🔹 EJERCICIO 18

// Instrucciones:
// Mostrar EXACTAMENTE:

// Paso 1
// Paso 2
// Paso 3

echo "Paso 1";
echo "<br>";
echo "Paso 2";
echo "<br>";
echo "Paso 3";
echo "<br>";

// 🔹 EJERCICIO 19

// Instrucciones:

// $saludo="Hola Usuario Final"
// Mostrar en HTML EXACTAMENTE:
// Hola Usuario Final

$saludo = "Hola Usuario Final";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $saludo ?></p>    
</body>
</html>

<?php


// 🔹 EJERCICIO 20

// Instrucciones:

// $lenguaje="PHP"
// Mostrar EXACTAMENTE:
// Sistema PHP funcionando correctamente

// Reglas:

// HTML + PHP + comentario obligatorio

// lenguaje de programacion

$lenguaje = "PHP";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Sistema <?php echo $lenguaje ?> funcionando correctamente</p>
</body>
</html>
