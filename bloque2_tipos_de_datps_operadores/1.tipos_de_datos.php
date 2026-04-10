<?php

// 🧠 TEMA 1 — TIPOS DE DATOS EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// PHP es un lenguaje de tipado dinámico, lo que significa que no necesitas declarar el tipo de dato explícitamente, pero eso NO significa que no existan tipos.

// Internamente, PHP maneja tipos de datos muy definidos, y entenderlos es crítico para evitar errores lógicos, vulnerabilidades y comportamientos inesperados.

// 🔑 Tipos de datos fundamentales:

// 1. STRING (cadena de texto)

// Representa texto.

$nombre = "Carlos";

// Puede usar comillas simples ' ' o dobles " "
// Las dobles interpretan variables, las simples no


// 2. INTEGER (entero)

// Números sin decimales.

$edad = 30;

// 3. FLOAT / DOUBLE (decimal)

// Números con punto decimal.

$precio = 19.99;

// 4. BOOLEAN (booleano)

// Solo tiene dos valores posibles:

$activo = true;
$inactivo = false;

// 💻 CÓDIGO COMPLETO FUNCIONAL


$nombre = "Carlos";     // string
$edad = 30;             // integer
$altura = 1.75;         // float
$activo = true;         // boolean

echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . "<br>";
echo "Activo: " . $activo . "<br>";

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// PHP asigna automáticamente el tipo según el valor
// Internamente usa una estructura llamada zval
// Los booleanos al imprimirse:
// true → se convierte en 1
// false → no imprime nada

// Ejemplo crítico:

echo true;  // imprime 1
echo false; // imprime vacío

// Esto genera errores comunes en debugging si no lo entiendes.

// ✅ BUENAS PRÁCTICAS

// Usa nombres de variables descriptivos:

$nombreUsuario = "Carlos";

// No mezcles tipos sin control

// Usa var_dump() para depurar:

var_dump($edad);

// Sé consciente del tipo aunque PHP no te obligue

// ❌ ERRORES COMUNES (CRÍTICOS)

// Confundir string con número:

// $numero = "10"; // esto es STRING, no integer
// Esperar que false imprima algo:
// echo false; // no verás nada → error típico
// Mezclar tipos sin control:
// $total = "10" + 5; // PHP convierte automáticamente → puede ser peligroso

// ⚠️ PUNTO PROFESIONAL

// Un programador junior ignora los tipos porque “PHP lo maneja”.
// Un programador profesional controla los tipos para evitar errores invisibles.