<?php
// ===============================
// Bootstrap del sistema
// ===============================

require_once __DIR__ . '/config/config.php';

// Entorno y errores
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Carga de dominio y datos
require_once __DIR__ . '/data/usuarios.php';
require_once __DIR__ . '/functions/helpers.php';
