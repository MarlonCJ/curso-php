<?php

/*

TEMA 6 — Sanitización de Datos en PHP

🎯 Objetivo del tema

Aprender a limpiar y preparar datos ingresados por el usuario antes de mostrarlos, guardarlos o procesarlos.

Este tema es crítico para seguridad y calidad profesional.

🧠 Concepto Profesional

Validar y sanitizar no son lo mismo.

✅ Validar

Verifica si el dato cumple reglas.

Ejemplo:

correo válido
edad numérica
campo obligatorio

✅ Sanitizar

Limpia datos peligrosos o innecesarios.

Ejemplo:

eliminar espacios extra
escapar HTML
limpiar caracteres inválidos

🔥 ¿Por qué importa?

Porque los usuarios pueden enviar:

<script>alert('hack')</script>

Si lo imprimes sin control, puede ejecutar código en el navegador.

Esto se llama XSS (Cross Site Scripting).

✅ Código Completo Funcional

*/

$nombre = "";
$salida = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);

    $nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');

    $salida = $nombre;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Sanitización</title>
</head>
<body>

<form method="POST">

    <input type="text" name="nombre" placeholder="Escribe tu nombre">
    <button type="submit">Enviar</button>

</form>

<?php
if ($salida != "") {
    echo "<p>Hola, $salida</p>";
}
?>

</body>
</html>

<?php

/*

🔍 Explicación Técnica

1️⃣ trim()
trim($_POST["nombre"])

Elimina espacios sobrantes.

2️⃣ htmlspecialchars()
htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8')

Convierte caracteres HTML especiales:

Entrada	    Salida segura
<	        &lt;
>	        &gt;
"	        &quot;
'	        &#039;

3️⃣ Resultado

Si el usuario escribe:

<script>alert('X')</script>

Se mostrará como texto:

<script>alert('X')</script>

Y no se ejecutará.

🧠 Flujo Profesional

Usuario envía dato
↓
PHP recibe dato
↓
Validar reglas
↓
Sanitizar salida
↓
Mostrar / guardar / procesar

⚠️ Regla Senior Importante

Sanitizar depende del contexto

Mostrar en HTML:
htmlspecialchars()


Guardar en base de datos:

Usar consultas preparadas (PDO) — lo veremos después.

URLs:
urlencode()

JavaScript:

Escape específico JS.

No existe una sola sanitización universal.

✅ Buenas Prácticas Profesionales

✔ Escapar siempre al imprimir datos del usuario
echo htmlspecialchars($dato);

✔ Usar UTF-8
<meta charset="UTF-8">

✔ Combinar validación + sanitización

Primero validar, luego escapar según contexto.

✔ Desconfiar siempre de la entrada

Aunque venga de tu propio formulario.

❌ Errores Comunes
❌ Mostrar datos crudos

echo $_POST["nombre"];

Riesgoso.

❌ Pensar que trim() protege seguridad

Solo limpia espacios.

❌ Sanitizar una vez para todo

Depende del uso del dato.

❌ Confiar en frontend

Nunca.

🧪 Resultado Esperado

Entrada:

<b>Marlon</b>

Salida segura:
Hola, <b>Marlon</b>

Se verá texto, no negrita real.

📌 Lo que aprendiste hoy

✔ Diferencia entre validar y sanitizar
✔ Riesgo XSS
✔ Uso de htmlspecialchars()
✔ Limpieza con trim()
✔ Seguridad profesional básica

*/