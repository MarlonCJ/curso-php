<?php
/*

📘 BLOQUE 4 — TEMA 11: ARROW FUNCTIONS EN PHP

En PHP, las Arrow Functions (funciones flecha) son una forma corta y moderna de escribir funciones anónimas. Se introdujeron en PHP 7.4.

🔥 Sintaxis básica

fn(parámetros) => expresión;

👉 Siempre retornan automáticamente el resultado de la expresión.

✅ Ejemplo simple

Función normal:

*/

$sumar = function($a, $b) {
    return $a + $b;
};

echo $sumar(5, 3);


// Arrow Function:


$sumar = fn($a, $b) => $a + $b;

echo $sumar(5, 3);

/*
📌 Resultado:

8


🔥 Ejemplo con arrays (MUY usado)

Usando array_map()

*/

$numeros = [1,2,3,4,5];

$dobles = array_map(fn($n) => $n * 2, $numeros);

print_r($dobles);

/*

Resultado:

[2,4,6,8,10]


🔥 Ejemplo con array_filter()
$numeros = [1,2,3,4,5,6];

$pares = array_filter($numeros, fn($n) => $n % 2 == 0);

print_r($pares);

Resultado:

[2,4,6]
🔥 Captura automática de variables externas

Las Arrow Functions heredan variables del exterior automáticamente.

$iva = 1.19;

$precioFinal = fn($precio) => $precio * $iva;

echo $precioFinal(100);

Resultado:

119

👉 En funciones normales tocaría usar:

function($precio) use ($iva)
⚠️ Limitación importante

Solo permiten una expresión.

❌ Esto NO sirve:

fn($n) => {
   $x = $n * 2;
   return $x;
}
✅ Para múltiples líneas usa function normal
function($n) {
   $x = $n * 2;
   return $x;
}
🔥 Cuándo usar Arrow Functions

✅ Callbacks
✅ array_map()
✅ array_filter()
✅ array_reduce()
✅ Ordenamientos rápidos
✅ Código corto y limpio

🔥 Tu ejemplo de examen
echo procesar(5, fn($n) => $n * 3);

Significa:

👉 envía el número 5
👉 y una función que multiplica por 3

Si procesar() hace esto:

function procesar($numero, $callback){
    return $callback($numero);
}

Entonces:

echo procesar(5, fn($n) => $n * 3);

Resultado:

15
🔥 Nivel PRO (muy usado)
$usuarios = [
 ['nombre'=>'Juan','edad'=>20],
 ['nombre'=>'Ana','edad'=>30]
];

$nombres = array_map(fn($u) => $u['nombre'], $usuarios);

print_r($nombres);

Resultado:

['Juan','Ana']
📌 Regla fácil de recordar

Si la función es pequeña:

fn() => algo

Si es grande:

function(){}
🚀 Mi consejo como profesor PHP

Debes dominar Arrow Functions porque se usan muchísimo en:

Laravel
APIs modernas
Código limpio
Programación funcional

*/