<?php

// 🧠 TEMA 4: OPERADORES LÓGICOS (&&, ||, !)

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// Los operadores lógicos permiten combinar múltiples condiciones dentro de una sola expresión.

// Esto es fundamental para construir lógica real.

// 🔥 CONCEPTO CLAVE

// No siempre basta con una condición.
// Necesitas evaluar múltiples factores al mismo tiempo.

// ⚙️ OPERADORES PRINCIPALES

// 1. && (AND — Y lógico)

// 👉 Todas las condiciones deben ser verdaderas

// if ($edad >= 18 && $activo === true)

// ✔ Solo entra si TODO es verdadero

// 2. || (OR — O lógico)

// 👉 Al menos una condición debe ser verdadera

// if ($rol === "admin" || $rol === "superadmin")

// ✔ Entra si UNA se cumple

// 3. ! (NOT — Negación)

// 👉 Invierte el valor lógico

// if (!$activo)

// ✔ Si $activo = false, entra

// 💻 CÓDIGO COMPLETO FUNCIONAL

$edad = 20;
$activo = true;

if ($edad >= 18 && $activo === true) {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// $edad >= 18 → true
// $activo === true → true

// 👉 true && true = true

// ✔ Se ejecuta:

// echo "Acceso permitido";

// ⚠️ CASOS IMPORTANTES

// AND (&&)

// Condición A	Condición B	    Resultado
// true	        true	        true
// true	        false	        false
// false	    true	        false
// false	    false	        false

// OR (||)

// Condición A	Condición B	    Resultado
// true	        true	        true
// true	        false	        true
// false	    true	        true
// false	    false	        false

// 🧱 BUENAS PRÁCTICAS

// ✔ Usar paréntesis para claridad:

// if (($edad >= 18 && $activo) || $rol === "admin")

// ✔ Separar condiciones complejas
// ✔ Usar nombres claros de variables

// ❌ ERRORES COMUNES

// ❌ Confundir && con ||
// ❌ No entender precedencia
// ❌ Condiciones mal agrupadas
// ❌ Abusar de lógica compleja en una sola línea
// ❌ No usar paréntesis

// 🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

// Aquí defines reglas reales:

// Acceso a sistemas
// Validaciones de seguridad
// Permisos de usuario

// Un error aquí = vulnerabilidad

// 🎯 RESUMEN TÉCNICO

// && → todo debe cumplirse
// || → al menos uno
// ! → invierte condición
// Permiten lógica avanzada