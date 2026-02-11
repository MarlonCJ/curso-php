<?php
function obtenerEstadoUsuario(bool $activo): string
{
    return $activo ? '🟢 Activo' : '🔴 Inactivo';
}

function formatearEdad(int $edad): string
{
    return $edad . ' años';
}

function debug($variable): void
{
    if (APP_ENV !== 'development') {
        return;
    }

    echo '<pre style="background:#111;color:#0f0;padding:10px;">';
    var_dump($variable);
    echo '</pre>';
}
