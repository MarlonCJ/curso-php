<?php

// ==============================
// AUTOCARGADOR MANUAL
// ==============================

spl_autoload_register(function ($clase) {

    // Ruta base donde están las clases
    $rutaBase = __DIR__ . '/clases/';

    // Construimos la ruta completa del archivo
    $archivo = $rutaBase . $clase . '.php';

    // Verificamos si existe el archivo antes de incluirlo
    if (file_exists($archivo)) {
        require_once $archivo;
    }
});


// ==============================
// USO DE LAS CLASES
// ==============================

$usuario = new Usuario();
$producto = new Producto();

echo $usuario->saludar();
echo "<br>";
echo $producto->descripcion();