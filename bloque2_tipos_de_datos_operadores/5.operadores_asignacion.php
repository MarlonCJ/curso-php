<?php

// 🧠 TEMA 5 — OPERADORES DE ASIGNACIÓN EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// Los operadores de asignación se utilizan para asignar valores a variables.

// El más básico es:

// $variable = valor;

// Pero en entornos reales se utilizan versiones compuestas para optimizar código y mejorar legibilidad.

// 🔑 OPERADORES DE ASIGNACIÓN PRINCIPALES

// Operador	Descripción	Ejemplo	Equivalente

// =	Asignación simple	$a = 10	—
// +=	Suma y asigna	$a += 5	$a = $a + 5
// -=	Resta y asigna	$a -= 5	$a = $a - 5
// *=	Multiplica y asigna	$a *= 5	$a = $a * 5
// /=	Divide y asigna	$a /= 5	$a = $a / 5
// %=	Módulo y asigna	$a %= 5	$a = $a % 5
// .=	Concatenación y asigna	$a .= "texto"	$a = $a . "texto"

// 💻 CÓDIGO COMPLETO FUNCIONAL

$numero = 10;

$numero += 5;  // 15
echo "Suma: $numero <br>";

$numero -= 3;  // 12
echo "Resta: $numero <br>";

$numero *= 2;  // 24
echo "Multiplicación: $numero <br>";

$numero /= 4;  // 6
echo "División: $numero <br>";

$numero %= 4;  // 2
echo "Módulo: $numero <br>";

$texto = "Hola";
$texto .= " Mundo";

echo "Concatenación: $texto";


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// 🔸 += (acumulación)

// Muy usado en:

// Contadores
// Totales
// Bucles
// $total += $precio;

// 🔸 .= (concatenación)

// Solo aplica para strings:

// $mensaje .= " adicional";

// 👉 Evita reescribir toda la variable

// 🔸 Evaluación interna

// $a += 5;

// Internamente PHP hace:

// $a = $a + 5;

// Pero de forma más eficiente.

// ✅ BUENAS PRÁCTICAS

// Usa operadores compuestos para claridad
// Evita repetir variables innecesariamente
// Mantén consistencia en operaciones

// Ejemplo profesional:

// $totalCompra += $productoPrecio;

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. Usar variables no inicializadas
// $total += 10; // ERROR si $total no existe

// 2. Concatenar sin controlar tipo

// $valor = 10;
// $valor .= "5"; // resultado: "105"

// 3. Confundir = con ==

// $a = 5; // asigna
// $a == 5; // compara

// 👉 Error clásico y crítico

// ⚠️ PUNTO PROFESIONAL

// Los operadores de asignación son clave en:

// Optimización
// Legibilidad
// Mantenimiento del código

// Un desarrollador profesional escribe:

// ✔ Código limpio
// ✔ Código eficiente
// ✔ Código predecible