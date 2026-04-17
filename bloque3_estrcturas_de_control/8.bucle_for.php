<?php

/*
🧠 TEMA 8: BUCLE for

📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

El bucle for es la estructura más utilizada cuando sabes cuántas veces quieres repetir una acción.

A diferencia de while, aquí todo el control del ciclo está en una sola línea.

🔥 CONCEPTO CLAVE

for integra:

Inicialización
Condición
Incremento

👉 Todo en una sola estructura

💻 CÓDIGO COMPLETO FUNCIONAL

*/

for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}

/*

🔬 EXPLICACIÓN TÉCNICA DETALLADA

for ($i = 1; $i <= 5; $i++)

Se divide en 3 partes:

Inicialización
$i = 1;

Condición
$i <= 5;

Incremento
$i++;

🔄 FLUJO DE EJECUCIÓN

Iteración	$i	Condición	Acción
1	        1	  true	    imprime 1
2	        2	  true	    imprime 2
3	        3	  true	    imprime 3
4	        4	  true	    imprime 4
5	        5	  true	    imprime 5
6	        6	  false 	termina

⚠️ DIFERENCIA CLAVE CON while

while	                                for
Más flexible	                        Más estructurado
Se usa cuando no sabes cuántas veces	Se usa cuando sí sabes

🧱 BUENAS PRÁCTICAS

✔ Usar for cuando hay conteo claro
✔ Mantener variables controladas
✔ Evitar modificar la variable dentro del bloque

✔ Correcto:

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

❌ ERRORES COMUNES

❌ Condición incorrecta
❌ Incremento mal definido
❌ Modificar $i dentro del bloque
❌ Bucles infinitos
❌ Confundir el orden de ejecución

🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

for se usa en:

Recorridos de datos
Iteraciones controladas
Procesamiento estructurado

Es el bucle más usado en desarrollo profesional.

🎯 RESUMEN TÉCNICO

Control total en una línea
Ideal para iteraciones definidas
Más limpio y predecible que while
*/

