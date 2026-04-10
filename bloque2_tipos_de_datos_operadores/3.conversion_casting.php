<?php


// 🧠 TEMA 3 — CONVERSIÓN DE TIPOS (CASTING) EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// El casting es el proceso de convertir explícitamente un tipo de dato en otro.

// 👉 A diferencia del tipado dinámico (automático), aquí tú tomas el control.

// Esto es crítico en:

// Validación de datos
// Seguridad
// Cálculos precisos
// Entrada de formularios

// 🔑 ¿POR QUÉ ES IMPORTANTE?

// PHP convierte tipos automáticamente…
// pero esa conversión puede ser impredecible o peligrosa.

// Un desarrollador profesional:

// ✔ NO confía en conversiones automáticas
// ✔ Fuerza el tipo cuando es necesario

// 🔄 TIPOS DE CASTING EN PHP

// 1. (int) → convertir a entero

$numero = (int) "10";

// 2. (float) → convertir a decimal

$precio = (float) "19.99";

// 3. (string) → convertir a texto

$texto = (string) 100;

// 4. (bool) → convertir a booleano

$estado = (bool) 1;

// 💻 CÓDIGO COMPLETO FUNCIONAL

$valor = "25.7";

echo "Valor original:<br>";
var_dump($valor);

$entero = (int) $valor;
echo "<br>Convertido a entero:<br>";
var_dump($entero);

$decimal = (float) $valor;
echo "<br>Convertido a float:<br>";
var_dump($decimal);

$booleano = (bool) $valor;
echo "<br>Convertido a boolean:<br>";
var_dump($booleano);

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// 🔸 Conversión a entero (int)

// (int) "25.7" → 25

// 👉 Elimina los decimales (no redondea, TRUNCA)

// 🔸 Conversión de string con texto

// (int) "100abc" → 100
// (int) "abc100" → 0

// 👉 PHP evalúa desde el inicio del string

// 🔸 Conversión a booleano
// Valor	Resultado
// 0	false
// ""	false
// "0"	false
// cualquier otro	true

// Ejemplo crítico:

// (bool) "false" → true

// ⚠️ Esto confunde a muchos desarrolladores junior

// ✅ BUENAS PRÁCTICAS

// Usa casting cuando trabajes con datos externos (formularios, APIs)
// Valida antes de convertir
// No asumas que el dato es correcto
// Mantén control total del tipo

// Ejemplo profesional:

$edad = (int) $_POST['edad'];

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. Confiar en strings “numéricos”
$valor = "10px";
$total = $valor * 2; // resultado inesperado

// 2. Creer que "false" es false

// (bool) "false" // true

// 3. No validar entrada de usuario

$edad = (int) $_GET['edad'];

// 👉 Si viene vacío → resultado 0 (error lógico grave)

// ⚠️ PUNTO PROFESIONAL

// El casting es una herramienta de control.

// Un programador junior:
// → deja que PHP decida

// Un programador profesional:
// → define exactamente qué tipo debe tener cada dato