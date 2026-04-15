<?php

// 🧠 TEMA 3: if - elseif - else

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La estructura if - elseif - else permite evaluar múltiples condiciones en secuencia.

// Es utilizada cuando tienes más de dos posibles escenarios.

// 🔥 CONCEPTO CLAVE

// PHP evalúa las condiciones de arriba hacia abajo
// y ejecuta la primera que sea verdadera.

// Después de eso:

// ❌ NO evalúa las demás
// ❌ NO ejecuta más bloques

// 💻 CÓDIGO COMPLETO FUNCIONAL

$nota = 85;

if ($nota >= 90) {
    echo "Excelente";
} elseif ($nota >= 70) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// $nota = 85;

// Evaluación paso a paso:

// if ($nota >= 90)

// → 85 ≥ 90 → ❌ false

// elseif ($nota >= 70)

// → 85 ≥ 70 → ✅ true

// ✔ Se ejecuta:

// echo "Aprobado";

// 🚫 El else ya NO se evalúa

// ⚠️ ORDEN IMPORTA (ERROR CRÍTICO)

// if ($nota >= 70) {
//     echo "Aprobado";
// } elseif ($nota >= 90) {
//     echo "Excelente";
// }

// 🔴 ERROR LÓGICO:

// Si $nota = 95, entra en >= 70

// NUNCA llegará a "Excelente"

// 🧱 BUENAS PRÁCTICAS

// ✔ Ordenar de mayor a menor prioridad
// ✔ Evitar condiciones redundantes
// ✔ Cubrir todos los casos posibles

// ✔ Correcto:

// if ($nota >= 90) {
//     echo "Excelente";
// } elseif ($nota >= 70) {
//     echo "Aprobado";
// } else {
//     echo "Reprobado";
// }

// ❌ ERRORES COMUNES

// ❌ Mal orden de condiciones
// ❌ Condiciones solapadas
// ❌ No entender que solo se ejecuta UNA
// ❌ Olvidar el else final
// ❌ Repetir lógica innecesaria

// 🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

// Esto ya no es solo código…

// 👉 Es diseño de decisiones

// Un mal orden aquí = errores reales en sistemas (pagos, usuarios, seguridad, etc.)

// 🎯 RESUMEN TÉCNICO

// Evalúa múltiples condiciones
// Se ejecuta SOLO la primera verdadera
// El orden define el comportamiento
// Es clave en lógica compleja