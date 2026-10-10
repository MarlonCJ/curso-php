<?php

// ======================================================
// Tema 3: Ejercicios para resolver - Condicionales
// ======================================================
// Instrucciones:
// 1. Cambia cada valor para probar distintos casos.
// 2. Escribe la lógica con if, else, elseif.
// 3. Comprueba el resultado con diferentes entradas.

// ------------------------------------------------------
// Ejercicio 1: Mayor de edad
// ------------------------------------------------------
// Declara una variable $edad.
// Si es mayor o igual a 18, muestra "Eres mayor de edad".
// En caso contrario, muestra "Eres menor de edad".


// Escribe tu solución aquí

$edad = 15; // Cambia este valor para probar diferentes casos

if($edad >= 18){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 2: Número par o impar
// ------------------------------------------------------
// Declara una variable $numero.
// Usa el operador % para saber si es par o impar.

// Escribe tu solución aquí

$numero = 33;

if($numero % 2 == 0){
    echo "Es un número par";
}else{
    echo "Es un número impar";
}

echo "\n";


// ------------------------------------------------------
// Ejercicio 3: Login básico
// ------------------------------------------------------
// Declara $usuario y $password.
// Si el usuario es "admin" y la contraseña es "1234",
// muestra "Acceso correcto".
// Si no, muestra "Acceso incorrecto".

$usuario = "admin";
$contraseña = "12345";

if($usuario === "admin" && $contraseña === "1234"){
    echo "Acceso correcto";
}else{
    echo "Acceso incorrecto";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 4: Acceso a un evento
// ------------------------------------------------------
// Declara $edadEvento y $tieneEntrada.
// La persona puede entrar si es mayor o igual a 18 y tiene entrada.

$edadEvento = 10;
$tieneEntrada = true;


if($edadEvento >= 18 && $tieneEntrada == true){
    echo "Puede entrar";
}else{
    echo "No puede entrar";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 5: Evaluación académica
// ------------------------------------------------------
// Declara $nota.
// Si la nota es >= 4.5 => "Excelente"
// Si es >= 3.0 => "Aprobado"
// Si es menor => "Reprobado"

$nota = 4.5;

if($nota >= 4.5){
    echo "Excelente";
}else if($nota >= 3.0){
    echo "Aprobado";
}else{
    echo "Reprobado";
}

echo "\n";

// ------------------------------------------------------
// Ejercicio 6: Descuento por cantidad
// ------------------------------------------------------
// Declara $cantidadProductos y $precioUnitario.
// Si compra más de 5 productos, aplica un descuento del 20%.
// Si compra más de 3 productos, aplica un descuento del 10%.
// Si compra 3 o menos, no hay descuento.

$cantidadProductos = 5;
$precioUnitario = 500000;
$subtotal = $cantidadProductos * $precioUnitario;

if($cantidadProductos > 5){
    echo $subtotal - ($subtotal * 0.2);
}else if($cantidadProductos > 3){
    echo $subtotal - ($subtotal * 0.1);
}else{
    echo "No hay descuento";
}

echo "\n";


// ------------------------------------------------------
// Ejercicio 7: Comparación estricta
// ------------------------------------------------------
// Declara $valor1 = "18" y $valor2 = 18.
// Muestra el resultado de $valor1 == $valor2 y $valor1 === $valor2.


// Escribe tu solución aquí

$valor1 = "18";
$valor2 = 18;

var_dump($valor1 == $valor2);
var_dump($valor1 === $valor2);

echo "\n";

// ------------------------------------------------------
// Ejercicio 8: Sistema inactivo
// ------------------------------------------------------
// Declara $estaActivo = false.
// Si no está activo, muestra "El sistema está inactivo".


// Escribe tu solución aquí

$estaActivo = false;

if($estaActivo == true){
    echo "Activo";
}else{
    echo "Inactivo";
}

echo "\n";

// ------------------------------------------------------
// Reto final
// ------------------------------------------------------
// Crea un mini sistema que valide:
// - la persona es mayor de edad
// - tiene entrada
// - y tiene un código válido
// Si todo es correcto, muestra "Acceso permitido".
// Si no, muestra "Acceso denegado".


// Escribe tu solución aquí

$edad = 15;
$entrada = true;
$codigo = 2026;

if($edad >= 18 && $entrada == true && $codigo == 2026){
    echo "Acceso Permitido";
}else{
    echo "Acceso Denegado";
}

echo "\n";

// ======================================================
// Fin de los ejercicios
// ======================================================
