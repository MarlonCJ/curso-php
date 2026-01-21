
<?php

// ❓ ¿Qué es una constante?

// Una constante es un valor que NO cambia durante la ejecución del programa.

// 📌 Diferencia clave:

// Variable	        Constante
// Puede cambiar	    ❌ No cambia
// $	                ❌ No usa $
// Scope normal	    Global

// 🔹 Cómo definir constantes (FORMA MODERNA)

define('VERSION','1.0.0');

// O recomendado en PHP moderno

const VERSION = '1.0.0';

// 📌 En WordPress se usa muchísimo.

// 🔹 Ejemplos reales

const SITE_NAME = 'Mi web';
const IVA = 0.19;

echo SITE_NAME;

/*
📌 No se concatena con $.

🔹 Cuándo usar CONSTANTES (regla profesional)

Usa constantes cuando:

- El valor no debe cambiar
- Es configuración
- Es global
- Es identificador

Ejemplos:

- Versión del plugin
- Nombre del plugin
- Roles
- Estados fijos

❌ No usar constantes para:

- Datos del usuario
- Valores dinámicos
- Contadores

🔹 Ejemplo real (plugin WordPress)

*/

const PLUGIN_VERSION = '1.0.0';
const PLUGIN_PATH = __DIR__;

// 👉 Esto lo verás siempre en plugins profesionales.

// 🧠 ERROR COMÚN (importante)

// ❌ Esto está MAL:

// $IVA = 0.19;

// Porque el IVA no debería cambiar.

// ✅ Correcto:

// const IVA = 0.19;

