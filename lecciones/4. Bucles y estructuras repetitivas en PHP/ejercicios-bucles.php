<?php

// ======================================================
// Tema 4: Ejercicios para resolver - Bucles
// ======================================================
// Instrucciones:
// 1. Cambia los valores para probar otros casos.
// 2. Escribe la lógica con bucles.
// 3. Comprueba el resultado con diferentes entradas.

// ------------------------------------------------------
// Ejercicio 1: Mostrar números del 1 al 10
// ------------------------------------------------------
// Usa un bucle for para mostrar los números del 1 al 10.

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 2: Sumar del 1 al 10
// ------------------------------------------------------
// Usa un bucle for para sumar todos los números del 1 al 10.

$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}

echo "La suma es: $suma\n";

echo "\n";

// ------------------------------------------------------
// Ejercicio 3: Mostrar números pares
// ------------------------------------------------------
// Usa un bucle for para mostrar los números pares del 1 al 20.

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 4: Contador con while
// ------------------------------------------------------
// Usa while para contar desde 5 hasta 1.

$contador = 5;
while ($contador >= 1) {
    echo $contador . "\n";
    $contador--;
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 5: do while
// ------------------------------------------------------
// Usa do while para mostrar números del 1 al 3.

$numero = 1;
do {
    echo "Número: $numero\n";
    $numero++;
} while ($numero <= 3);

echo "\n";

// ------------------------------------------------------
// Ejercicio 6: Recorrer un arreglo con foreach
// ------------------------------------------------------
// Declara un arreglo con 5 nombres y muéstralos en pantalla.

$personas = ["Ana", "Luis", "Camila", "Mateo", "Sofía"];
foreach ($personas as $persona) {
    echo $persona . "\n";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 7: Tabla de multiplicar
// ------------------------------------------------------
// Muestra la tabla del 5 del 1 al 10.

$numeroTabla = 5;
for ($i = 1; $i <= 10; $i++) {
    echo "$numeroTabla x $i = " . ($numeroTabla * $i) . "\n";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 8: break y continue
// ------------------------------------------------------
// Muestra los números del 1 al 10, pero salta el 5.

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "\n";
}

echo "\n";

// ------------------------------------------------------
// Reto final
// ------------------------------------------------------
// Crea un programa que recorra un arreglo de productos,
// y muestre cada producto con su precio.
// Si el precio es mayor a 100, no lo muestres.

$productos = [
    ["nombre" => "Libro", "precio" => 80],
    ["nombre" => "Celular", "precio" => 120],
    ["nombre" => "Cámara", "precio" => 300],
    ["nombre" => "Cuaderno", "precio" => 50]
];

foreach ($productos as $producto) {
    if ($producto["precio"] > 100) {
        continue;
    }
    echo $producto["nombre"] . " - " . $producto["precio"] . "\n";
}

echo "\n";

// ======================================================
// Fin de los ejercicios
// ======================================================
