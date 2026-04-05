<?php

// 🧩 TEMA 3 — INSTALACIÓN Y ENTORNO DE EJECUCIÓN

// 🎯 EXPLICACIÓN PROFUNDA (NIVEL PROFESIONAL)

// PHP no es solo un lenguaje.
// Es parte de un ecosistema de ejecución.

// Para que PHP funcione necesitas 3 componentes:

// 🔥 STACK BÁSICO (ARQUITECTURA REAL)

// Servidor web → Apache / Nginx
// Motor PHP → Intérprete (Zend Engine)
// Sistema de archivos → donde viven tus scripts

// 🧠 OPCIÓN REALISTA DE DESARROLLO

// En entorno profesional NO instalas todo manualmente al inicio.

// Usas paquetes como:

// XAMPP
// WAMP
// Laragon

// ⚙️ ENTORNO RECOMENDADO (PRÁCTICO)

// ✔️ XAMPP (más común)

// Incluye:

// Apache (servidor)
// PHP (intérprete)
// MySQL (base de datos)

// 🔧 FLUJO REAL DE EJECUCIÓN LOCAL

// Cuando instalas XAMPP:

// Inicias Apache
// Colocas archivos en:
// /htdocs/

// Ejemplo:

// /htdocs/index.php
// Accedes desde el navegador:
// http://localhost/index.php

// ⚙️ CÓDIGO COMPLETO FUNCIONAL

// Archivo: index.php

// <?php

// echo "Servidor funcionando correctamente";

// 🔍 EXPLICACIÓN TÉCNICA

// Apache escucha en el puerto 80
// localhost apunta a tu máquina
// PHP se ejecuta dentro del servidor
// El archivo NO se abre directamente (doble clic ❌)

// ⚠️ ERROR CRÍTICO (MUY COMÚN)

// ❌ Abrir archivo así:

// C:\xampp\htdocs\index.php

// ✔️ Forma correcta:

// http://localhost/index.php

// 🧱 BUENAS PRÁCTICAS

// Usar rutas limpias dentro de /htdocs
// Nombrar archivos correctamente
// Mantener estructura organizada desde el inicio
// Verificar que Apache esté activo antes de probar

// ❌ ERRORES COMUNES

// No iniciar Apache
// Abrir archivos como HTML
// No instalar correctamente el entorno
// No entender qué componente falla (PHP vs servidor)

// 🧠 CONCEPTO CLAVE

// PHP necesita un servidor para ejecutarse.
// No funciona como un archivo independiente.