<?php

// 🧠 TEMA 4 — OPERADORES ARITMÉTICOS EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// Los operadores aritméticos permiten realizar operaciones matemáticas entre valores.

// Son la base de:

// Cálculos financieros
// Lógica de negocio
// Procesamiento de datos
// Algoritmos

// 🔑 OPERADORES PRINCIPALES

// Operador	    Nombre	        Ejemplo	    Resultado
// +	        Suma	        5 + 3	    8
// -	        Resta	        5 - 3	    2
// *	        Multiplicación	5 * 3	    15
// /	        División	    10 / 2	    5
// %	        Módulo	        10 % 3	    1
// **	        Potencia	    2 ** 3	    8

// 💻 CÓDIGO COMPLETO FUNCIONAL


$a = 10;
$b = 3;

echo "Suma: " . ($a + $b) . "<br>";
echo "Resta: " . ($a - $b) . "<br>";
echo "Multiplicación: " . ($a * $b) . "<br>";
echo "División: " . ($a / $b) . "<br>";
echo "Módulo: " . ($a % $b) . "<br>";
echo "Potencia: " . ($a ** $b) . "<br>";

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// 🔸 División /

// Siempre retorna float (aunque sea exacta)
// 10 / 2 → 5 (float)

// 🔸 Módulo %

// Devuelve el residuo de una división

// 10 % 3 → 1

// 👉 Uso profesional:

// Validar números pares/impares
// Ciclos
// Distribución lógica

// 🔸 Potencia **

// 2 ** 3 → 8

// Más eficiente que usar funciones externas.

// ⚠️ PRECEDENCIA DE OPERADORES (CRÍTICO)

// echo 2 + 3 * 4; // resultado: 14

// 👉 Primero multiplicación, luego suma

// Para controlar:

// echo (2 + 3) * 4; // resultado: 20

// ✅ BUENAS PRÁCTICAS

// Usa paréntesis para evitar ambigüedad
// No dependas de la precedencia implícita
// Mantén claridad en operaciones complejas

// Ejemplo profesional:

// $total = ($precio * $cantidad) + $impuesto;

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. Mezclar strings con números
// $total = "10" + 5; // PHP convierte → puede ocultar errores

// 2. División por cero
// $resultado = 10 / 0; // ERROR

// 3. No usar paréntesis
// $total = 10 + 5 * 2; // puede no ser lo esperado

// ⚠️ PUNTO PROFESIONAL

// Los operadores aritméticos parecen básicos…
// pero son responsables de muchos errores en producción.

// Un desarrollador profesional:

// Controla el orden de ejecución
// Valida datos antes de operar
// Evita ambigüedad