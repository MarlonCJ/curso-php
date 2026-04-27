<?php

/*

TEMA 9 — Envío del Formulario al Mismo Archivo (action="") y Patrón Profesional Básico

🎯 Objetivo del tema

Aprender a procesar un formulario en la misma página donde se muestra, una práctica muy común en proyectos PHP pequeños y medianos.

Esto permite mostrar formulario + errores + resultado en un solo archivo.

🧠 Concepto Profesional

Un formulario HTML puede enviar datos a:

Otro archivo
La misma página actual

Cuando usamos:

<form method="POST" action="">

o simplemente:

<form method="POST">

El navegador envía el formulario al mismo archivo.

🔥 ¿Por qué se usa mucho?

Porque permite:

Mostrar errores arriba del formulario
Mantener datos escritos
Procesar y responder en la misma vista
Menos archivos en proyectos simples
Flujo rápido de desarrollo

✅ Código Completo Funcional

*/

$nombre = "";
$mensaje = "";
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");

    if ($nombre == "") {
        $errores[] = "El nombre es obligatorio.";
    }

    if (empty($errores)) {
        $mensaje = "Bienvenido, " . htmlspecialchars($nombre);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mismo Archivo</title>
</head>
<body>

<h2>Registro</h2>

<?php foreach ($errores as $error): ?>
    <p><?php echo $error; ?></p>
<?php endforeach; ?>

<?php if ($mensaje != ""): ?>
    <p><?php echo $mensaje; ?></p>
<?php endif; ?>

<form method="POST" action="">
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">
    <button type="submit">Enviar</button>
</form>

</body>
</html>

<?php

/*

🔍 Explicación Técnica

1️⃣ El formulario apunta al mismo archivo

<form method="POST" action="">

action="" significa página actual.

También suele omitirse:

<form method="POST">

2️⃣ Primero carga normal
GET → muestra formulario vacío

3️⃣ Luego envío
POST → procesa datos y vuelve a renderizar página

4️⃣ Reutilización del valor
value="<?php echo htmlspecialchars($nombre); ?>"

Mantiene el texto escrito tras error.

🧠 Flujo Profesional

Usuario abre página
↓
Formulario visible
↓
Envía datos
↓
PHP valida
↓
Si error → muestra errores
Si correcto → muestra éxito

✅ Patrón Profesional Básico

1. Inicializar variables
2. Detectar POST
3. Validar
4. Procesar
5. Renderizar HTML

Ese orden evita caos.

✅ Buenas Prácticas Profesionales

✔ Lógica PHP arriba, HTML abajo

Orden limpio.

✔ Mantener valores ingresados

Mejora UX.

✔ Escapar salida
htmlspecialchars()

✔ Mostrar errores claros

No mensajes vagos.

❌ Errores Comunes
❌ Mezclar PHP por todo el HTML

Código difícil de mantener.

❌ Perder datos del usuario tras error

Molesta mucho.

❌ Mostrar éxito sin validar

Error lógico.

❌ No escapar valores en value

Riesgo XSS.

⚠️ Nota Senior Importante

En proyectos grandes se usa más:

MVC
Controladores
Rutas
PRG Pattern (Post Redirect Get)

Pero dominar este patrón primero es obligatorio.

🧪 Resultado Esperado

Caso vacío
El nombre es obligatorio.
Caso correcto
Bienvenido, Marlon
📌 Lo que aprendiste hoy

✔ Enviar al mismo archivo
✔ action=""
✔ Flujo GET / POST
✔ Reutilizar inputs
✔ Patrón profesional básico

*/