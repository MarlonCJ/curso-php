<?php

// 🧠 TEMA 9 — OPERADOR TERNARIO EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// El operador ternario es una forma compacta de escribir estructuras condicionales simples.

// Reemplaza un if-else cuando la lógica es directa.

// 🔑 ESTRUCTURA

// condición ? valor_si_true : valor_si_false;

// ⚙️ EJEMPLO BÁSICO

// $edad = 18;

// $resultado = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";

// 💻 CÓDIGO COMPLETO FUNCIONAL

$edad = 20;

$mensaje = ($edad >= 18) ? "Puede ingresar" : "Acceso denegado";

echo $mensaje;

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// El operador ternario evalúa:

// La condición
// Si es true → ejecuta la primera expresión
// Si es false → ejecuta la segunda

// 🔸 Equivalente en if-else

// if ($edad >= 18) {
//     $mensaje = "Puede ingresar";
// } else {
//     $mensaje = "Acceso denegado";
// }

// ⚠️ USO AVANZADO (ANIDADO)

// $resultado = ($nota >= 9) ? "Excelente" : (($nota >= 6) ? "Aprobado" : "Reprobado");

// ⚠️ Esto es válido… pero peligroso

// ✅ BUENAS PRÁCTICAS

// ✔ Usar solo para condiciones simples
// ✔ Mantener legibilidad
// ✔ Evitar ternarios anidados

// Ejemplo profesional:

// $estado = ($activo === true) ? "Activo" : "Inactivo";

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. Abusar del ternario
// $resultado = ($a > 5) ? ($b > 3 ? "X" : "Y") : ($c > 2 ? "Z" : "W");

// 👉 Código ilegible → rechazo profesional

// 2. No usar paréntesis
// $mensaje = $edad >= 18 ? "OK" : "NO";

// 👉 Puede generar ambigüedad en casos complejos

// 3. Usarlo cuando no corresponde

// 👉 Si la lógica es compleja → usa if

// ⚠️ PUNTO PROFESIONAL

// El operador ternario NO es para ahorrar líneas…
// es para mejorar claridad cuando se usa correctamente.

// Un desarrollador profesional:

// Sabe cuándo usarlo
// Sabe cuándo NO usarlo