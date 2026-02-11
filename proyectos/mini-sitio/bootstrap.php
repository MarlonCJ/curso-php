<?php
// ===============================
// Bootstrap del sistema
// BLOQUE 6
// ===============================

// Configuración base
require_once __DIR__ . '/config/config.php';

// -------------------------------
// Manejo de errores por entorno
// -------------------------------
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Cargar datos y helpers
require_once __DIR__ . '/data/usuarios.php';
require_once __DIR__ . '/functions/helpers.php';
