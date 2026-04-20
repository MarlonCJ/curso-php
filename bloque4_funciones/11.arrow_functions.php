<?php
/*

📘 BLOQUE 4 — TEMA 11: ARROW FUNCTIONS EN PHP

🎯 Definición Profesional

Las Arrow Functions (funciones flecha) son una forma más corta y moderna de escribir funciones anónimas en PHP.

Se introdujeron en PHP 7.4.

Se usan cuando la lógica es pequeña y directa.

🧠 Sintaxis

fn(parametros) => expresion;

Retornan automáticamente el resultado de la expresión.

✅ Ejemplo Básico

*/

$sumar = fn($a, $b) => $a + $b;

echo $sumar(5, 3);

/*

Resultado:
8

🔍 Equivalencia con Función Anónima

Tradicional

$sumar = function ($a, $b) {
    return $a + $b;
};

Arrow Function

$sumar = fn($a, $b) => $a + $b;

Más limpia para lógica corta.

📌 Retorno Automático

No escribes return.

fn($x) => $x * 2;

Ya devuelve el resultado.

🏢 Uso Empresarial Real

Muy comunes con arrays y callbacks.

array_map

*/

$nums = [1,2,3];

$resultado = array_map(fn($n) => $n * 2, $nums);

print_r($resultado);

/*

Resultado:
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
)
📌 Captura Variables Externas

Arrow Functions capturan automáticamente variables del entorno.

$iva = 0.19;

$calc = fn($precio) => $precio * $iva;

echo $calc(100);

Resultado:
19

No necesitas use.

❌ Limitación Importante

Son ideales para una sola expresión.

❌ No recomendado:

fn($x) => {
   $a = $x * 2;
   return $a;
}

Para lógica compleja usa función tradicional.

❌ Errores Comunes

1. Usarlas para todo

No todo debe ser corto.

2. Código ilegible

fn($a,$b,$c,$d) => ...

Si se vuelve confuso, mejor función normal.

3. Olvidar que solo aceptan expresión

No bloques largos.

✅ Buenas Prácticas

Usa arrow functions en callbacks pequeños.
Mantén expresiones claras.
Usa función tradicional si crece la lógica.

🧠 Mentalidad Senior

La mejor herramienta depende del contexto:

Lógica simple → Arrow Function
Lógica compleja → Función normal

📌 Ejemplo Profesional Limpio

<?php

$descuento = fn($precio) => $precio * 0.9;

echo $descuento(50000);

Resultado:
45000

*/