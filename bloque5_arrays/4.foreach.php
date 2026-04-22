<?php

/*

🔹 BLOQUE 5 — TEMA 4: RECORRER ARRAYS CON foreach EN PHP

📘 ¿Qué es foreach?

foreach es una estructura especializada para recorrer arrays elemento por elemento de forma automática.

En lugar de acceder manualmente:

echo $frutas[0];
echo $frutas[1];
echo $frutas[2];

Usamos:

foreach ($frutas as $fruta) {
    echo $fruta;
}

Más limpio, escalable y profesional.

🎯 ¿Por qué es importante?

En sistemas reales casi nunca procesas un solo dato. Procesas:

Listas de usuarios
Productos
Pedidos
Resultados SQL
Menús dinámicos
Reportes

Y para eso foreach es esencial.

✅ Código Completo Funcional (Array Indexado)

*/


$frutas = ["Manzana", "Pera", "Uva"];

foreach ($frutas as $fruta) {
    echo $fruta . PHP_EOL;
}

/*


📌 Salida
Manzana
Pera
Uva

🔍 Explicación Técnica Detallada

Sintaxis

foreach ($array as $valor) {
    // código
}

Significa:

PHP toma cada elemento del array
Lo guarda temporalmente en $valor

Ejecuta el bloque

En el ejemplo:

foreach ($frutas as $fruta)

PHP hace internamente:

$fruta = "Manzana"
$fruta = "Pera"
$fruta = "Uva"

📌 Código Profesional con Clave y Valor

*/

$usuario = [
    "nombre" => "Carlos",
    "edad" => 30,
    "ciudad" => "Villavicencio"
];

foreach ($usuario as $clave => $valor) {
    echo $clave . ": " . $valor . PHP_EOL;
}

/*

📌 Salida

nombre: Carlos
edad: 30
ciudad: Villavicencio

🔍 Sintaxis con clave y valor

foreach ($array as $clave => $valor)

Muy útil en arrays asociativos.

📌 Ejemplo Profesional Real

*/

$productos = [
    ["nombre" => "Mouse", "precio" => 50000],
    ["nombre" => "Teclado", "precio" => 80000]
];

foreach ($productos as $producto) {
    echo $producto["nombre"] . " - $" . $producto["precio"] . PHP_EOL;
}

/*

🧠 Buenas Prácticas

✅ Nombres claros

foreach ($usuarios as $usuario)

No:

foreach ($usuarios as $x)

✅ Usar foreach cuando trabajes arrays

Mejor que for en la mayoría de casos.

✅ Sangría correcta

foreach (...) {
    echo ...;
}

❌ Errores Comunes
❌ Usar variable equivocada

foreach ($frutas as $item) {
    echo $fruta;
}

Error: $fruta no existe ahí.

❌ Modificar array sin necesidad dentro del loop

Puede generar confusión.

❌ Pensar que foreach sirve sin array

$nombre = "Carlos";

foreach ($nombre as $x)

Incorrecto.

🧠 Nivel Profesional

Cuando uses PDO:

$usuarios = $stmt->fetchAll();

Luego:

foreach ($usuarios as $usuario)

Esto es trabajo backend real.

🔥 Mini Prueba Mental

$numeros = [5, 10, 15];

foreach ($numeros as $n) {
    echo $n . PHP_EOL;
}

¿Qué imprime?

5
10
15

*/