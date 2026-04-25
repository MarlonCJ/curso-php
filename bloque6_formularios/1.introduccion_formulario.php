<?php

/*

TEMA 1 — Introducción a Formularios HTML + PHP

🎯 Objetivo del tema

Comprender cómo un formulario HTML envía datos al servidor y cómo PHP los recibe para procesarlos.

Este es uno de los fundamentos más importantes del desarrollo web dinámico.

🧠 Concepto Profesional

Un formulario HTML permite que el usuario escriba información (nombre, correo, contraseña, búsqueda, etc.).

Cuando el usuario pulsa Enviar, el navegador manda esos datos al servidor mediante una petición HTTP.

PHP recibe esos datos usando variables superglobales como:

$_GET
$_POST

🔥 Flujo real de trabajo

Usuario llena formulario
↓
Hace clic en Enviar
↓
Navegador envía datos
↓
PHP recibe datos
↓
PHP valida / procesa / guarda / responde

✅ Código Completo Funcional

*/

$nombre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>

<h2>Formulario de ejemplo</h2>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</form>

<?php
if ($nombre != "") {
    echo "<p>Hola, $nombre</p>";
}
?>

</body>
</html>

<?php

/*

🔍 Explicación Técnica Línea por Línea

1️⃣ $_SERVER["REQUEST_METHOD"]

Detecta si la página fue abierta normal o si el formulario fue enviado.

if ($_SERVER["REQUEST_METHOD"] == "POST")

Significa:

Si el formulario fue enviado usando POST.

2️⃣ $_POST["nombre"]

Obtiene el valor escrito por el usuario.

Si escribió:

Carlos

Entonces:

$_POST["nombre"]

Vale:

Carlos

3️⃣ name="nombre"

Muy importante:

<input type="text" name="nombre">

El atributo name es la clave que PHP usará.

Sin name, PHP no recibe nada.

4️⃣ method="POST"

Indica cómo enviar datos:

<form method="POST">

Más adelante veremos diferencias entre GET y POST.

✅ Buenas Prácticas Profesionales

✔ Siempre validar si fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST")

✔ Usar nombres claros

name="nombre"
name="correo"
name="telefono"

✔ Separar lógica PHP arriba y HTML abajo

Orden profesional.

❌ Errores Comunes
❌ Olvidar name

<input type="text">

PHP no recibe nada.

❌ Usar $_POST sin validar envío

Produce warnings.

❌ Mezclar lógica desordenada

Código difícil de mantener.

🧠 Resultado esperado

Si escribes:

Marlon

Salida:

Hola, Marlon

📌 Lo que acabas de aprender

✔ Qué es un formulario
✔ Cómo se envían datos
✔ Cómo PHP los recibe
✔ Uso básico de $_POST
✔ Flujo navegador → servidor

*/