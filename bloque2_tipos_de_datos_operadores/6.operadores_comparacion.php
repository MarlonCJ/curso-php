<?php

// 🧠 TEMA 6 — OPERADORES DE COMPARACIÓN EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// Los operadores de comparación permiten evaluar relaciones entre valores.

// 👉 Siempre retornan un resultado booleano:

// true
// false

// Son la base de:

// Condicionales (if, else)
// Validaciones
// Lógica de negocio

// 🔑 OPERADORES PRINCIPALES

// Operador	Descripción	Ejemplo	Resultado

// ==	Igual (valor)	5 == "5"	true
// ===	Igual (valor y tipo)	5 === "5"	false
// !=	Diferente	5 != 3	true
// !==	Diferente (tipo y valor)	5 !== "5"	true
// >	Mayor que	10 > 5	true
// <	Menor que	5 < 10	true
// >=	Mayor o igual	5 >= 5	true
// <=	Menor o igual	5 <= 10	true

// ⚠️ DIFERENCIA CRÍTICA: == vs ===

// 🔸 Comparación débil (==)
// 5 == "5" → true

// 👉 PHP convierte tipos automáticamente

// 🔸 Comparación estricta (===)

// 5 === "5" → false

// 👉 Compara valor y tipo

// 💻 CÓDIGO COMPLETO FUNCIONAL

$a = 5;
$b = "5";

var_dump($a == $b);  // true
var_dump($a === $b); // false

$edad = 18;

var_dump($edad >= 18); // true

$numero = 10;

var_dump($numero != 5); // true

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// PHP intenta convertir tipos automáticamente cuando usas ==.

// Ejemplo peligroso:

// "0" == false → true
// "" == 0 → true

// 👉 Esto puede romper validaciones críticas.

// ✅ BUENAS PRÁCTICAS

// ✔ Usa SIEMPRE === y !== en producción
// ✔ Evita comparaciones débiles
// ✔ Sé explícito en validaciones

// Ejemplo profesional:

if ($edad === 18) {
    echo "Mayor de edad exacto";
}

// ❌ ERRORES COMUNES (CRÍTICOS)

 // 1. Usar == en validaciones sensibles
// if ($password == $input) // peligroso
// 2. No considerar el tipo
// $valor = "0";

// if ($valor) {
//     // no entra → comportamiento inesperado
// }

// 3. Comparaciones ambiguas

// if ($dato == false)

// 👉 Puede evaluar múltiples valores como false

// ⚠️ PUNTO PROFESIONAL

// La mayoría de bugs críticos en PHP vienen de comparaciones débiles.

// Un desarrollador profesional:

// Usa comparación estricta
// Controla tipos
// Evita ambigüedad