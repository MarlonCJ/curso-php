<?php

// 🧠 EJERCICIOS — BLOQUE 6
// 1️⃣

// Crea un script que active el reporte de todos los errores usando error_reporting() y ini_set().

error_reporting(E_ALL);
ini_set('display_errors',1);

// 2️⃣

// Crea una variable sin asignarle valor e intenta imprimirla.
// Observa el tipo de error que se genera.

$nombre;
echo $nombre;

// 3️⃣

// Crea una función que reciba un número y divida 10 entre ese número.
// Ejecuta la función pasando 0 como argumento.
// Observa el comportamiento.

function division($numero){
    return 10 / $numero;
}

echo division(0);


// 4️⃣

// Crea un array con 3 elementos.
// Intenta acceder a una posición que no exista.
// Identifica el tipo de error generado.

$numero = [10,20,30];

$numero[4];

// es un warning undefined array

// 5️⃣

// Crea una variable con valor string y realiza una operación matemática con ella.
// Analiza el resultado y el tipo de aviso que pueda generarse.

$cadena = 'string';

echo $cadena + 10;

// Fatal error: operandos no compatibles

// 6️⃣

// Utiliza var_dump() y print_r() sobre el mismo array y compara visualmente la salida.

$numeros = [10,20,30,40,50,60];

var_dump($numeros);
echo '<br>';
print_r($numeros);

var_dump: muestra indice, valor y tipo de dato
print_r : muestra indices y valores


// 7️⃣

// Crea una función que retorne un valor.
// Luego intenta usar una variable interna de esa función fuera de ella.
// Observa el error.

function operacionMatematica($num){
    $numero = 20;
    return $numero + $num;
}

echo operacionMatematica(10);
echo $numero;

// warning : valiable indefinida

// 8️⃣

// Incluye un archivo inexistente usando require.
// Observa el comportamiento del script.

include 'perrito.php';

// warning: archivo inexistente

// 9️⃣

// Desactiva temporalmente el reporte de errores y repite uno de los ejercicios anteriores.
// Observa la diferencia.




// 🔟

// Crea un script que genere:

// Un Notice

// Un Warning

// Un Error fatal

// En el mismo archivo (cuando sea posible).


// Notice por conversión implícita innecesaria
$numero = 10;
$numero += "5abc"; // string no numérico completo

echo $numero;


// warning
$numero;
echo $numero;


//FATAL

$numero = 20;
$numero2 = 'treinta';

$suma = $numero + $numero2;
echo $suma;