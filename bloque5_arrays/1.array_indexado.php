<?php
/*

🔹 BLOQUE 5 — TEMA 1: ARRAYS INDEXADOS EN PHP

📘 ¿Qué es un Array Indexado?

Un array indexado es una estructura de datos que permite guardar múltiples valores dentro de una sola variable, organizados por posiciones numéricas automáticas que comienzan desde 0.

Ejemplo mental:

$frutas = ["Manzana", "Pera", "Uva"];

Internamente PHP interpreta:

0 => Manzana
1 => Pera
2 => Uva

Cada posición se llama índice.

🎯 ¿Por qué es importante?

Sin arrays tendrías que hacer esto:

$fruta1 = "Manzana";
$fruta2 = "Pera";
$fruta3 = "Uva";

Con arrays:

$frutas = ["Manzana", "Pera", "Uva"];

Más limpio, escalable y profesional.

✅ Código Completo Funcional

*/

$frutas = ["Manzana", "Pera", "Uva"];

echo $frutas[0] . PHP_EOL;
echo $frutas[1] . PHP_EOL;
echo $frutas[2] . PHP_EOL;

/*

📌 Salida:

Manzana
Pera
Uva

🔍 Explicación Técnica Detallada

Esta línea:

$frutas = ["Manzana", "Pera", "Uva"];

Crea un array con 3 elementos.

PHP asigna automáticamente:

Índice	Valor
0	    Manzana
1	    Pera
2	    Uva

Esta línea:

echo $frutas[0];

Accede al elemento en la posición 0.

Resultado:

Manzana

📌 Otra forma de crearlo (tradicional)

$numeros = array(10, 20, 30);

Forma moderna recomendada:

$numeros = [10, 20, 30];

🧠 Buenas Prácticas

✅ Usa nombres descriptivos

$usuarios = [];
$productos = [];
$clientes = [];

No:

$x = [];

✅ Usa corchetes modernos

$datos = [];

No:

$datos = array();

✅ Mantén mismo tipo de datos cuando sea posible

Bien:

$edades = [18, 25, 30];

Evita:

$mezcla = [18, "Hola", true, 9.5];

(Solo si no es necesario)

❌ Errores Comunes
❌ Acceder índice inexistente

$frutas[5];

Error:

Undefined array key 5

❌ Confundir posición inicial

Muchos creen que inicia en 1

Incorrecto:

$frutas[1]; // segundo elemento

Correcto inicio:

$frutas[0];

❌ Sobrescribir variable accidentalmente

$frutas = ["Manzana"];
$frutas = "Hola";

Perdiste el array.

🧠 Nivel Profesional

Los arrays son base para:

Resultados SQL
JSON
APIs
Formularios múltiples
Catálogos
Reportes
Sistemas reales

🔥 Mini Prueba Mental

$nombres = ["Ana", "Luis", "Pedro"];

echo $nombres[2];

*/