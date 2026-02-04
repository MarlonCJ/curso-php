<?php

//==========================
// PROYECTO 1 - BLOQUE 1
// Página PHP Dinámica Profesional
// ============================

// ========CONSTANTES========
define('NOMBRE_SITIO', 'BLOQUE 1');
define('ANIO_ACTUAL', 2026);


// =========VARIABLES===========
$nombreDesarrollador = 'Marlonete';
$rolProfesional = 'Desarrollador Web';
$edad = 32;
$mensaje = 'Bienvenido a mi primera página dinámica en PHP';


// ========= SALIDA HTML ============
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<title>'. NOMBRE_SITIO .'</title>';
echo '</head>';
echo '<body>';
echo '<h1>'. NOMBRE_SITIO .'</h1>';
echo '<p><strong>Nombre:</strong> '. $nombreDesarrollador .'</p>';
echo '<p><strong>Rol:</strong> '. $rolProfesional . '</p>';
echo '<p><strong>Edad: </strong>'. $edad . '</p>';
echo '<p>'.$mensaje. '</p>';
echo '<footer>';
echo '<small>'. ANIO_ACTUAL .'</small>';
echo '</footer>';
echo '</body>';
echo '</html>';