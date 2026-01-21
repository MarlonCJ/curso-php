<?php


// Operadores de Comparacion
/*
| Operador | Uso                              |
| -------- | -------------------------------- |
| `===`    | Igual y mismo tipo (RECOMENDADO) |
| `!==`    | Distinto                         |
| `>`      | Mayor                            |
| `<`      | Menor                            |
| `>=`     | Mayor o igual                    |
| `<=`     | Menor o igual                    |
*/

// ⚠️ Regla profesional:

// Evita == en código serio


// ejercicio


$numero = 10;
$numero2 = 20;


var_dump($numero === $numero2);

var_dump($numero !== $numero2);

var_dump($numero > $numero2);

var_dump($numero < $numero2);

var_dump($numero >= $numero2);

var_dump($numero <= $numero2);


// -----------------

// OPERADORES LOGICOS

// AND

// if($edad >= 18 && $activo === true){
//     echo "Puede ingresar";
// }

// OR

// if($rol === 'admin' || $rol === 'editor'){
//     echo "Acceso autorizado";
// }

// NOT !

// if(!$activo){
//     echo "Cuenta desactivada";
// }

// 🔹 2.6 Error MUY común (importante)

// ❌ Esto está mal:

if ($edad = 18) { }

// ✅ Correcto:

if ($edad === 18) { }

// esto rompe plugins completos en produccion

// Mentalidad Profesional

// Condiciones Claras
// Nada Ambiguo
// Nada Magico
// Codigo Legible

// Si no se entiende leyendo, está mal escrito

// Ejercicio

// Escribe un script que:

// Declare una variable $rol

// Si el rol es "admin" → “Acceso total”

// Si es "editor" → “Acceso limitado”

// En otro caso → “Acceso denegado”

$rol = "editor2";

if($rol === "admin"){
    echo "Acceso Total";
}elseif($rol === "editor"){
    echo "Acceso Limitado";
}else{
    echo "Acceso denegado";
}

