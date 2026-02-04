<?php
// ===============================
// PROYECTO 2 - BLOQUE 2
// Sistema básico de validación
// ===============================

// ---------- VARIABLES ----------
$nombre = 'Marlonete';
$edad   = 17;
$pais   = 'Colombia';

// ---------- VALIDACIÓN CON IF / ELSE ----------
if ($edad >= 18) {
    $mensajeEdad = 'Eres mayor de edad';
} else {
    $mensajeEdad = 'Eres menor de edad';
}

// ---------- VALIDACIÓN CON OPERADORES LÓGICOS ----------
if ($edad >= 18 && $pais === 'Colombia') {
    $mensajePais = 'Puedes registrarte legalmente en Colombia';
} else {
    $mensajePais = 'No cumples los requisitos para registrarte';
}

// ---------- VALIDACIÓN CON SWITCH ----------
switch ($pais) {
    case 'Colombia':
        $mensajePaisOrigen = 'Tu país es Colombia';
        break;

    case 'México':
        $mensajePaisOrigen = 'Tu país es México';
        break;

    case 'Argentina':
        $mensajePaisOrigen = 'Tu país es Argentina';
        break;

    default:
        $mensajePaisOrigen = 'País no reconocido';
        break;
}

// ---------- SALIDA HTML ----------
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <title>Proyecto 2 - Lógica en PHP</title>';
echo '</head>';
echo '<body>';

echo '    <h1>Validación de datos</h1>';
echo '    <p><strong>Nombre:</strong> ' . $nombre . '</p>';
echo '    <p><strong>Edad:</strong> ' . $edad . '</p>';
echo '    <p><strong>Resultado:</strong> ' . $mensajeEdad . '</p>';
echo '    <p><strong>Registro:</strong> ' . $mensajePais . '</p>';
echo '    <p><strong>País:</strong> ' . $mensajePaisOrigen . '</p>';

echo '</body>';
echo '</html>';
