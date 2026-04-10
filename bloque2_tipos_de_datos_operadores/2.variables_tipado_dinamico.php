<?php

// 🧠 TEMA 2 — VARIABLES Y TIPADO DINÁMICO EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// En PHP, las variables son contenedores de información cuyo tipo puede cambiar durante la ejecución del programa.
// Esto se conoce como tipado dinámico.

// 👉 No defines el tipo… pero PHP lo asigna automáticamente según el valor.

// 🔑 ¿Qué es una variable en PHP?

// Es un espacio en memoria que almacena un valor.

$nombre = "Carlos";

// Reglas obligatorias:

// Siempre comienzan con $
// No pueden empezar con número
// Son sensibles a mayúsculas y minúsculas ($edad ≠ $Edad)

// ⚙️ TIPADO DINÁMICO (CLAVE PROFESIONAL)

// Una misma variable puede cambiar de tipo en cualquier momento:

$variable = "Hola";  // string
$variable = 10;      // integer
$variable = true;    // boolean

// 🔴 Esto es poderoso… pero también peligroso si no se controla.

// 💻 CÓDIGO COMPLETO FUNCIONAL


$valor = "100";

echo "Valor inicial: ";
var_dump($valor);

$valor = 100;

echo "<br>Valor convertido: ";
var_dump($valor);

$valor = false;

echo "<br>Valor final: ";
var_dump($valor);


// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// PHP no fija el tipo en la variable, sino en el valor (zval interno)
// Cada reasignación reemplaza completamente el tipo anterior
// No hay validación automática de coherencia

// Ejemplo crítico:

$precio = "20";
$total = $precio * 2;

// 👉 PHP convierte automáticamente "20" a número → resultado 40

// Pero:

$precio = "20USD";
$total = $precio * 2;

// 👉 Resultado: 40 (PHP ignora texto restante)

// ⚠️ Esto puede generar errores silenciosos en producción.

// ✅ BUENAS PRÁCTICAS

// Mantén coherencia de tipo en una variable
// No reutilices variables para diferentes propósitos
// Usa var_dump() para validar tipo real
// Sé explícito cuando sea necesario (casting lo veremos después)

// Ejemplo profesional:

$precioProducto = 20.5;

// ❌ Evita:

$x = 20.5;

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. Reutilizar variables sin control

$dato = "Carlos";

$dato = 25; // cambia completamente el significado

// 2. Confiar en conversiones automáticas

$numero = "10 manzanas";
echo $numero + 5; // resultado inesperado

// 3. Variables mal nombradas

$a = 10;
$b = 20;

// 👉 Código ilegible = rechazo en entorno profesional

// ⚠️ PUNTO PROFESIONAL

// El tipado dinámico no es una ventaja si no tienes control.

// Un desarrollador profesional:

// Mantiene consistencia
// Evita conversiones implícitas peligrosas
// Escribe código predecible
