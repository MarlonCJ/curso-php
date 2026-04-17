<?php

/*
🧠 TEMA 10: ESTRUCTURAS ANIDADAS

📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

Una estructura anidada ocurre cuando colocas una estructura de control dentro de otra.

Esto permite construir lógica más compleja y precisa.

🔥 CONCEPTO CLAVE

Puedes tener:

if dentro de if
if dentro de for
for dentro de while
etc.

💻 CÓDIGO COMPLETO FUNCIONAL

*/

$edad = 25;
$activo = true;

if ($edad >= 18) {

    if ($activo === true) {
        echo "Acceso permitido";
    } else {
        echo "Usuario inactivo";
    }

} else {
    echo "Menor de edad";
}

/*

🔬 EXPLICACIÓN TÉCNICA DETALLADA

Primer if:

if ($edad >= 18)

✔ 25 ≥ 18 → true

Entra al bloque interno

Segundo if:

if ($activo === true)

✔ true → true

✔ Resultado final:

echo "Acceso permitido";

🧠 OTRO EJEMPLO (CON BUCLES)

*/

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 2; $j++) {
        echo "i=$i j=$j\n";
    }

}

/*
🔬 RESULTADO
i=1 j=1
i=1 j=2
i=2 j=1
i=2 j=2
i=3 j=1
i=3 j=2

⚠️ CUIDADO CRÍTICO

Mientras más anidación:

❌ Más difícil de leer
❌ Más propenso a errores
❌ Más complejo de mantener

🧱 BUENAS PRÁCTICAS

✔ Mantener máximo 2–3 niveles de anidación
✔ Usar nombres claros
✔ Simplificar lógica cuando sea posible
✔ Refactorizar cuando crezca demasiado

❌ ERRORES COMUNES

❌ Anidar sin necesidad
❌ Código ilegible
❌ Lógica difícil de seguir
❌ No entender el flujo

🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

Las estructuras anidadas son necesarias, pero:

Un buen desarrollador sabe cuándo usarlas…
y cuándo evitarlas.

🎯 RESUMEN TÉCNICO

Permiten lógica compleja
Combinan múltiples estructuras
Deben usarse con control

*/