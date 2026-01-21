<?php

// SWITCH

// Para que sirve switch

/*
switch se usa cuando:
    
    evaluas una sola variable
    Comparas muchos valores posibles
    Quires código más claro que muchos elseif

Es muy comun en:

    Roles
    Estados
    Tipos
    Acciones

*/

$rol = 'editor';

switch($rol){
    case 'admin':
        echo 'Acceso Total';
        break;
    case 'editor':
        echo 'Acceso Limitado';
        break;
    default:
        echo 'Acceso denegado';
}

/*
¿Qué hace cada parte?

    - switch ($rol) -> variable a evaluar
    - case -> posible valor
    - break -> detiene el switch (MUY IMPORTANTE)
    - default -> caso por defecto

⚠️ ERROR CRÍTICO (muy común)

❌ Olvidar break:

case 'admin':
    echo 'Acceso total';
case 'editor':
    echo 'Acceso limitado';

👉 Esto ejecuta ambos casos ❌

📌 Siempre usa break, salvo que sepas EXACTAMENTE lo que haces.

🔹 Comparación: if vs switch
❌ if / elseif largo

if ($rol === 'admin') {
} elseif ($rol === 'editor') {
} elseif ($rol === 'autor') {
}

✅ switch limpio

switch ($rol) {
    case 'admin':
    case 'editor':
        echo 'Acceso permitido';
        break;
}

🔹 Uso profesional: agrupar casos

switch ($rol) {
    case 'admin':
    case 'editor':
        echo 'Acceso permitido';
        break;

    default:
        echo 'Acceso denegado';
}

📌 Muy usado en plugins.

🧠 Cuándo NO usar switch

❌ Condiciones complejas
❌ Rangos (>=, <=)
❌ Lógica combinada

👉 Para eso, if.

🎯 EJERCICIO (para cerrar BLOQUE 2)

Crea un switch que:

Evalúe $estado

Si es "activo" → “Usuario activo”

Si es "inactivo" → “Usuario inactivo”

En otro caso → “Estado desconocido”

*/

echo "\n";

$estado = 'activo';

switch($estado) {
    case 'activo':
        echo 'Usuario activo';
        break;
    case 'inactivo' :
        echo 'Usuario inactivo';
        break;
    default:
        echo 'Estado desconocido';
}


