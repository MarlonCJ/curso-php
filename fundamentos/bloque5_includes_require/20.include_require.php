<?php
/*

🔹 BLOQUE 5 — INCLUDES & REQUIRE EN PHP

❓ ¿Para qué sirven?

Sirven para dividir el código en archivos y reutilizarlos.

📌 Sin esto:

Código desordenado

Archivos gigantes

Imposible escalar

Plugins mal hechos

🔹 5.1 include

*/

// INCLUDE

include 'header.php';

/*
¿Qué hace?

    - Incluye el archivo
    - Si falla → WARNING
    - El script continúa

📌 Uso típico:

    - Archivos no críticos
    - Vistas
    - Plantillas

*/

// REQUIRE

require 'config.php';

/*
¿Qué hace?

    - Incluye el archivo
    - Si falla → ERROR FATAL
    - El script se detiene

📌 Uso típico:

    - Configuración
    - Clases
    - Funciones críticas

🔹 5.3 require_once (EL MÁS IMPORTANTE)
*/

require_once 'funciones.php';

/*
Qué hace?

    Incluye el archivo
    Solo una vez
    Evita redeclaraciones

📌 En WordPress:

Se usa SIEMPRE
*/

// 🔹 5.4 ¿Por qué require_once es tan importante?

// ❌ Sin once:

function saludar() {}
function saludar() {} // ERROR

/*
✅ Con require_once:

    El archivo se carga una sola vez
    Evitas errores fatales
    Código seguro

🔹 5.5 Rutas correctas (MUY IMPORTANTE)

❌ MAL:

*/

require 'funciones.php';

/*
Puede fallar según el contexto.

✅ BIEN:
*/

require_once __DIR__ . '/funciones.php';

/*
📌 __DIR__ = ruta absoluta segura.

👉 Regla profesional:

Nunca confíes en rutas relativas.

🔹 5.6 Ejemplo real (estructura profesional)
*/

/*
/proyecto
 ├── index.php
 ├── config.php
 └── includes/
     └── funciones.php


// index.php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/funciones.php';


🧠 Mentalidad profesional

    Un archivo = una responsabilidad
    Todo lo crítico → require_once
    Rutas absolutas

Código ordenado

    👉 Esto marca la diferencia en proyectos reales.

*/

