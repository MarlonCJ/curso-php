<?php

// 🧩 TEMA 4 — SINTAXIS BÁSICA DE PHP

// 🎯 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La sintaxis define cómo escribes instrucciones que el motor PHP puede interpretar.

// Pero a nivel profesional debes entender esto:

// PHP es un lenguaje imperativo interpretado, donde cada instrucción se ejecuta en orden y debe estar perfectamente definida.

// 🔥 REGLAS FUNDAMENTALES DE SINTAXIS

// Cada instrucción termina en ;
// PHP es sensible a variables ($variable)
// No es estrictamente tipado (pero sí controlado internamente)
// El orden de ejecución es secuencial

// ⚙️ CÓDIGO COMPLETO FUNCIONAL
// <?php

// $nombre = "Marlonete";
// $edad = 25;

// echo "Nombre: " . $nombre;
// echo "<br>";
// echo "Edad: " . $edad;

// 🔍 EXPLICACIÓN TÉCNICA DETALLADA

// 🔹 $nombre = "Marlonete";
// $ → indica variable
// nombre → identificador
// "Marlonete" → string almacenado en memoria
// = → operador de asignación
// 🔹 ; (PUNTO Y COMA)

// Esto NO es opcional.

// Indica al intérprete: “esta instrucción terminó”.

// Sin esto → error fatal.

// 🔹 echo

// No es una función (es una construcción del lenguaje)
// Envía salida al buffer

// 🔹 "." (concatenación)

// Une valores:

// "Hola " . $nombre

// ⚠️ PUNTO CRÍTICO

// PHP ejecuta línea por línea:

// $nombre = "Carlos";
// echo $nombre;

// Si inviertes el orden:

// echo $nombre;
// $nombre = "Carlos";

// → ERROR lógico (variable no definida)

// 🧱 BUENAS PRÁCTICAS

// Nombres de variables descriptivos ($nombreUsuario)
// Una instrucción por línea
// Código legible
// Evitar abreviaciones innecesarias

// ❌ ERRORES COMUNES

// Olvidar ;
// No usar $ en variables
// Concatenar mal (+ en vez de .)
// Usar variables no definidas
// Mezclar comillas incorrectamente

// 🧠 CONCEPTO CLAVE

// PHP no “adivina”.
// Si la sintaxis es incorrecta → el programa falla.