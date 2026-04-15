<?php

// 🧠 TEMA 2: if - else

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La estructura if - else extiende el comportamiento del if.

// Permite manejar dos caminos obligatorios:

// Si la condición es verdadera → ejecuta un bloque
// Si es falsa → ejecuta otro bloque

// Esto elimina ambigüedad en el flujo del programa.

// 🔍 DIFERENCIA CLAVE CON if

// if → puede no ejecutar nada
// if - else → SIEMPRE ejecuta un bloque

// 💻 CÓDIGO COMPLETO FUNCIONAL


$edad = 16;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// $edad = 16;

// → Variable tipo entero

// if ($edad >= 18)

// → Evaluación:

// ¿16 ≥ 18? → false

// Como es false, entra al else

// Se ejecuta:

// echo "Eres menor de edad";

// ⚙️ COMPORTAMIENTO DEL FLUJO

// Condición	Bloque ejecutado
// true	        if
// false	    else

// 🧱 BUENAS PRÁCTICAS

// ✔ Siempre cubrir ambos escenarios cuando sea necesario
// ✔ Mantener claridad en los mensajes
// ✔ No duplicar lógica en ambos bloques

// ✔ Correcto:

// if ($activo === true) {
//     echo "Usuario activo";
// } else {
//     echo "Usuario inactivo";
// }

// ❌ ERRORES COMUNES

// ❌ Pensar que ambos bloques se ejecutan
// ❌ Condiciones mal evaluadas
// ❌ Código redundante
// ❌ No considerar todos los escenarios
// ❌ Uso incorrecto de operadores

// 🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

// Un programador junior usa if
// Un programador profesional controla el flujo completo

// Aquí ya empiezas a construir decisiones reales.

// 🎯 RESUMEN TÉCNICO

// if - else garantiza ejecución
// Solo un bloque se ejecuta
// Es base para validaciones y lógica real