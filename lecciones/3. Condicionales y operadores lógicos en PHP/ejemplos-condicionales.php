<?php

// ============================================
// Tema 3: Ejemplos de uso - Condicionales
// ============================================

// 1. Comparación básica
$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}

echo "\n";

// 2. Comparación estricta
$valor1 = "18";
$valor2 = 18;

var_dump($valor1 == $valor2);
var_dump($valor1 === $valor2);

echo "\n";

// 3. Número par o impar
$numero = 13;

if ($numero % 2 == 0) {
    echo "El número es par.\n";
} else {
    echo "El número es impar.\n";
}

echo "\n";

// 4. Condición con operador lógico AND
$edadEvento = 21;
$tieneEntrada = true;

if ($edadEvento >= 18 && $tieneEntrada) {
    echo "Puede entrar al evento.\n";
} else {
    echo "No puede entrar al evento.\n";
}

echo "\n";

// 5. Evaluación académica
$nota = 4.8;

if ($nota >= 4.5) {
    echo "Excelente, has obtenido una nota sobresaliente.\n";
} elseif ($nota >= 3.0) {
    echo "Aprobado.\n";
} else {
    echo "Reprobado.\n";
}

echo "\n";

// 6. Login básico
$usuario = "admin";
$password = "1234";

if ($usuario == "admin" && $password == "1234") {
    echo "Acceso correcto. Bienvenido.\n";
} else {
    echo "Acceso incorrecto. Verifica tus datos.\n";
}

echo "\n";

// 7. Operador lógico NOT
$estaActivo = false;

if (!$estaActivo) {
    echo "El sistema está inactivo.\n";
}

echo "\n";

// 8. Descuento por cantidad
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
