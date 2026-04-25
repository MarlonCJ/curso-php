<?php

/*
TEMA 2 — Método GET y superglobal $_GET

🎯 Objetivo del tema

Aprender cómo enviar datos por la URL usando el método GET y cómo PHP los recibe mediante $_GET.

Este método es muy usado en búsquedas, filtros, paginación y enlaces dinámicos.

🧠 Concepto Profesional

Cuando un formulario usa:

method="GET"

Los datos viajan en la URL.

Ejemplo:

pagina.php?nombre=Marlon&ciudad=Meta

PHP puede leer esos valores con:

$_GET["nombre"]
$_GET["ciudad"]

🔥 Cuándo se usa GET en proyectos reales

Buscadores internos
Filtros de productos
Parámetros de reportes
Paginación (?page=2)
Compartir enlaces con resultados
URLs dinámicas SEO

✅ Código Completo Funcional

*/

$nombre = "";
$ciudad = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
    $ciudad = $_GET["ciudad"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario GET</title>
</head>
<body>

<h2>Formulario con GET</h2>

<form method="GET">
    <label>Nombre:</label>
    <input type="text" name="nombre">

    <br><br>

    <label>Ciudad:</label>
    <input type="text" name="ciudad">

    <br><br>

    <button type="submit">Enviar</button>
</form>

<?php

if ($nombre != "") {
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Ciudad: $ciudad</p>";
}
?>

</body>
</html>

<?php

/*

🔍 Explicación Técnica

1️⃣ El formulario usa GET

<form method="GET">

Esto hace que los datos se agreguen a la URL.

2️⃣ URL generada al enviar

Si escribes:

Nombre: Marlon
Ciudad: Villavicencio

La URL quedará algo como:

archivo.php?nombre=Marlon&ciudad=Villavicencio

3️⃣ PHP recibe datos

$_GET["nombre"]
$_GET["ciudad"]

Devuelven:

Marlon
Villavicencio

4️⃣ Uso de isset()

isset($_GET["nombre"])

Sirve para verificar si existe la variable y evitar errores.

✅ Buenas Prácticas Profesionales

✔ Usar GET cuando no se modifica información

Ideal para:

Buscar
Filtrar
Navegar
Ordenar resultados
✔ Validar existencia

if (isset($_GET["nombre"]))

✔ Limpiar datos luego (lo veremos después)

Nunca confiar en entrada del usuario.

❌ Errores Comunes
❌ Usar GET para contraseñas

Mal:

login.php?password=123456

Porque queda visible en URL.

❌ Acceder sin validar

echo $_GET["nombre"];

Sin isset() puede dar warning.

❌ URLs desordenadas

Muchos parámetros sin control dificultan mantenimiento.

⚖️ Diferencia rápida con POST

Método	Visible en URL	    Uso ideal
GET	    Sí	                Consultas
POST	No	                Envío de datos sensibles

🧠 Resultado esperado

Si escribes:

Nombre: Marlon
Ciudad: Villavicencio

Salida:

Nombre: Marlon
Ciudad: Villavicencio

Y además aparecerá en la URL.

📌 Lo que aprendiste hoy

✔ Qué es GET
✔ Cómo viajan datos en la URL
✔ Uso de $_GET
✔ Uso de isset()
✔ Casos reales de uso

*/