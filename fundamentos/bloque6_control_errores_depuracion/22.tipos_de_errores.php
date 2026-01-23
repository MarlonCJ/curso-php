
<?php 

// TIPOS DE ERRORES EN PHP (LO BASICO QUE DEBES SABER)

// php tiene varios niveles de errores.Los principales

/*
🔸 Notice

    No rompe el programa
    Indica malas prácticas
    Ejemplo: variable no definida

🔸 Warning

    Algo está mal    
    El script sigue ejecutándose
    Ejemplo: include de archivo inexistente

🔸 Fatal Error

    El programa se detiene
    Error grave
    Ejemplo: llamar una función que no existe

👉 El error que viste antes era un FATAL ERROR

*/

// 2️⃣ ACTIVAR ERRORES (MODO APRENDIZAJE)

// En desarrollo SIEMPRE debes ver errores.

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
📌 Colócalo al inicio del archivo mientras aprendes.

❌ Nunca en producción
✔ En WordPress esto se maneja distinto (luego lo veremos)
*/

// 3️⃣ DEPURAR VARIABLES (MUY IMPORTANTE)

// var_dump() → el más completo

$edad = 32;
var_dump($edad);

// ✔ Muestra tipo y valor
// ✔ Ideal para aprender

// print_r() → más legible

$datos = ['nombre' => 'Marlon', 'edad' => 32];

print_r($datos);

/*
✔ Útil para arrays
❌ No muestra tipos

❌ echo NO es para depurar

Muchos errores vienen de usar echo para todo.

4️⃣ ERRORES COMUNES (LOS QUE TE VAN A PASAR)
🔸 Archivo no encontrado

*/

require 'archivo.php';

// ➡️ Fatal error si no existe

// ✔ Solución:

require_once __DIR__ . '/archivo.php';

// FUNCION NO DEFINIDA

saludarUsuario();

// ❌ Si el archivo no se cargó
// ❌ Si el nombre está mal escrito

// 👉 Orden de carga importa

// 🔸 Variables fuera de scope


$nombre = 'Marlon';

function test() {
    echo $nombre; // ERROR
}

// ✔ Solución: pasar parámetros

/*
5️⃣ BUENA PRÁCTICA CLAVE (MENTALIDAD PRO)

👉 Un error NO es tu enemigo
👉 Es información
👉 Si sabes leerlo, avanzas rápido

Un desarrollador junior:

“No funciona 😡”

Un desarrollador senior:

“¿Qué me está diciendo el error?”

*/