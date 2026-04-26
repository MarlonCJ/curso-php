<?php

/*

TEMA 5 — Validación de Campos Requeridos en Formularios PHP

🎯 Objetivo del tema

Aprender a validar que los campos obligatorios realmente tengan información antes de procesar el formulario.

Esto es obligatorio en sistemas reales. Nunca se debe confiar solo en HTML o en el navegador.

🧠 Concepto Profesional

Aunque en HTML existe:

required

Eso no es suficiente, porque:

El usuario puede desactivar validaciones del navegador.
Puede enviar peticiones manuales.
Bots pueden saltarse el formulario.
Herramientas externas pueden enviar datos vacíos.

Por eso, PHP siempre debe validar en el servidor.

🔥 Regla Senior

Validación Frontend (HTML)

Mejora experiencia del usuario.

Validación Backend (PHP)

Es la obligatoria y definitiva.

✅ Código Completo Funcional

*/

$errores = [];
$nombre = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $email  = trim($_POST["email"]);

    if ($nombre == "") {
        $errores[] = "El nombre es obligatorio.";
    }

    if ($email == "") {
        $errores[] = "El correo es obligatorio.";
    }

    if (empty($errores)) {
        echo "<p>Formulario enviado correctamente.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Validación</title>
</head>
<body>

<form method="POST">

    <input type="text" name="nombre" placeholder="Nombre">
    <br><br>

    <input type="text" name="email" placeholder="Correo">
    <br><br>

    <button type="submit">Enviar</button>

</form>

<?php

if (!empty($errores)) {
    foreach ($errores as $error) {
        echo "<p>$error</p>";
    }
}

?>

</body>
</html>

<?php

/*

🔍 Explicación Técnica

1️⃣ trim()

$nombre = trim($_POST["nombre"]);

Elimina espacios al inicio y final.

Ejemplo:

"   Marlon   "

Se convierte en:

"Marlon"

También detecta campos llenos solo con espacios.

2️⃣ Validación vacía

if ($nombre == "")

Si está vacío, se agrega error.

3️⃣ Array de errores

$errores = [];

Permite acumular múltiples errores y mostrarlos todos.

4️⃣ Validación final

if (empty($errores))

Solo continúa si no hubo errores.

🧠 Flujo Profesional Real

Usuario envía formulario
↓
PHP recibe datos
↓
Valida requeridos
↓
Si hay errores → mostrar errores
Si todo bien → guardar / enviar / procesar

✅ Buenas Prácticas Profesionales

✔ Validar SIEMPRE en PHP

Nunca depender solo del navegador.

✔ Mostrar todos los errores juntos

Mejor experiencia de usuario.

✔ Limpiar espacios con trim()

Muy recomendado.

✔ Validar antes de guardar en base de datos

Siempre.

❌ Errores Comunes
❌ Solo usar required

<input required>

No basta.

❌ Guardar datos vacíos

Falla lógica del sistema.

❌ Mostrar un error por vez

Molesta al usuario.

❌ No limpiar espacios
"      "

Parecería lleno, pero no sirve.

🧪 Resultado Esperado

Caso 1: vacío
Nombre:
Correo:

Salida:

El nombre es obligatorio.
El correo es obligatorio.
Caso 2: correcto
Nombre: Marlon
Correo: marlon@mail.com

Salida:

Formulario enviado correctamente.

📌 Lo que aprendiste hoy

✔ Qué es validación backend
✔ Campos requeridos reales
✔ Uso de trim()
✔ Array de errores
✔ Flujo profesional de formularios

*/