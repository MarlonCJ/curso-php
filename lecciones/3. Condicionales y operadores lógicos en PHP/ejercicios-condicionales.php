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

$edad = 0;

if($edad >= 18){
    echo "eres mayor de edad";
}else{
    echo "eres menor de edad";
}

echo "\n\n";

// Escribe tu solución aquí

// ------------------------------------------------------
// Ejercicio 2: Número par o impar
// ------------------------------------------------------
// Declara una variable $numero.
// Usa el operador % para saber si es par o impar.

$numero = 0;

if($numero % 2 == 0){
    echo "el número es par";
}else{
    echo "el número es impar";
}

echo "\n\n";

// Escribe tu solución aquí

// ------------------------------------------------------
// Ejercicio 3: Login básico
// ------------------------------------------------------
// Declara $usuario y $password.
// Si el usuario es "admin" y la contraseña es "1234",
// muestra "Acceso correcto".
// Si no, muestra "Acceso incorrecto".

$usuario = "admin";
$password = "1234";

if($usuario == "admin" && $password == "1234"){
    echo "Acceso Correcto";
}else{
    echo "Acceso incorrecto";
}

echo "\n\n";

// ------------------------------------------------------
// Ejercicio 4: Acceso a un evento
// ------------------------------------------------------
// Declara $edadEvento y $tieneEntrada.
// La persona puede entrar si es mayor o igual a 18 y tiene entrada.

$edadEvento = 0;
$tieneEntrada = false;

// Escribe tu solución aquí

if($edadEvento >= 18 && $tieneEntrada == true){
    echo "Puedes entrar";
}else{
    echo "No se permite acceso";
}

echo "\n\n";

// ------------------------------------------------------
// Ejercicio 5: Evaluación académica
// ------------------------------------------------------
// Declara $nota.
// Si la nota es >= 4.5 => "Excelente"
// Si es >= 3.0 => "Aprobado"
// Si es menor => "Reprobado"

$nota = 0.0;

// Escribe tu solución aquí
if($nota >= 4.5){
    echo "Excelente";
}elseif($nota >= 3.0){
    echo "Aprovado";
}else{
    echo "Reprobado";
}

echo "\n\n";

// ------------------------------------------------------
// Ejercicio 6: Descuento por cantidad
// ------------------------------------------------------
// Declara $cantidadProductos y $precioUnitario.
// Si compra más de 5 productos, aplica un descuento del 20%.
// Si compra más de 3 productos, aplica un descuento del 10%.
// Si compra 3 o menos, no hay descuento.

$cantidadProductos = 6;
$precioUnitario = 2000;

// Escribe tu solución aquí

if($cantidadProductos >= 5){
    $pago = ($precioUnitario * $cantidadProductos) * 0.20;
    echo $pago;
}6


// ------------------------------------------------------
// Ejercicio 7: Comparación estricta
// ------------------------------------------------------
// Declara $valor1 = "18" y $valor2 = 18.
// Muestra el resultado de $valor1 == $valor2 y $valor1 === $valor2.

$valor1 = "18";
$valor2 = 18;

// Escribe tu solución aquí

// ------------------------------------------------------
// Ejercicio 8: Sistema inactivo
// ------------------------------------------------------
// Declara $estaActivo = false.
// Si no está activo, muestra "El sistema está inactivo".

$estaActivo = false;

// Escribe tu solución aquí

// ------------------------------------------------------
// Reto final
// ------------------------------------------------------
// Crea un mini sistema que valide:
// - la persona es mayor de edad
// - tiene entrada
// - y tiene un código válido
// Si todo es correcto, muestra "Acceso permitido".
// Si no, muestra "Acceso denegado".

$edadPersona = 0;
$tieneEntradaPersona = false;
$codigoValido = false;

// Escribe tu solución aquí

// ======================================================
// Fin de los ejercicios
// ======================================================
