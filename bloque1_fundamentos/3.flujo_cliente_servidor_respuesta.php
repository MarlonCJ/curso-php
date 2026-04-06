<?php

// 🧩 TEMA 2 — FLUJO CLIENTE → SERVIDOR → RESPUESTA

// 🎯 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// Este es uno de los conceptos más importantes en desarrollo web.

// Si no entiendes esto, no entiendes PHP.

// 🔥 ARQUITECTURA REAL

// El flujo completo funciona así:

// CLIENTE (Navegador)
//         ↓
// PETICIÓN HTTP (Request)
//         ↓
// SERVIDOR (Apache / Nginx)
//         ↓
// MOTOR PHP (Zend Engine)
//         ↓
// RESPUESTA (HTML / JSON)
//         ↓
// CLIENTE (Renderiza)

// 🧠 DESGLOSE TÉCNICO

// 1. CLIENTE (NAVEGADOR)

// Ejemplo:

// Chrome
// Firefox

// El usuario escribe:

// http://localhost/index.php

// 2. PETICIÓN HTTP

// El navegador envía algo como:

// GET /index.php HTTP/1.1
// Host: localhost

// 3. SERVIDOR WEB

// El servidor:

// Recibe la petición
// Detecta archivo .php
// No lo ejecuta directamente
// Lo envía al motor PHP

// 4. MOTOR PHP

// Aquí ocurre lo importante:

// Interpreta el código
// Ejecuta lógica
// Genera salida

// Ejemplo:

// <?php
// echo "Hola desde el servidor";

// 5. RESPUESTA

// El servidor devuelve:

// Hola desde el servidor

// ⚠️ PUNTO CRÍTICO

// El navegador NO SABE QUE EXISTE PHP.

// Solo recibe HTML.

// ⚙️ CÓDIGO COMPLETO FUNCIONAL

// <?php

// $nombre = "Carlos";

// echo "Hola " . $nombre;

// 🔍 EXPLICACIÓN TÉCNICA

// $nombre → variable en memoria
// "Hola " . $nombre → concatenación
// PHP procesa TODO antes de enviar

// Salida final:

// Hola Carlos

// 🧱 BUENAS PRÁCTICAS

// Entender siempre quién ejecuta el código
// No depender del cliente para lógica crítica
// Validar datos en el servidor
// Minimizar lógica en vistas

// ❌ ERRORES COMUNES

// Creer que JavaScript y PHP funcionan igual
// Pensar que puedes acceder a variables PHP desde el navegador
// No diferenciar frontend vs backend
// No entender request vs response

// 🧠 CONCEPTO CLAVE

// Todo lo que hace PHP ocurre ANTES de que el navegador vea algo.