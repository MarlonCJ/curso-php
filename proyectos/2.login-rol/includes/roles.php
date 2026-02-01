<?php

function require_role($rol_requerido)
{
    if (!isset($_SESSION['rol'])) {
        header('Location: index.php');
        exit;
    }

    if ($_SESSION['rol'] !== $rol_requerido) {
        echo 'Acceso denegado';
        exit;
    }
}
