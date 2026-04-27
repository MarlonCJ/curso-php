<?php

/*

TEMA 12 — Buenas Prácticas en Formularios PHP (Nivel Empresa)

🎯 Objetivo del tema

Aprender estándares profesionales para construir formularios mantenibles, seguros, claros y escalables.

Un formulario funcional no siempre es un formulario profesional.

🧠 Concepto Profesional

Un junior suele pensar:

Si funciona, está bien.

Un senior piensa:

¿Es seguro?
¿Es mantenible?
¿Es claro?
¿Escala?
¿Da buena experiencia?

🔥 Principios Reales de Empresa

1️⃣ Separar lógica y presentación

Correcto:

PHP arriba procesa datos
HTML abajo renderiza vista

Incorrecto:

PHP mezclado por todo el HTML sin orden.

2️⃣ Validar siempre en backend

Aunque uses:

required
type="email"
minlength

Siempre validar en PHP también.

3️⃣ Escapar salida

htmlspecialchars($dato)

Cada vez que imprimas datos del usuario.

4️⃣ Variables claras

$nombre
$email
$errores
$mensajeExito

No:

$a
$b
$x1

5️⃣ Mensajes útiles

Mal:

Error.

Bien:

El correo es obligatorio.

✅ Código Profesional Base

*/

$errores = [];
$exito = "";

$nombre = trim($_POST["nombre"] ?? "");
$email  = trim($_POST["email"] ?? "");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($nombre == "") {
        $errores[] = "El nombre es obligatorio.";
    }

    if ($email == "") {
        $errores[] = "El correo es obligatorio.";
    }

    if (empty($errores)) {
        $exito = "Formulario procesado correctamente.";
    }
}
?>

<?php 

/*

Ordenado, limpio y mantenible.

🧠 UX Profesional

✔ Labels claros
<label>Correo electrónico</label>

✔ Placeholders útiles
placeholder="ejemplo@correo.com"

✔ Campos agrupados

Formulario limpio visualmente.

✔ Feedback inmediato

Errores claros y visibles.

🔒 Seguridad Profesional

✔ Nunca confiar en POST

Siempre validar.

✔ No mostrar errores internos

Mal:

Undefined index line 27

✔ Usar tokens CSRF (más adelante)

Crítico en sistemas reales.

✔ HTTPS en producción

Obligatorio.

⚙️ Mantenibilidad

✔ Reutilizar funciones

limpiarTexto()
validarEmail()

✔ Centralizar validaciones

No repetir lógica.

✔ Nombres consistentes

Frontend y backend alineados.

❌ Errores Comunes de Juniors
❌ Formularios gigantes sin estructura
❌ HTML bonito pero backend malo
❌ Variables caóticas
❌ Validar solo navegador
❌ Código duplicado

🔥 Mentalidad Senior

Un formulario profesional debe cumplir:

Funciona

+ Seguro
+ Claro
+ Escalable
+ Fácil de mantener
+ Buena experiencia

🧪 Mini Ejemplo de Calidad

Malo

if($_POST){
echo "ok";
}

Mejor

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // validar
    // procesar
}

📌 Lo que aprendiste hoy

✔ Estándares empresariales
✔ Código limpio en formularios
✔ Seguridad base
✔ UX profesional
✔ Mentalidad senior

*/