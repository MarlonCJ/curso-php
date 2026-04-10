<?php

// 🧠 TEMA 8 — PRECEDENCIA DE OPERADORES EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La precedencia de operadores define el orden en que PHP evalúa las operaciones cuando hay múltiples operadores en una misma expresión.

// 👉 Si no controlas esto, tu código puede:

// Dar resultados incorrectos
// Generar bugs difíciles de detectar
// Fallar en producción

// 🔑 PRINCIPIO CLAVE

// PHP NO evalúa de izquierda a derecha siempre.
// Evalúa según una jerarquía de prioridad.

// ⚙️ EJEMPLO CRÍTICO
// echo 2 + 3 * 4;

// 👉 Resultado: 14

// NO es 20

// Porque:

// 3 * 4 = 12
// 2 + 12 = 14

// 💻 CÓDIGO COMPLETO FUNCIONAL

$resultado1 = 2 + 3 * 4;
echo "Sin paréntesis: $resultado1 <br>";

$resultado2 = (2 + 3) * 4;
echo "Con paréntesis: $resultado2 <br>";

$valor = true || false && false;
var_dump($valor); // true


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// 🔸 Orden simplificado de precedencia

// () → Paréntesis
// ** → Potencia
// *, /, % → Multiplicación/división
// +, - → Suma/resta
// >, <, ==, === → Comparación
// && → AND
// || → OR

// 🔸 Caso crítico con lógicos

// true || false && false

// Se evalúa como:

// true || (false && false)

// 👉 Resultado: true

// ⚠️ CASO REAL DE ERROR

// if ($edad >= 18 && $activo || $admin)

// 👉 ¿Qué evalúa realmente?

// if ( ($edad >= 18 && $activo) || $admin )

// ⚠️ Si $admin es true → entra SIEMPRE
// aunque no cumpla las otras condiciones

// ✅ BUENAS PRÁCTICAS

// ✔ Usa SIEMPRE paréntesis en condiciones complejas
// ✔ No confíes en memoria de precedencia
// ✔ Prioriza claridad sobre “código corto”

// Ejemplo profesional:

// if (($edad >= 18 && $activo) || $admin === true) {
//     // lógica clara y controlada
// }


// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. No usar paréntesis
// $total = 10 + 5 * 2;

// 2. Lógica ambigua
// if ($a && $b || $c)

// 3. Asumir orden incorrecto
// true || false && false // mal interpretado

// ⚠️ PUNTO PROFESIONAL

// La precedencia es una de las principales causas de errores silenciosos.

// Un desarrollador profesional:

// No adivina
// No asume
// Controla explícitamente