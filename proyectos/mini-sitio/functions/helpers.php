<?php
// ===============================
// Funciones auxiliares del sitio
// BLOQUE 4
// ===============================

/**
 * Devuelve un texto de estado formateado
 */
function obtenerEstadoUsuario($estado)
{
    return $estado === 'Activo'
        ? '🟢 Activo'
        : '🔴 Inactivo';
}

/**
 * Devuelve la edad con formato
 */
function formatearEdad($edad)
{
    return $edad . ' años';
}
