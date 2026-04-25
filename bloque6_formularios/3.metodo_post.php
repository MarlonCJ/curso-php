<?php

/*

TEMA 3 — Método POST y superglobal $_POST

🎯 Objetivo del tema

Aprender a enviar datos mediante POST y recibirlos en PHP usando $_POST, que es el método más usado para formularios reales.

🧠 Concepto Profesional

Cuando un formulario usa:

<form method="POST">

Los datos no viajan visibles en la URL como en GET. Se envían dentro del cuerpo de la petición HTTP.

PHP los recibe mediante:

$_POST

Ejemplo:

$_POST["correo"]
$_POST["password"]

🔥 Cuándo se usa POST en proyectos reales

Login de usuarios
Registro de cuentas
Formularios de contacto
Crear productos
Actualizar información
Enviar datos sensibles
Cargas de archivos (junto con multipart/form-data)

✅ Código Completo Funcional

*/

$correo = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario POST</title>
</head>
<body>

<h2>Contacto</h2>

<form method="POST">
    <label>Correo:</label>
    <input type="email" name="correo">

    <br><br>

    <label>Mensaje:</label>
    <textarea name="mensaje"></textarea>

    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php

if ($correo != "") {
    echo "<p>Correo recibido: $correo</p>";
    echo "<p>Mensaje recibido: $mensaje</p>";
}
?>

</body>
</html>

<?php

/*


🔍 Explicación Técnica

1️⃣ El formulario usa POST

<form method="POST">

Los datos se mandan al servidor sin mostrarse en la URL.

2️⃣ PHP detecta el envío

if ($_SERVER["REQUEST_METHOD"] == "POST")

Significa:

El usuario envió el formulario.

3️⃣ PHP recibe valores

$_POST["correo"]
$_POST["mensaje"]

4️⃣ URL limpia

Si envías el formulario, la URL seguirá algo como:

contacto.php

No mostrará:

?correo=...

⚖️ Diferencia Real entre GET y POST

Característica	        GET	                POST
Visible en URL	        Sí	                No
Ideal para consultas	Sí	                No
Datos sensibles	        No recomendable	    Sí
Recargable fácilmente	Sí	                Menos directo

Uso común	filtros, búsquedas	formularios reales

✅ Buenas Prácticas Profesionales

✔ Usar POST para crear/modificar datos

Registro, login, guardar formularios.

✔ Validar siempre antes de usar
if ($_SERVER["REQUEST_METHOD"] == "POST")

✔ Sanitizar datos

Lo veremos en próximos temas.

✔ Nunca confiar en inputs del usuario

Aunque venga de tu propio formulario.

❌ Errores Comunes
❌ Pensar que POST cifra datos

POST no cifra. Solo oculta de la URL.
Para seguridad real necesitas HTTPS.

❌ No validar campos vacíos
$_POST["correo"]

Puede venir vacío.

❌ Mostrar datos sin escapar

Puede generar XSS (lo veremos luego).

🧠 Resultado esperado

Si el usuario escribe:

Correo: marlon@email.com
Mensaje: Hola equipo

Salida:

Correo recibido: marlon@email.com
Mensaje recibido: Hola equipo

📌 Lo que aprendiste hoy

✔ Qué es POST
✔ Cómo funciona $_POST
✔ Diferencia con GET
✔ Cuándo usar POST
✔ Buenas prácticas reales
*/