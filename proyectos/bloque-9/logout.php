<?php
require_once 'config.php';

// Cerrar sesión
session_destroy();

// Redirigir al login
header('Location: index.php');
exit;
