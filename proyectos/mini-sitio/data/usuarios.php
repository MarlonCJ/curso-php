<?php
// ===============================
// Datos simulados como objetos
// BLOQUE 7
// ===============================

require_once __DIR__ . '/../src/Usuario.php';

$usuarios = [
    new Usuario('Juan Pérez', 'juan@email.com', 28, 'Activo'),
    new Usuario('Ana Gómez', 'ana@email.com', 17, 'Inactivo'),
    new Usuario('Carlos Ruiz', 'carlos@email.com', 35, 'Activo'),
];
