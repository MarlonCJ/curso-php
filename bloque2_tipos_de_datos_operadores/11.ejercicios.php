<?php

// 🧩 EJERCICIO 1

// Objetivo:
// Aplicar tipos de datos básicos y concatenación.

// Contexto:
// Se requiere mostrar información básica de un usuario.

// Instrucciones:

// Crear las siguientes variables:
// $nombre → "Carlos"
// $edad → 28
// $activo → true
// Imprimir EXACTAMENTE:
// Nombre: Carlos
// Edad: 28
// Estado: 1

// Reglas técnicas:

// Usar echo
// Usar concatenación (.)
// No usar comillas dobles con variables embebidas


$nombre = "Carlos";
$edad = 28;
$activo = true;

echo 'Nombre: ' . $nombre . '<br>';
echo 'Edad: ' . $edad . '<br>';
echo 'Estado: ' . $activo . '<br>';

// 🧩 EJERCICIO 2

// Objetivo:
// Diferenciar tipos de datos usando var_dump.

// Contexto:
// Necesitas validar tipos en un sistema.

// Instrucciones:

// Crear variables:
// $valor1 = "100"
// $valor2 = 100
// Mostrar el tipo de ambas variables con var_dump

// Salida esperada EXACTA (estructura):
// Debe mostrar claramente:

// string
// int

$valor1 = "100";
$valor2 = 100;

var_dump($valor1);
var_dump($valor2);
echo '<br>';


// 🧩 EJERCICIO 3

// Objetivo:
// Aplicar casting.

// Contexto:
// Recibes un valor como string y debes convertirlo.

// Instrucciones:

// Crear $numero = "50"
// Convertirlo a entero
// Imprimir el resultado

// Salida esperada EXACTA:

// 50

$numero = "50";

$numero2 = (int)$numero; 

echo $numero2 . '<br>';

// 🧩 EJERCICIO 4

// Objetivo:
// Uso de operadores aritméticos.

// Instrucciones:

// Crear $a = 10, $b = 5
// Imprimir:
// Suma: 15
// Resta: 5
// Multiplicacion: 50
// Division: 2

$a = 10;
$b = 5;

echo 'Suma: ' . ($a + $b) . '<br>';
echo 'Resta: ' . ($a - $b) . '<br>';
echo 'Multiplicacion: ' . ($a * $b) . '<br>';
echo 'Division: ' . ($a / $b) . '<br>';


// 🧩 EJERCICIO 5

// Objetivo:
// Uso de operadores de asignación.

// Instrucciones:

// Crear $numero = 10
// Aplicar:
// += 5
// *= 2
// Imprimir resultado final

// Salida esperada EXACTA:

// 30

$numero = 10;

$numero += 5;
echo $numero . '<br>';

$numero *= 2;
echo $numero . '<br>';

// 🟡 EJERCICIOS INTERMEDIOS (6–15)
// 🧩 EJERCICIO 6

// Objetivo:
// Comparación estricta vs débil.

// Instrucciones:

// Crear:
// $a = 10
// $b = "10"
// Evaluar:
// $a == $b
// $a === $b
// Mostrar ambos resultados con var_dump


$a = 10;
$b = "10";

echo ($a == $b) ? 'Es igual' : 'No es igual';
echo '<br>';

echo ($a === $b) ? 'Es igual' : 'No es igual';
echo '<br>';


// 🧩 EJERCICIO 7

// Objetivo:
// Uso de operadores lógicos.

// Contexto:
// Validar acceso.

// Instrucciones:

// $edad = 20
// $tieneLicencia = true
// Mostrar:
// Acceso permitido

// Solo si ambas condiciones se cumplen.

$edad = 20;
$tieneLicencia = true;

echo ($edad >= 18 && $tieneLicencia == true) ? 'Acceso permitido' : 'No puede ingresar';
echo '<br>';


// 🧩 EJERCICIO 8

// Objetivo:
// Uso de operador ternario.

// Instrucciones:

// $edad = 16
// Mostrar:
// Menor de edad


$edad = 16;

echo ($edad >= 18) ? 'Mayor de edad' : 'Menor de edad';
echo '<br>';



// 🧩 EJERCICIO 9

// Objetivo:
// Precedencia de operadores.

// Instrucciones:

// Evaluar:
// $resultado = 5 + 5 * 2;
// Imprimir resultado

// Salida esperada EXACTA:

// 15


$resultado = 5 + (5 * 2);
echo $resultado . '<br>';



// 🧩 EJERCICIO 10

// Objetivo:
// Uso de concatenación avanzada.

// Instrucciones:

// Crear:
// $producto = "Laptop"
// $precio = 1500
// Mostrar:
// Producto: Laptop - Precio: 1500

$producto = "Laptop";
$precio = 1500;

echo 'Producto: ' . $producto . ' - Precio: ' . $precio;
echo '<br>'; 


// 🧩 EJERCICIO 11

// Objetivo:
// Conversión a booleano.

// Instrucciones:

// $valor = "0"
// Convertir a booleano
// Mostrar resultado con var_dump

$valor = "0";
echo $valor . '<br>';

$valor = (bool)$valor;
var_dump($valor);


// 🧩 EJERCICIO 12

// Objetivo:
// Uso combinado de operadores.

// Instrucciones:

// $a = 10, $b = 3
// Calcular:
// Resultado: 13

// (usa suma y módulo correctamente)



// 🧩 EJERCICIO 13

// Objetivo:
// Concatenación con cálculo.

// Instrucciones:

// $precio = 20, $cantidad = 3
// Mostrar:
// Total: 60
// 🧩 EJERCICIO 14

// Objetivo:
// Validación lógica.

// Instrucciones:

// $usuario = true, $admin = false
// Mostrar:
// Acceso permitido

// Si al menos uno es verdadero

// 🧩 EJERCICIO 15

// Objetivo:
// Uso de NOT.

// Instrucciones:

// $activo = false
// Mostrar:
// Usuario inactivo
// 🔴 EJERCICIOS AVANZADOS (16–20)
// 🧩 EJERCICIO 16

// Objetivo:
// Evaluación compleja con precedencia.

// Instrucciones:

// $a = true, $b = false, $c = true
// Evaluar correctamente lógica combinada
// Mostrar resultado con var_dump
// 🧩 EJERCICIO 17

// Objetivo:
// Uso profesional del ternario.

// Instrucciones:

// $nota = 7
// Mostrar:
// Aprobado
// 🧩 EJERCICIO 18

// Objetivo:
// Casting + operación.

// Instrucciones:

// $valor = "100abc"
// Convertir a entero
// Multiplicar por 2
// Mostrar resultado
// 🧩 EJERCICIO 19

// Objetivo:
// Control de tipos.

// Instrucciones:

// $dato = "false"
// Convertir a booleano
// Mostrar con var_dump
// 🧩 EJERCICIO 20

// Objetivo:
// Simulación real.

// Contexto:
// Sistema de compra.

// Instrucciones:

// $precio = "200"
// $cantidad = 2
// $descuento = 10 (%)
// Calcular total con descuento
// Mostrar:
// Total final: 360