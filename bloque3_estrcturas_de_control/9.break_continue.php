<?php

/*
🧠 TEMA 9: break y continue

📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

Estas dos instrucciones controlan el comportamiento interno de los bucles.

🔥 CONCEPTO CLAVE

break → rompe completamente el bucle
continue → salta a la siguiente iteración

🔴 break — DETENER EL BUCLE

💻 EJEMPLO

*/

for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        break;
    }

    echo $i . "\n";
}

/*

🔬 RESULTADO

1

2

🧠 EXPLICACIÓN

Cuando $i == 3

Se ejecuta break
El bucle se detiene COMPLETAMENTE
🟡 continue — SALTAR ITERACIÓN

💻 EJEMPLO

*/

for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i . "\n";
}

/*

🔬 RESULTADO

1
2
4
5

🧠 EXPLICACIÓN

Cuando $i == 3
Se ejecuta continue
Se salta esa iteración
El bucle CONTINÚA

⚠️ DIFERENCIA CRÍTICA

Instrucción	    Comportamiento
break	        Termina el bucle
continue	    Salta iteración

🧱 BUENAS PRÁCTICAS

✔ Usarlos para controlar flujo
✔ Evitar lógica innecesaria
✔ Aplicarlos en condiciones claras

❌ ERRORES COMUNES

❌ Confundir break con continue
❌ Usarlos sin entender impacto
❌ Generar lógica confusa
❌ Abusar dentro de múltiples condiciones

🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

Esto se usa en:

Validaciones dentro de bucles
Filtros de datos
Procesamiento optimizado

Un mal uso puede romper completamente la lógica.

🎯 RESUMEN TÉCNICO

break → detiene el bucle
continue → salta iteración
Controlan flujo interno

*/
