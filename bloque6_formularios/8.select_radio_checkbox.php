<?php

/*

TEMA 8 — select, radio y checkbox en Formularios PHP

🎯 Objetivo del tema

Aprender a trabajar con campos de selección, donde el usuario elige opciones predefinidas en lugar de escribir texto libre.

Estos controles son fundamentales en formularios profesionales.

🧠 Concepto Profesional

Usamos estos elementos cuando queremos controlar la entrada del usuario:

Elemento	Uso
select	    Elegir una opción de lista
radio	    Elegir solo una opción
checkbox	Elegir una o varias opciones

Esto reduce errores y estandariza datos.

🔥 Casos reales de empresa

select

Ciudad
Cargo
Tipo de documento
País
radio
Género
Estado civil
Sí / No

checkbox

Aceptar términos
Habilidades
Intereses
Permisos

✅ Código Completo Funcional

*/

$ciudad = "";
$genero = "";
$habilidades = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ciudad = $_POST["ciudad"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $habilidades = $_POST["habilidades"] ?? [];

    echo "<h3>Datos recibidos</h3>";
    echo "<p>Ciudad: " . htmlspecialchars($ciudad) . "</p>";
    echo "<p>Género: " . htmlspecialchars($genero) . "</p>";

    echo "<p>Habilidades:</p>";

    foreach ($habilidades as $item) {
        echo "<p>- " . htmlspecialchars($item) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Select Radio Checkbox</title>
</head>
<body>

<form method="POST">

    <label>Ciudad:</label>
    <select name="ciudad">
        <option value="Villavicencio">Villavicencio</option>
        <option value="Bogotá">Bogotá</option>
        <option value="Medellín">Medellín</option>
    </select>

    <br><br>

    <label>Género:</label>

    <input type="radio" name="genero" value="Masculino"> Masculino
    <input type="radio" name="genero" value="Femenino"> Femenino

    <br><br>

    <label>Habilidades:</label>

    <input type="checkbox" name="habilidades[]" value="PHP"> PHP
    <input type="checkbox" name="habilidades[]" value="JavaScript"> JavaScript
    <input type="checkbox" name="habilidades[]" value="CSS"> CSS

    <br><br>

    <button type="submit">Enviar</button>

</form>

</body>
</html>

<?php
/*

🔍 Explicación Técnica

1️⃣ select

<select name="ciudad">

Permite una opción entre varias.

PHP:

$_POST["ciudad"]

2️⃣ radio

<input type="radio" name="genero" value="Masculino">
<input type="radio" name="genero" value="Femenino">

Todos comparten el mismo name.

Eso hace que solo se pueda elegir uno.

PHP:

$_POST["genero"]

3️⃣ checkbox

<input type="checkbox" name="habilidades[]" value="PHP">

El [] indica que llegarán como arreglo.

PHP:

$_POST["habilidades"]

Ejemplo:

["PHP", "CSS"]

🧠 Flujo Profesional

Usuario selecciona opciones
↓
PHP recibe valores controlados
↓
Validar selección
↓
Guardar en sistema

✅ Buenas Prácticas Profesionales

✔ Usa opciones controladas

Mejor que texto libre cuando sea posible.

✔ Siempre validar backend

Aunque venga del select.

✔ Escapar salida
htmlspecialchars()

✔ Checkbox múltiple con []

Correcto para arrays.

✔ Usa valores limpios internos

Ejemplo:

dev_php
dev_js
admin

❌ Errores Comunes

❌ Checkbox sin []
name="habilidades"

Solo recibe uno o comportamiento incorrecto.

❌ Radios con distinto name

Permitiría marcar varios.

❌ No validar opción enviada

Usuario puede manipular valores manualmente.

❌ Mostrar salida sin escapar

Riesgo XSS.

🧪 Resultado Esperado

Entrada:

Ciudad: Villavicencio
Genero: Masculino
Habilidades: PHP, CSS
Salida:
Datos recibidos
Ciudad: Villavicencio
Género: Masculino

Habilidades:
- PHP
- CSS

📌 Lo que aprendiste hoy

✔ Cómo usar select
✔ Cómo usar radio
✔ Cómo usar checkbox
✔ Arrays con []
✔ Buenas prácticas reales

*/