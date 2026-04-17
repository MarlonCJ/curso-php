<?php

// 🧠 TEMA 6: BUCLE while

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// El bucle while permite ejecutar un bloque de código repetidamente mientras una condición sea verdadera.

// 🔥 CONCEPTO CLAVE

// while evalúa una condición antes de cada iteración.
// Si es true, ejecuta.
// Si es false, se detiene.

// 💻 CÓDIGO COMPLETO FUNCIONAL


$i = 1;

while ($i <= 5) {
    echo $i . "\n";
    $i++;
}

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// $i = 1;
// → Inicialización

// while ($i <= 5)
// → Condición de control

// Iteraciones:

// Iteración	$i	Condición	Acción
// 1	        1	true	    imprime 1
// 2	        2	true	    imprime 2
// 3	        3	true	    imprime 3
// 4	        4	true	    imprime 4
// 5	        5	true	    imprime 5
// 6	        6	false	    termina

// ⚠️ ELEMENTOS CRÍTICOS

// Todo while necesita:

// Inicialización
// Condición
// Incremento/decremento

// ❌ ERROR CRÍTICO: BUCLE INFINITO

// $i = 1;

// while ($i <= 5) {
//     echo $i;
// }

// 🔴 ERROR:

// → Nunca cambia $i
// → Se ejecuta infinitamente

// 🧱 BUENAS PRÁCTICAS

// ✔ Controlar siempre la condición
// ✔ Asegurar modificación de la variable
// ✔ Evitar lógica compleja dentro del bucle

// ✔ Correcto:

// while ($contador < 10) {
//     $contador++;
// }

// ❌ ERRORES COMUNES

// ❌ No modificar la variable
// ❌ Condición incorrecta
// ❌ Bucles infinitos
// ❌ Variables mal inicializadas
// ❌ Lógica desordenada dentro del bucle

