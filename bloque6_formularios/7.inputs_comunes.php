<?php

/*

TEMA 7 — Inputs comunes (text, email, number, password) y cómo procesarlos en PHP

🎯 Objetivo del tema

Dominar los tipos de campos más usados en formularios reales y cómo recibirlos correctamente desde PHP.

Estos inputs aparecen en casi todos los sistemas profesionales.

🧠 Concepto Profesional

Cada input HTML tiene un propósito específico. Elegir el tipo correcto mejora:

experiencia de usuario
validación del navegador
accesibilidad
captura de datos correcta
mantenimiento del sistema

🔥 Inputs más usados en proyectos reales

Tipo	    Uso común
text	    nombres, ciudad, cargo
email	    correos electrónicos
number	    edad, cantidad, precio
password	contraseñas
hidden	    datos internos
date	    fechas

Hoy veremos los principales del bloque.

✅ Código Completo Funcional

*/

$nombre = "";
$email = "";
$edad = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre   = trim($_POST["nombre"]);
    $email    = trim($_POST["email"]);
    $edad     = $_POST["edad"];
    $password = $_POST["password"];

    echo "<h3>Datos recibidos</h3>";
    echo "<p>Nombre: " . htmlspecialchars($nombre) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Edad: " . htmlspecialchars($edad) . "</p>";
    echo "<p>Clave recibida correctamente</p>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Inputs comunes</title>
</head>
<body>

<form method="POST">

    <input type="text" name="nombre" placeholder="Nombre">
    <br><br>

    <input type="email" name="email" placeholder="Correo">
    <br><br>

    <input type="number" name="edad" placeholder="Edad">
    <br><br>

    <input type="password" name="password" placeholder="Contraseña">
    <br><br>

    <button type="submit">Enviar</button>

</form>

</body>
</html>

<?php
/*

🔍 Explicación Técnica por Tipo

1️⃣ type="text"
<input type="text" name="nombre">

Usado para texto libre corto:

nombre
apellido
ciudad
empresa

PHP:

$_POST["nombre"]

2️⃣ type="email"

<input type="email" name="email">

El navegador valida formato básico:

correo@dominio.com

PHP recibe:

$_POST["email"]

⚠️ Igual debes validar en backend.

3️⃣ type="number"

<input type="number" name="edad">

Ideal para:

edad
cantidad
precio
stock

PHP:

$_POST["edad"]

Llega normalmente como texto y luego puedes convertir.

4️⃣ type="password"

<input type="password" name="password">

Oculta visualmente lo escrito.

PHP recibe:

$_POST["password"]

⚠️ Nunca guardar contraseñas en texto plano.

🧠 Flujo Profesional

Usuario llena formulario
↓
Navegador ayuda con validaciones básicas
↓
PHP recibe datos
↓
Validar backend
↓
Sanitizar salida
↓
Guardar / procesar

✅ Buenas Prácticas Profesionales

✔ Usa el tipo correcto

No todo debe ser text.

✔ Validar también en PHP

HTML ayuda, pero no reemplaza backend.

✔ Contraseñas siempre con hash

Más adelante veremos:

password_hash()

✔ Campos numéricos validar rango

Ejemplo:

edad entre 18 y 100

✔ Escapar salida al mostrar datos

htmlspecialchars()

❌ Errores Comunes
❌ Todo en text

Mala UX y menos validación.

❌ Guardar password directo

Muy grave.

❌ Confiar en type="email"

No garantiza correo real.

❌ Asumir que number siempre llega como entero

Debe validarse.

🧪 Resultado Esperado

Entrada:

Nombre: Marlon
Email: marlon@mail.com
Edad: 25
Password: 123456
Salida:
Datos recibidos
Nombre: Marlon
Email: marlon@mail.com
Edad: 25
Clave recibida correctamente

*/