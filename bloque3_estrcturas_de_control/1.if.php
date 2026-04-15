<?php

// 🧠 TEMA 1: ESTRUCTURA CONDICIONAL if

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La estructura if es la base de la toma de decisiones en programación.

// Permite ejecutar un bloque de código solo si una condición se cumple.

// En términos técnicos:

// if evalúa una expresión booleana (true o false).
// Si el resultado es true, ejecuta el bloque.
// Si es false, lo ignora.

// 🔍 ¿QUÉ ES UNA CONDICIÓN?

// Es una expresión que devuelve:

// true (verdadero)
// false (falso)

// Ejemplos:

// $edad > 18
// $nombre == "Carlos"
// $activo === true

// 💻 CÓDIGO COMPLETO FUNCIONAL


$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad";
}


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// $edad = 20;
// → Se define una variable entera

// if ($edad >= 18)
// → Se evalúa una condición:

// ¿20 es mayor o igual a 18?

// Resultado: true
// { ... }

// → Bloque de ejecución del if

// echo "Eres mayor de edad";

// → Se ejecuta SOLO porque la condición fue verdadera

// ⚠️ SI LA CONDICIÓN FUERA FALSA

// $edad = 15;

// Resultado:

// → No imprime nada
// → El bloque no se ejecuta

// 🧱 BUENAS PRÁCTICAS

// Usar comparaciones claras (=== mejor que ==)

// Evitar condiciones ambiguas

// Mantener el bloque {} aunque sea una sola línea

// No mezclar lógica compleja dentro del if

// ✔ Correcto:

// if ($edad >= 18) {
//     echo "Mayor de edad";
// }

// ❌ Incorrecto:

// if($edad>=18) echo "Mayor";

// ❌ ERRORES COMUNES

// ❌ Usar = en lugar de ==

// if ($edad = 18) // ERROR GRAVE

// ❌ No usar llaves

// ❌ Condiciones mal construidas

// ❌ Comparaciones débiles (== en vez de ===)

// ❌ Pensar que siempre se ejecuta

// 🎯 RESUMEN TÉCNICO

// if evalúa condiciones
// Solo ejecuta si es true
// Es la base de toda lógica condicional
// Se usa en absolutamente todos los sistemas