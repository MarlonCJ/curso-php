<?php
// ===============================
// PROYECTO 6 - BLOQUE 6
// Errores y depuración
// ===============================

require_once 'config.php';
require_once 'debug.php';

// ---------- VARIABLES ----------
$nombre = 'Marlonete';
$edad   = '25'; // string, no int

// ---------- ERROR 1: VARIABLE NO DEFINIDA ----------
echo $apellido; // Notice

// ---------- ERROR 2: TIPO DE DATO ----------
$resultado = $edad + 5;
echo '<p>Resultado: ' . $resultado . '</p>';

// ---------- ARRAY ----------
$usuario = [
    'nombre' => 'Juan Pérez',
    'email'  => 'juan@email.com',
];

// ---------- ERROR 3: ÍNDICE INEXISTENTE ----------
echo '<p>Teléfono: ' . $usuario['telefono'] . '</p>';

// ---------- DEPURACIÓN ----------
debug($usuario);
