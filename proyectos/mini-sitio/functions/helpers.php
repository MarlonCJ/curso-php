<?php
// ===============================
// Helpers del sistema
// BLOQUES 4–6
// ===============================

function obtenerEstadoUsuario($estado)
{
    return $estado === 'Activo'
        ? '🟢 Activo'
        : '🔴 Inactivo';
}

function formatearEdad($edad)
{
    return $edad . ' años';
}

/**
 * Helper de depuración (solo DEV)
 */
function debug($variable)
{
    if (APP_ENV !== 'development') {
        return;
    }

    echo '<pre style="background:#111;color:#0f0;padding:10px;">';
    var_dump($variable);
    echo '</pre>';
}
