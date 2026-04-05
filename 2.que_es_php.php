<?php

// 🧠 TEMA 1 — ¿QUÉ ES PHP Y CÓMO FUNCIONA INTERNAMENTE?

// 🎯 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// PHP es un lenguaje de scripting del lado del servidor.

// Pero esa definición es superficial.

// A nivel profesional, debes entender esto:

// PHP es un intérprete que vive en el servidor y ejecuta código bajo demanda en cada petición HTTP.

// 🔥 MODELO REAL DE EJECUCIÓN

// Cuando un usuario accede a una página:

// El navegador envía una petición HTTP
// El servidor (Apache/Nginx) recibe la petición
// El servidor detecta que el archivo es .php
// Envía el archivo al motor de PHP (Zend Engine)
// PHP:
// Lee el código
// Lo interpreta (no lo compila permanentemente)
// Ejecuta instrucción por instrucción
// PHP genera una salida (HTML, JSON, etc.)
// El servidor devuelve esa respuesta al navegador

// ⚠️ PUNTO CRÍTICO

// PHP no vive en el navegador.

// Todo ocurre en el servidor.

// El usuario nunca ve el código PHP, solo el resultado.

// ⚙️ CÓDIGO COMPLETO FUNCIONAL


echo "Hola mundo";

// 🔍 EXPLICACIÓN TÉCNICA

// <?php → indica al servidor: “aquí comienza PHP”
// echo → instrucción del lenguaje para enviar salida
// "Hola mundo" → string (cadena de texto)

// ?> → cierre del bloque PHP (opcional en muchos casos)

// 🧠 ¿QUÉ PASA INTERNAMENTE?

// El motor de PHP convierte esto en algo similar a:

// OUTPUT_BUFFER ← "Hola mundo"

// Luego lo envía al navegador como:

// Hola mundo

// 🧱 BUENAS PRÁCTICAS

// No cerrar ?> en archivos solo PHP (evita errores de salida)
// Mantener separación entre lógica y presentación
// Evitar mezclar PHP con HTML sin control
// Usar codificación UTF-8 siempre

// ❌ ERRORES COMUNES

// Pensar que PHP se ejecuta en el navegador
// Creer que PHP es persistente (NO lo es, se ejecuta por petición)
// Mezclar lógica compleja dentro del HTML
// No entender el ciclo request/response

// 🧠 CONCEPTO CLAVE QUE DEBES DOMINAR

// PHP es stateless:
// cada petición es independiente, no recuerda nada automáticamente.

// ⛔ CONTROL DEL SISTEMA

