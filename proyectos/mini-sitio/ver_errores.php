<?php
require_once 'bootstrap.php';

// ===============================
// BLOQUE 6 - PRUEBAS DE ERRORES
// ===============================

echo '<h1>Pruebas de errores en PHP</h1>';

/*
|--------------------------------------------------------------------------
| 1. NOTICE - Variable no definida
|--------------------------------------------------------------------------
*/
echo '<h2>1. Notice - Variable no definida</h2>';
echo $variableInexistente;


/*
|--------------------------------------------------------------------------
| 2. NOTICE - Índice de array inexistente
|--------------------------------------------------------------------------
*/
echo '<h2>2. Notice - Índice de array inexistente</h2>';
$usuario = [
    'nombre' => 'Juan'
];
echo $usuario['email'];


/*
|--------------------------------------------------------------------------
| 3. WARNING - include de archivo inexistente
|--------------------------------------------------------------------------
*/
echo '<h2>3. Warning - Include fallido</h2>';
include 'archivo_que_no_existe.php';


/*
|--------------------------------------------------------------------------
| 4. WARNING - Operación inválida
|--------------------------------------------------------------------------
*/
echo '<h2>4. Warning - Operación inválida</h2>';
$numero = 10;
echo $numero / 0;


/*
|--------------------------------------------------------------------------
| 5. DEPRECATED - Uso de función obsoleta
|--------------------------------------------------------------------------
*/
echo '<h2>5. Deprecated - Función obsoleta</h2>';
// Ejemplo clásico (dependiendo de versión PHP)
@each([1, 2, 3]);


/*
|--------------------------------------------------------------------------
| 6. FATAL ERROR - Llamar función inexistente
|--------------------------------------------------------------------------
*/
echo '<h2>6. Fatal Error - Función inexistente</h2>';
funcionQueNoExiste();


/*
|--------------------------------------------------------------------------
| 7. FATAL ERROR - Clase inexistente
|--------------------------------------------------------------------------
*/
// $objeto = new ClaseQueNoExiste();

// | Tipo        | ¿Detiene el script? | ¿Debe corregirse? |
// | ----------- | ------------------- | ----------------- |
// | Notice      | ❌ No                | ✅ Sí              |
// | Warning     | ❌ No                | ✅ Sí              |
// | Deprecated  | ❌ No                | ⚠️ Sí             |
// | Fatal Error | ✅ Sí                | 🚨 Urgente        |


// | Error               | PHP continúa |
// | ------------------- | ------------ |
// | Notice              | ✅            |
// | Warning             | ✅            |
// | Deprecated          | ✅            |
// | División por cero   | ❌            |
// | Función inexistente | ❌            |
// | Clase inexistente   | ❌            |
