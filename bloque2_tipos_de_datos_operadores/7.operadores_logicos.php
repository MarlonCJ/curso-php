<?php

// 🧠 TEMA 7 — OPERADORES LÓGICOS EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// Los operadores lógicos permiten combinar múltiples condiciones para tomar decisiones más complejas.

// Son esenciales en:

// Validaciones avanzadas
// Control de acceso
// Reglas de negocio
// Flujo de ejecución

// 🔑 OPERADORES LÓGICOS PRINCIPALES

// Operador	    Nombre	    Ejemplo	        Resultado
// &&	        AND	        true && true	true
// ||		    OR          true && false	true
// !	        NOT	        !true	        false

// ⚙️ FUNCIONAMIENTO

// 🔸 AND (&&)

// Ambas condiciones deben ser verdaderas

// true && true → true
// true && false → false

// 🔸 OR (||)

// Al menos una condición debe ser verdadera

// true || false → true
// false || false → false

// 🔸 NOT (!)

// Invierte el valor

// !true → false
// !false → true

// 💻 CÓDIGO COMPLETO FUNCIONAL

$edad = 20;
$tieneLicencia = true;

if ($edad >= 18 && $tieneLicencia) {
    echo "Puede conducir<br>";
}

if ($edad < 18 || !$tieneLicencia) {
    echo "No puede conducir<br>";
}

$activo = false;

if (!$activo) {
    echo "Usuario inactivo<br>";
}

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// 🔸 Evaluación corta (Short-Circuit)

// PHP optimiza evaluaciones:

// false && algo()

// 👉 algo() NO se ejecuta

// true || algo()

// 👉 algo() NO se ejecuta

// Esto es clave para:

// Optimización
// Evitar errores
// Control de flujo

// ⚠️ PRECEDENCIA (CRÍTICO)

// true || false && false → true

// 👉 && se evalúa primero

// Equivalente a:

// true || (false && false)

// ✅ BUENAS PRÁCTICAS

// ✔ Usa paréntesis para claridad
// ✔ Divide condiciones complejas
// ✔ Nombra variables booleanas claramente

// Ejemplo profesional:

// if (($edad >= 18) && ($cuentaActiva === true)) {
//     // lógica clara
// }

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. No usar paréntesis

// if ($a || $b && $c)

// 👉 Ambiguo → errores lógicos

// 2. Condiciones demasiado largas

// if ($a && $b || $c && !$d || $e)

// 👉 Código difícil de mantener

// 3. No entender NOT (!)

// if (!$activo)

// 👉 Muchos no entienden qué está evaluando

// ⚠️ PUNTO PROFESIONAL

// Los operadores lógicos son donde se define la inteligencia del sistema.

// Un desarrollador profesional:

// Simplifica condiciones
// Hace código legible
// Evita ambigüedad