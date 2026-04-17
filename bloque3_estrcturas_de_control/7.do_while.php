<?php

/*

TEMA 7: BUCLE do while

📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

El bucle do while es una variación del while, con una diferencia crítica:

SIEMPRE ejecuta el bloque al menos una vez, sin importar la condición.

🔥 CONCEPTO CLAVE

while → primero evalúa, luego ejecuta
do while → primero ejecuta, luego evalúa

💻 CÓDIGO COMPLETO FUNCIONAL

*/

$i = 1;

do {
    echo $i . "\n";
    $i++;
} while ($i <= 5);

/*

🔬 EXPLICACIÓN TÉCNICA DETALLADA

$i = 1; → inicialización

do { ... } → se ejecuta SIN evaluar

Luego:

while ($i <= 5);

Flujo:

Iteración	$i	Se ejecuta	Condición
1	        1	✅	        true
2	        2	✅	        true
3	        3	✅	        true
4	        4	✅	        true
5	        5	✅	        true
6	        6	❌	        false

⚠️ DIFERENCIA CRÍTICA

Ejemplo:

$i = 10;

do {
    echo $i;
} while ($i < 5);

✔ Resultado:

10

👉 Aunque la condición es falsa, se ejecuta UNA vez.

🧱 BUENAS PRÁCTICAS

✔ Usarlo cuando necesitas ejecutar al menos una vez
✔ Controlar correctamente la variable
✔ Mantener claridad en la condición

❌ ERRORES COMUNES

❌ No entender que siempre ejecuta una vez
❌ Bucles infinitos
❌ Mala inicialización
❌ Uso innecesario (cuando un while es mejor)

🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

Se usa en escenarios como:

Validación de entrada (ejecutar al menos una vez)
Menús interactivos
Procesos que requieren ejecución inicial obligatoria

🎯 RESUMEN TÉCNICO

Ejecuta primero, evalúa después
Siempre corre al menos una vez
Similar a while pero con comportamiento diferente
*/