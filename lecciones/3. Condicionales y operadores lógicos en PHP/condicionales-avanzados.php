<?php

// ==========================================
// Tema 3B: Condicionales avanzados en PHP
// ==========================================

// Reforzando lo básico:
// = asigna
// == compara valor
// === compara valor y tipo

// ------------------------------------------
// Ejemplo 1: condiciones compuestas
// ------------------------------------------

$edad = 22;
$esEstudiante = true;

if ($edad >= 18 && $esEstudiante) {
    echo "Puede aplicar a un descuento estudiantil.\n";
} else {
    echo "No aplica al descuento estudiantil.\n";
}

echo "\n";

// ------------------------------------------
// Ejemplo 2: operador OR
// ------------------------------------------

$esEmpleado = false;
$esInvitado = true;

if ($esEmpleado || $esInvitado) {
    echo "Tiene acceso al evento.\n";
} else {
    echo "No tiene acceso al evento.\n";
}

echo "\n";

// ------------------------------------------
// Ejemplo 3: operador NOT
// ------------------------------------------

$activo = false;

if (!$activo) {
    echo "El sistema está inactivo.\n";
}

echo "\n";

// ------------------------------------------
// Ejemplo 4: condicion anidada
// ------------------------------------------

$edadUsuario = 25;
$esSocio = true;

if ($edadUsuario >= 18) {
    if ($esSocio) {
        echo "Puede acceder a la membresía premium.\n";
    } else {
        echo "Puede acceder como usuario normal.\n";
    }
} else {
    echo "Debes ser mayor de edad.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 1: validación de acceso
// ------------------------------------------

$usuario = "admin";
$password = "1234";
$rol = "admin";

if ($usuario === "admin" && $password === "1234") {
    echo "Acceso total.\n";
} elseif ($usuario === "editor" && $password === "abcd") {
    echo "Acceso parcial.\n";
} else {
    echo "Acceso denegado.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 2: compras con reglas
// ------------------------------------------

$cantidad = 6;
$precioUnitario = 50000;
$esClienteVip = true;

$subtotal = $cantidad * $precioUnitario;

if ($esClienteVip) {
    $descuento = ($subtotal * 15) / 100;
    echo "Cliente VIP: aplica 15% de descuento.\n";
} elseif ($cantidad > 4) {
    $descuento = ($subtotal * 10) / 100;
    echo "Compra mayor a 4 unidades: aplica 10% de descuento.\n";
} else {
    $descuento = 0;
    echo "Sin descuento.\n";
}

$total = $subtotal - $descuento;

echo "Subtotal: " . $subtotal . "\n";
echo "Descuento: " . $descuento . "\n";
echo "Total final: " . $total . "\n";

echo "\n";

// ------------------------------------------
// Ejercicio 3: evaluación académica
// ------------------------------------------

$nota = 4.2;

if ($nota >= 4.8) {
    echo "Excelente.\n";
} elseif ($nota >= 4.0) {
    echo "Muy bien.\n";
} elseif ($nota >= 3.0) {
    echo "Aprobado.\n";
} else {
    echo "Necesita reforzar.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 4: rango de edad
// ------------------------------------------

$edadRango = 62;

if ($edadRango < 18) {
    echo "Menor de edad.\n";
} elseif ($edadRango >= 18 && $edadRango <= 25) {
    echo "Joven.\n";
} elseif ($edadRango >= 26 && $edadRango <= 60) {
    echo "Adulto.\n";
} else {
    echo "Adulto mayor.\n";
}

echo "\n";

// ------------------------------------------
// Ejercicio 5: descuento según tipo de pago
// ------------------------------------------

$monto = 120000;
$tipoPago = "transferencia";

if ($tipoPago === "efectivo") {
    $descuentoPago = ($monto * 5) / 100;
    echo "Pago en efectivo: descuento del 5%.\n";
} elseif ($tipoPago === "tarjeta") {
    $descuentoPago = ($monto * 2) / 100;
    echo "Pago con tarjeta: descuento del 2%.\n";
} elseif ($tipoPago === "transferencia") {
    $descuentoPago = ($monto * 8) / 100;
    echo "Pago por transferencia: descuento del 8%.\n";
} else {
    $descuentoPago = 0;
    echo "Tipo de pago no válido.\n";
}

$totalPago = $monto - $descuentoPago;

echo "Monto: " . $monto . "\n";
echo "Descuento: " . $descuentoPago . "\n";
echo "Total: " . $totalPago . "\n";

echo "\n";

// ------------------------------------------
// Reto final: tienda online
// ------------------------------------------

$totalCompra = 450000;
$clienteVip = true;
$cantidadProductos = 4;

$descuento = 0;

if ($clienteVip) {
    $descuento += ($totalCompra * 15) / 100;
}

if ($cantidadProductos > 3) {
    $descuento += ($totalCompra * 10) / 100;
}

$totalFinal = $totalCompra - $descuento;

echo "Total de compra: " . $totalCompra . "\n";
echo "Descuento aplicado: " . $descuento . "\n";
echo "Total final: " . $totalFinal . "\n";

// ------------------------------------------
// Tarea final:
// ------------------------------------------
// 1. Cambia los valores y prueba varios casos.
// 2. Revisa la diferencia entre && y ||.
// 3. Comprueba la diferencia entre == y ===.
// 4. Cuando termines, comparte el archivo para revisarlo.
