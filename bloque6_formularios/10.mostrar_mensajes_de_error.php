<?php

/*

TEMA 10 — Mostrar Mensajes de Error y Éxito Profesionalmente en Formularios PHP

🎯 Objetivo del tema

Aprender a comunicar correctamente al usuario qué ocurrió después de enviar un formulario:

errores de validación
éxito del proceso
advertencias
mensajes claros y útiles

Esto impacta directamente la experiencia del usuario y la calidad profesional del sistema.

🧠 Concepto Profesional

Un formulario no solo procesa datos. También debe retroalimentar al usuario.

Mal sistema:

Error

Buen sistema:

El correo es obligatorio.
La contraseña debe tener mínimo 8 caracteres.
Registro completado correctamente.

🔥 Tipos de mensajes comunes

Tipo	        Uso
Error	        Algo salió mal
Éxito	        Acción completada
Advertencia	    Atención requerida

Información	Mensaje neutral

✅ Código Completo Funcional

*/

$errores = [];
$exito = "";
$nombre = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $email  = trim($_POST["email"] ?? "");

    if ($nombre == "") {
        $errores[] = "El nombre es obligatorio.";
    }

    if ($email == "") {
        $errores[] = "El correo es obligatorio.";
    }

    if (empty($errores)) {
        $exito = "Formulario enviado correctamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mensajes</title>

<style>
.error{
    background:#ffdede;
    color:#a10000;
    padding:10px;
    margin-bottom:10px;
    border:1px solid #ffb5b5;
}

.success{
    background:#dfffe0;
    color:#0b6b15;
    padding:10px;
    margin-bottom:10px;
    border:1px solid #9be7a0;
}
</style>

</head>
<body>

<h2>Formulario</h2>

<?php foreach ($errores as $error): ?>
    <div class="error"><?php echo $error; ?></div>
<?php endforeach; ?>

<?php if ($exito != ""): ?>
    <div class="success"><?php echo $exito; ?></div>
<?php endif; ?>

<form method="POST">

    <input type="text" name="nombre" placeholder="Nombre">
    <br><br>

    <input type="text" name="email" placeholder="Correo">
    <br><br>

    <button type="submit">Enviar</button>

</form>

</body>
</html>

<?php

/*

🔍 Explicación Técnica
1️⃣ Errores múltiples

$errores = [];

Permite guardar varios errores y mostrarlos juntos.

2️⃣ Mensaje de éxito
$exito = "";

Solo se muestra si todo salió bien.

3️⃣ Mostrar errores con foreach
foreach ($errores as $error)

Imprime todos los errores detectados.

4️⃣ Mostrar éxito condicional
if ($exito != "")

Solo aparece cuando no hubo fallos.

🧠 Ejemplo Profesional Real

Usuario envía vacío
El nombre es obligatorio.
El correo es obligatorio.
Usuario corrige

Formulario enviado correctamente.

✅ Buenas Prácticas Profesionales

✔ Mensajes específicos

Mal:

Error en formulario

Bien:

El correo no tiene formato válido.
✔ Mostrar todos los errores a la vez

No uno por uno.

✔ Diferenciar colores y estilos

Error ≠ éxito.

✔ Lenguaje claro

Sin términos técnicos innecesarios.

✔ No revelar información sensible

Mal:

La consulta SQL falló en línea 23

❌ Errores Comunes
❌ Mensajes genéricos

No ayudan.

❌ Mostrar éxito aunque falle algo

Muy grave.

❌ Un solo error por envío

Molesta al usuario.

❌ Mensajes agresivos
Ingresaste mal todo.

🔥 Nivel Senior: UX Real

Un sistema profesional reduce frustración del usuario con:

mensajes claros
campos marcados
conservar datos escritos
respuesta rápida

🧪 Resultado Esperado

Caso vacío
El nombre es obligatorio.
El correo es obligatorio.
Caso correcto
Formulario enviado correctamente.

📌 Lo que aprendiste hoy

✔ Cómo mostrar errores
✔ Cómo mostrar éxito
✔ Uso de arrays de errores
✔ UX profesional en formularios
✔ Buenas prácticas reales

*/