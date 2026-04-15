<?php

// 🧠 TEMA 5: switch

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La estructura switch se utiliza cuando tienes que evaluar una misma variable contra múltiples valores posibles.

// Es una alternativa más organizada y eficiente que múltiples if - elseif.

// 🔥 CONCEPTO CLAVE

// switch compara un valor contra múltiples casos (case)
// y ejecuta el bloque que coincida.

// <?php

$dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "Inicio de semana";
        break;

    case "viernes":
        echo "Fin de semana laboral";
        break;

    case "domingo":
        echo "Día de descanso";
        break;

    default:
        echo "Día normal";
}


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// $dia = "lunes";

// switch ($dia)
// → Se evalúa el valor de $dia

// Comparación:
// "lunes" == "lunes" → ✅ coincide

// ✔ Ejecuta:

// echo "Inicio de semana";
// break;
// → Detiene la ejecución del switch

// ⚠️ IMPORTANCIA DEL break

// Sin break, el código sigue ejecutando los siguientes casos.

// ❌ ERROR GRAVE:

// case "lunes":
//     echo "Inicio";
// case "viernes":
//     echo "Fin";

// Resultado:

// InicioFin

// 🧱 BUENAS PRÁCTICAS

// ✔ Usar switch cuando comparas una sola variable
// ✔ Siempre usar break
// ✔ Incluir default para casos no contemplados

// ✔ Correcto:

// switch ($rol) {
//     case "admin":
//         echo "Acceso total";
//         break;

//     default:
//         echo "Acceso limitado";
// }

// ❌ ERRORES COMUNES

// ❌ Olvidar break
// ❌ Usar switch para lógica compleja (mejor if)
// ❌ No usar default
// ❌ Casos duplicados
// ❌ Comparaciones incorrectas

// 🧠 PUNTO CRÍTICO (MENTALIDAD PRO)

// switch se usa en sistemas reales para:

// Roles de usuario
// Estados (activo, pendiente, cancelado)
// Menús
// Control de flujos

// 🎯 RESUMEN TÉCNICO

// Evalúa una variable contra múltiples valores
// Ejecuta el caso que coincide
// break evita ejecución múltiple
// default cubre casos no definidos