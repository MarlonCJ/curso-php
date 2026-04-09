<?php

// 🧪 EJERCICIOS BÁSICOS (1–5)

// 🔹 EJERCICIO 1

// Objetivo: Comprender la ejecución básica de PHP

// Contexto: Necesitas validar que el servidor ejecuta PHP correctamente

// Instrucciones:

// Crea un archivo llamado test1.php
// Escribe código PHP que imprima un mensaje
// Accede desde el navegador

// Salida esperada EXACTA:

// PHP funcionando

// Reglas técnicas:

// Usar echo
// No usar HTML


echo "Accede desde el navegador";
echo "<br>";

// 🔹 EJERCICIO 2

// Objetivo: Uso correcto de variables

// Contexto: Mostrar datos dinámicos

// Instrucciones:

// Crear variable $nombre
// Asignar tu nombre
// Imprimirlo

// Salida esperada EXACTA (ejemplo):

// Nombre: Juan

// Reglas técnicas:

// Usar concatenación
// No usar print


$nombre = "Marlon";

echo "Nombre: " . $nombre;
echo "<br>";

// 🔹 EJERCICIO 3

// Objetivo: Validar sintaxis

// Contexto: Evitar errores comunes

// Instrucciones:

// Crear 2 variables: $edad y $ciudad
// Imprimir ambas en líneas separadas

// Salida esperada EXACTA:

// Edad: 25
// Ciudad: Bogotá

// Reglas técnicas:

// Usar echo
// Usar <br>


$edad = 32;
$ciudad = "Villavicencio";

echo "Edad: " . $edad;
echo "<br>";
echo "Ciudad: " . $ciudad;
echo "<br>";

// 🔹 EJERCICIO 4

// Objetivo: Comprender etiquetas PHP

// Contexto: Mezcla con HTML

// Instrucciones:

// Crear estructura HTML básica
// Insertar PHP dentro del <body>
// Mostrar un mensaje dinámico

// Salida esperada EXACTA:

// Bienvenido Usuario

// Reglas técnicas:

// No imprimir HTML desde PHP

$usuario = "Marlon";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprender etiquetas PHP</title>
</head>
<body>
    <p>Bienvenido <?php echo $usuario?></p>
</body>
</html>


<?php

// 🔹 EJERCICIO 5

// Objetivo: Uso de comentarios

// Contexto: Documentación del código

// Instrucciones:

// Crear código con al menos 3 comentarios

// Imprimir un mensaje

// Salida esperada EXACTA:

// Sistema activo

// Reglas técnicas:

// Usar al menos 2 tipos de comentarios


$usuario = 'Marlon';
$pass = "1234";

#Validacion de usuario y contraseña
echo ($usuario === "Marlon" && $pass === "1234") 
    ? "Bienvenido al sistema"  //credenciales correcta ingreso al sistema
    : "Usuario o Contraseña incorrecta"; // Generar mensaje fallido
echo "<br>";

// 🧪 EJERCICIOS INTERMEDIOS (6–15)


// 🔹 EJERCICIO 6

// Objetivo: Entender flujo de ejecución

// Contexto: Orden de ejecución

// Instrucciones:

// Declarar variable después de imprimir
// Corregir el flujo

// Salida esperada EXACTA:

// Hola Carlos

// Reglas técnicas:

// No usar valores hardcodeados en echo


// echo "Hola " . $nombre;
// $nombre = "Carlos";
// echo "<br>";

$nombre = "Carlos";
echo "Hola " . $nombre;
echo "<br>";


// 🔹 EJERCICIO 7

// Objetivo: Concatenación múltiple

// Contexto: Construcción de strings

// Instrucciones:

// Crear variables $nombre, $edad
// Mostrar en una sola línea

// Salida esperada EXACTA:

// Carlos tiene 30 años

$nombre = "Marlon";
$edad = 32;

echo $nombre . " tiene " . $edad . " años";
echo "<br>";

// 🔹 EJERCICIO 8

// Objetivo: Estructura HTML + PHP

// Contexto: Integración real

// Instrucciones:

// Crear HTML completo
// Insertar variable dentro de <h1>

// Salida esperada EXACTA:

// Hola Marlonete

$nombre = "Marlonete";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura HTML + PHP</title>
</head>
<body>
    <h1>Hola <?php echo $nombre ?></h1>
</body>
</html>

<?php 

// 🔹 EJERCICIO 9

// Objetivo: Uso correcto de etiquetas

// Contexto: Código limpio

// Instrucciones:

// Usar múltiples bloques PHP
// Mostrar 2 mensajes separados

// Salida esperada EXACTA:

// Inicio
// Fin


#bloque 1

echo "Inicio";
echo "<br>";

#bloque 2

echo "Fin";
echo "<br>";


// 🔹 EJERCICIO 10

// Objetivo: Uso de print

// Contexto: Diferencias reales

// Instrucciones:

// Usar print
// Mostrar mensaje simple

// Salida esperada EXACTA:

// Probando print

print('Probando print');
echo "<br>";

// 🔹 EJERCICIO 11

// Objetivo: Evitar errores de sintaxis

// Contexto: Código correcto

// Instrucciones:

// Crear 3 variables
// Imprimir correctamente

// Salida esperada EXACTA:

// A B C


$numero1 = "A";
$numero2 = "B";
$numero3 = "C";

echo $numero1 . " " .$numero2 . " " . $numero3;
echo "<br>";


// 🔹 EJERCICIO 12

// Objetivo: Comentarios multilínea

// Contexto: Documentación

// Instrucciones:

// Documentar un bloque de código
// Ejecutar salida

// Salida esperada EXACTA:

// Comentario probado


#ejecutar salida
echo "Comentario probado";
echo "<br>";


// 🔹 EJERCICIO 13

// Objetivo: Uso correcto del servidor

// Contexto: Ejecución real

// Instrucciones:

// Ejecutar archivo correctamente
// Mostrar mensaje

// Salida esperada EXACTA:

// Servidor OK


echo "servidor OK";
echo "<br>";


// 🔹 EJERCICIO 14

// Objetivo: Separación lógica

// Contexto: Orden del código

// Instrucciones:

// Definir variables arriba
// Mostrar en HTML abajo

// Salida esperada EXACTA:

// Usuario: Admin

$usuario = "Admin";

echo "<p>Usuario: $usuario</p>";
echo "<br>";


// 🔹 EJERCICIO 15

// Objetivo: Comprensión completa del flujo

// Contexto: Integración total

// Instrucciones:

// HTML + PHP + variables
// Mostrar resultado dinámico

// Salida esperada EXACTA:

// Bienvenido al sistema PHP

$mensaje = "Bienvenido al sistema PHP";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $mensaje ?></p>  
</body>
</html>

<?php


// 🧪 EJERCICIOS AVANZADOS (16–20)


// 🔹 EJERCICIO 16

// Objetivo: Control total de salida

// Contexto: Construcción dinámica

// Instrucciones:

// Crear 3 variables
// Generar salida en formato frase completa

// Salida esperada EXACTA:

// Juan tiene 28 años y vive en Medellín


$nombre = "Juan";
$edad = 28;
$ciudad = "Medellín";

echo $nombre . " tiene " . $edad . " y viven en " . $ciudad;
echo "<br>";


// 🔹 EJERCICIO 17

// Objetivo: Estructura profesional

// Contexto: Código limpio

// Instrucciones:

// Separar lógica y vista correctamente
// Evitar mezcla innecesaria

// Salida esperada EXACTA:

// Sistema cargado correctamente

$mensaje = "Sistema cargado correctamente";

echo $mensaje;
echo "<br>";



// 🔹 EJERCICIO 18

// Objetivo: Uso correcto de múltiples salidas

// Contexto: Flujo estructurado

// Instrucciones:

// Mostrar 3 mensajes en orden

// Salida esperada EXACTA:

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

// Objetivo: Comprensión del procesamiento

// Contexto: PHP antes que HTML

// Instrucciones:

// Generar variable antes del HTML
// Usarla dentro del HTML

// Salida esperada EXACTA:

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

// Objetivo: Dominio completo del bloque

// Contexto: Simulación real

// Instrucciones:

// Crear archivo completo
// HTML + PHP + variables + comentarios
// Salida dinámica clara

// Salida esperada EXACTA:

// Sistema PHP funcionando correctamente

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

<?php


// ⚠️ INSTRUCCIÓN FINAL

// Debes resolver los ejercicios.

// Luego enviar:

// Código completo
// Sin explicaciones innecesarias
// ⛔ EVALUACIÓN ACTIVADA

// Cuando envíes tu solución:

// Se evaluará con معیار profesional:

// Lógica
// Sintaxis
// Buenas prácticas
// Claridad
// Uso del concepto