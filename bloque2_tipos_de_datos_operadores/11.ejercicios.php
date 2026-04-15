<?php

// 🟢 EJERCICIOS BÁSICOS (1–3)

// 🧩 EJERCICIO 1

// Objetivo:
// Aplicar tipos de datos y concatenación de forma controlada.

// Contexto:
// Un sistema requiere mostrar información básica de un empleado.

// Instrucciones:

// Crear exactamente:
// $nombre = "Ana";
// $edad = 25;
// $salario = 1200.50;
// Mostrar EXACTAMENTE:
// Empleado: Ana
// Edad: 25
// Salario: 1200.5

// Salida esperada EXACTA:

// Empleado: Ana
// Edad: 25
// Salario: 1200.5

// Reglas técnicas:

// Usar echo
// Usar concatenación (.)
// No usar <br>
// No agregar espacios extra

$nombre = "Ana";
$edad = 25;
$salario = 1200.50;

echo "Empleado: " . $nombre . "\n";
echo "Edad: " . $edad . "\n";
echo "Salario: " . $salario . "\n"; 


// 🧩 EJERCICIO 2

// Objetivo:
// Identificar tipos reales en PHP.

// Contexto:
// Validación de datos antes de procesamiento.

// Instrucciones:

// Crear:
// $a = "200";
// $b = 200;
// $c = true;
// Mostrar SOLO con var_dump en este orden:
// $a
// $b
// $c

// Salida esperada EXACTA:

// string(3) "200"
// int(200)
// bool(true)

// Reglas técnicas:

// No usar echo adicional
// No modificar valores

$a = "200";
$b = 200;
$c = true;

var_dump($a);
var_dump($b);
var_dump($c);


// 🧩 EJERCICIO 3

// Objetivo:
// Aplicar casting correctamente.

// Contexto:
// Un valor llega como string desde base de datos.

// Instrucciones:

// Crear:
// $valor = "75.9";
// Convertir a entero
// Mostrar SOLO el resultado

// Salida esperada EXACTA:

// 75

// Reglas técnicas:

// No usar var_dump
// No imprimir valor original

$valor = "75.9";

echo (int)$valor. "\n";

// 🟡 EJERCICIOS INTERMEDIOS (4–7)

// 🧩 EJERCICIO 4

// Objetivo:
// Aplicar operadores aritméticos correctamente.

// Contexto:
// Sistema de cálculo simple.

// Instrucciones:

// Crear:
// $x = 8;
// $y = 3;
// Mostrar EXACTAMENTE:
// Suma: 11
// Multiplicacion: 24
// Modulo: 2

// Salida esperada EXACTA:

// Suma: 11
// Multiplicacion: 24
// Modulo: 2

// Reglas técnicas:

// Cada línea separada
// No agregar texto adicional

$x = 8;
$y = 3;

echo "Suma: " . ($x + $y) . "\n";
echo "Multiplicacion: " . ($x * $y) . "\n";
echo "Modulo: " . ($x % $y) . "\n";


// 🧩 EJERCICIO 5

// Objetivo:
// Uso de operadores de asignación.

// Contexto:
// Acumulación de valores en sistema.

// Instrucciones:

// Crear:
// $total = 20;
// Aplicar:
// $total -= 5;
// $total += 10;
// Mostrar SOLO resultado final

// Salida esperada EXACTA:

// 25

// Reglas técnicas:

// No mostrar pasos intermedios

$total = 20;

$total -= 5;
$total += 10;

echo $total . "\n";



// 🧩 EJERCICIO 6

// Objetivo:
// Comparación estricta vs débil.

// Contexto:
// Validación de datos en sistema crítico.

// Instrucciones:

// Crear:
// $a = "5";
// $b = 5;
// Mostrar SOLO con var_dump:
// $a == $b;
// $a === $b;

// Salida esperada EXACTA:

// bool(true)
// bool(false)

// Reglas técnicas:

// No usar echo

$a = "5";
$b = 5;

var_dump($a == $b);
var_dump($a === $b);

// 🧩 EJERCICIO 7

// Objetivo:
// Uso de operadores lógicos.

// Contexto:
// Validar condiciones de acceso.

// Instrucciones:

// Crear:
// $activo = true;
// $verificado = false;
// Evaluar:
// $resultado = $activo && $verificado;
// Mostrar con var_dump

// Salida esperada EXACTA:

// bool(false)

// Reglas técnicas:

// No usar if
// No usar ternario

$activo = true;
$verificado = false;

$resultado = $activo && $verificado;

var_dump($resultado);


// 🔴 EJERCICIOS AVANZADOS (8–10)
// 🧩 EJERCICIO 8

// Objetivo:
// Precedencia de operadores.

// Contexto:
// Evaluación matemática en sistema.

// Instrucciones:

// Crear EXACTAMENTE:
// $resultado = 10 - 2 * 3;
// Mostrar resultado

// Salida esperada EXACTA:

// 4

// Reglas técnicas:

// No usar paréntesis
// No modificar expresión

$resultado = 10 - 2 * 3;
echo $resultado. "\n";

// 🧩 EJERCICIO 9

// Objetivo:
// Uso de operador ternario.

// Contexto:
// Sistema de validación de edad.

// Instrucciones:

// Crear:
// $edad = 18;
// Evaluar con ternario:
// Si edad >= 18 → "Acceso permitido"
// Si no → "Acceso denegado"
// Mostrar resultado

// Salida esperada EXACTA:

// Acceso permitido

// Reglas técnicas:

// Debes usar operador ternario
// No usar if

$edad = 18;

echo ($edad >= 18) ? 'Acceso permitido' : 'Acceso denegado';
echo "\n";

// 🧩 EJERCICIO 10

// Objetivo:
// Casting + operación + concatenación.

// Contexto:
// Sistema de facturación.

// Instrucciones:

// Crear:
// $precio = "50";
// $cantidad = 4;
// Convertir precio a entero
// Calcular total
// Mostrar EXACTAMENTE:
// Total: 200

// Salida esperada EXACTA:

// Total: 200

// Reglas técnicas:

// Usar casting
// Usar concatenación
// No agregar texto adicional

$precio = "50";
$cantidad = 4;
$total = (int)$precio * $cantidad;

echo 'Total: ' . $total;