<?php

// ### Ejercicio 1: Operaciones básicas

// 1. Declara dos variables numéricas: `$numero1` y `$numero2`.
// 2. Calcula suma, resta, multiplicación, división y residuo.
// 3. Muestra cada resultado con una etiqueta clara.

$numero1 = 50;
$numero2 = 35;

$resultadoSuma = $numero1 + $numero2;
$resultadoResta = $numero1 - $numero2;
$resultadoMutiplicacion = $numero1 * $numero2;
$resultadoDivision = $numero1 / $numero2;
$resultadoResiduo = $numero1 % $numero2;

echo 'Resultado suma: ' . $resultadoSuma . "\n";
echo 'Resultado resta: ' . $resultadoResta . "\n";
echo 'Resultado multiplicación: ' . $resultadoMutiplicacion . "\n";
echo 'Resultado división: ' . $resultadoDivision . "\n";
echo 'Resultado residuo división: ' . $resultadoResiduo . "\n";
echo "\n";
// ### Ejercicio 2: Compra con descuento

// 1. Declara `$precioProducto`, `$cantidad` y `$porcentajeDescuento`.
// 2. Calcula el subtotal.
// 3. Calcula el valor del descuento.
// 4. Calcula el total a pagar.
// 5. Muestra todos los valores en pantalla.


$precioProducto = 500000;
$cantidad = 20;
$porcentajeDescuento = 20;

$subtotal = $precioProducto * $cantidad;
$valorDescuento = ($subtotal * $porcentajeDescuento) / 100;
$totalPago = $subtotal - $valorDescuento;

echo "Calcular Producto \n";
echo "Producto: televisor \n";
echo "Precio Producto: " . $precioProducto . "\n";
echo "Cantidad Producto: " . $cantidad . "\n";
echo "Porcentaje de descuento: " . $porcentajeDescuento . "\n";
echo "Precio Subtotal: " . $subtotal . "\n";
echo "Valor Descuento: " . $valorDescuento . "\n";
echo "Total A Pagar: " . $totalPago . "\n";
echo "\n";


// ### Ejercicio 3: Promedio académico

// 1. Declara tres notas entre `0.0` y `5.0`.
// 2. Calcula la suma de las notas.
// 3. Calcula el promedio.
// 4. Muestra el promedio con un mensaje descriptivo.

$nota1 = 3;
$nota2 = 4;
$nota3 = 5;

$sumaNotas = $nota1 + $nota2 + $nota3;
$promedioNotas = $sumaNotas / 3;

echo "Su nota final es: " . $promedioNotas . "\n";
echo "\n";

// ### Ejercicio 4: Comparaciones

// 1. Declara una variable `$edad`.
// 2. Guarda en `$esMayorDeEdad` el resultado de comprobar si la edad es mayor o igual a `18`.
// 3. Declara una variable `$numero`.
// 4. Guarda en `$esPar` el resultado de comprobar si su residuo al dividir entre `2` es igual a `0`.
// 5. Muestra ambos resultados.

$edad = 45;
$esMayorDeEdad = $edad >= 18;

$numero = 66;
$esPar = ($numero % 2 ) == 0;

echo "Es mayor de edad: " . $esMayorDeEdad . "\n";
echo "¿Su número es par? " . $esPar . "\n";
echo "\n";


// ### Reto avanzado: cálculo de factura

// Simula una factura de una tienda. Declara el precio, la cantidad, el porcentaje de descuento y el porcentaje de IVA. Calcula, en este orden:

// 1. Subtotal.
// 2. Descuento.
// 3. Subtotal con descuento aplicado.
// 4. IVA sobre el subtotal con descuento.
// 5. Total final a pagar.

// Usa variables separadas para cada resultado. No necesitas resolverlo ahora si aún no te sientes listo.


$producto = 'IPHONE 17';
$precio = 7500000;
$cantidad = 20;
$descuentoPorcentaje = 15;
$iva = 19;

$subtotal = $precio * $cantidad;
$descuento = ($subtotal * $descuentoPorcentaje) / 100;
$subtotalDescuento = $subtotal - $descuento; 
$subtotalIva = ($subtotalDescuento * 19) / 100;
$totalPagar = ($subtotal + $subtotalIva) - $descuento;

echo "Total a Pagar: " .$totalPagar;
echo "\n";