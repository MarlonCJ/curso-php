<?php

// ==========================================
// Tema 3: Condicionales y operadores lógicos
// ==========================================

// Importante:
// = asigna un valor a una variable.
// == compara si dos valores son iguales.
// === compara si dos valores son iguales y del mismo tipo.
// true y false son valores booleanos.

// ------------------------------------------
// Ejemplo 1: comparaciones básicas
// ------------------------------------------

$edad = 20;
$esMayorDeEdad = ($edad >= 18);

var_dump($esMayorDeEdad);

echo "\n";

// ------------------------------------------
// Ejemplo 2: comparación estricta
// ------------------------------------------

$valor1 = "18";
$valor2 = 18;

var_dump($valor1 == $valor2);    // true
var_dump($valor1 === $valor2);   // false

echo "\n";

// ------------------------------------------
// Ejemplo 3: condicional simple
// ------------------------------------------

if ($edad >= 18) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}

// ------------------------------------------
// Ejercicio 1: Mayor de edad
// ------------------------------------------

$edadUsuario = 17;

if ($edadUsuario >= 18) {
    echo "El usuario es mayor de edad.\n";
} else {
    echo "El usuario es menor de edad.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 2: Número par o impar
// ------------------------------------------

$numero = 13;

if ($numero % 2 == 0) {
    echo "El número es par.\n";
} else {
    echo "El número es impar.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 3: Acceso a un evento
// ------------------------------------------

$edadEvento = 21;
$tieneEntrada = true;

if ($edadEvento >= 18 && $tieneEntrada) {
    echo "Puede entrar al evento.\n";
} else {
    echo "No puede entrar al evento.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 4: Evaluación académica
// ------------------------------------------

$nota = 4.8;

if ($nota >= 4.5) {
    echo "Excelente, has obtenido una nota sobresaliente.\n";
} elseif ($nota >= 3.0) {
    echo "Aprobado.\n";
} else {
    echo "Reprobado.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 5: Login básico
// ------------------------------------------

$usuario = "admin";
$password = "1234";

if ($usuario == "admin" && $password == "1234") {
    echo "Acceso correcto. Bienvenido.\n";
} else {
    echo "Acceso incorrecto. Verifica tus datos.\n";
}

echo "\n";

// ------------------------------------------
// Ejemplo 4: Operador lógico NOT
// ------------------------------------------

$estaActivo = false;

if (!$estaActivo) {
    echo "El sistema está inactivo.\n";
}

echo "\n";

// ------------------------------------------
// Reto avanzado: descuento por cantidad
// ------------------------------------------

$cantidadProductos = 6;
$precioUnitario = 50000;

$subtotal = $cantidadProductos * $precioUnitario;

if ($cantidadProductos > 5) {
    $descuento = ($subtotal * 20) / 100;
    echo "Aplica descuento del 20%.\n";
} elseif ($cantidadProductos > 3) {
    $descuento = ($subtotal * 10) / 100;
    echo "Aplica descuento del 10%.\n";
} else {
    $descuento = 0;
    echo "No aplica descuento.\n";
}

$totalPagar = $subtotal - $descuento;

echo "Subtotal: " . $subtotal . "\n";
echo "Descuento: " . $descuento . "\n";
echo "Total a pagar: " . $totalPagar . "\n";

// ------------------------------------------
// Tarea final para ti:
// ------------------------------------------
// 1. Cambia los valores de cada ejercicio.
// 2. Prueba distintos casos.
// 3. Verifica cómo cambia el resultado con true/false, == y ===.
// 4. Cuando termines, compárteme el archivo para revisarlo.
