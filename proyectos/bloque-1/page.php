<?php

// ==================
// PAGINA DE PRACTICA
// ==================

// CONSTANTES

define('NOMBRE_PAGINA', 'BLOQUE 1');
define('ANIO_ACTUAL', 2026);

// VARIABLES

$nombreDesarrollador = 'Marlon Jara';
$profesion = 'Analiste de Sistemas';
$edad = 32;
$mensaje = 'Estoy practicando PHP';

// =====================


echo '<!DOCTYPE html>';
echo '<head>';
echo '  <meta lang="es">';
echo '  <meta charset="UTF-8">';
echo '  <title>'.NOMBRE_PAGINA.'</title>';
echo '</head>';
echo '<body>';
echo '<p><strong>Nombre: </strong>'.$nombreDesarrollador.'</p>';
echo '<p><strong>Profesion: </strong>'.$profesion.'</p>';
echo '<p><strong>Edad: </strong>'.$edad.'</p>';
echo '<p>'.$mensaje.'</p>';
echo '<footer>';
echo '  <small>'.ANIO_ACTUAL.'</small>';
echo '</footer>';
echo '</body>';
echo '</head>';
echo '</html>';
