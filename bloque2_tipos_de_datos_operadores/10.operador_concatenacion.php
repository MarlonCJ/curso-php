<?php

// 🧠 TEMA 10 — OPERADOR DE CONCATENACIÓN EN PHP

// 📖 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// La concatenación permite unir valores, principalmente strings.

// En PHP se realiza con el operador:

// .

// 👉 Es fundamental en:

// Salidas dinámicas (echo)
// Construcción de mensajes
// Generación de HTML
// Consultas y logs

// 🔑 CONCEPTO CLAVE

// PHP NO usa + para concatenar, usa .

// ⚙️ EJEMPLO BÁSICO

// $nombre = "Carlos";
// echo "Hola " . $nombre;

// 👉 Resultado:

// Hola Carlos

// 💻 CÓDIGO COMPLETO FUNCIONAL


$nombre = "Carlos";
$edad = 30;

$mensaje = "Nombre: " . $nombre . " - Edad: " . $edad;

echo $mensaje;

// 🔬 EXPLICACIÓN TÉCNICA DETALLADA

// PHP convierte automáticamente a string si es necesario:

// echo "Edad: " . 25;

// 👉 Resultado: "Edad: 25"

// 🔸 Diferencia con comillas dobles

// echo "Hola $nombre";

// 👉 Funciona, pero:

// ⚠️ NO es recomendable en código complejo

// porque puede generar ambigüedad

// 🔸 Concatenación con asignación

// $texto = "Hola";
// $texto .= " Mundo";

// 👉 Resultado: "Hola Mundo"

// ⚠️ PRECEDENCIA (CRÍTICO)

// echo "Resultado: " . 5 + 5;

// 👉 Resultado: 10

// Porque PHP evalúa primero la suma.

// Para corregir:

// echo "Resultado: " . (5 + 5);

// 👉 Resultado: "Resultado: 10"

// ✅ BUENAS PRÁCTICAS

// ✔ Usa . para concatenar siempre
// ✔ Usa paréntesis en operaciones mixtas
// ✔ Mantén claridad en cadenas largas

// Ejemplo profesional:

// $mensaje = "Total: " . ($precio * $cantidad);

// ❌ ERRORES COMUNES (CRÍTICOS)

// 1. Usar + en lugar de .
// echo "Hola " + "Carlos"; // ERROR

// 2. No controlar precedencia
// echo "Total: " . 5 + 5;

// 3. Código ilegible
// echo "A".$b."C".$d;

// 👉 Mala práctica

// ⚠️ PUNTO PROFESIONAL

// La concatenación mal usada genera:

// Bugs visuales
// Salidas incorrectas
// Código difícil de mantener

// Un desarrollador profesional:

// Escribe cadenas claras
// Controla precedencia
// Evita ambigüedad

// 🔥 FIN DEL BLOQUE 2

// Has terminado la fase de enseñanza.

// Ahora pasas a la fase crítica:

// 👉 PRÁCTICA Y EVALUACIÓN REAL

// 🧪 SIGUIENTE PASO

// Voy a generarte 20 ejercicios obligatorios:

// 5 básicos
// 10 intermedios
// 5 avanzados

// ⚠️ REGLAS:

// No recibirás soluciones
// No hay pistas
// Evaluación estricta
// Nota mínima: 8.5 / 10