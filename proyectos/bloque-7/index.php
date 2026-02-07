<?php
// ===============================
// PROYECTO 7 - BLOQUE 7
// Programación Orientada a Objetos
// ===============================

// ---------- CLASE ----------
class Usuario
{
    public $nombre;
    public $email;
    public $edad;
    public $estado;

    // Constructor
    public function __construct($nombre, $email, $edad, $estado)
    {
        $this->nombre = $nombre;
        $this->email  = $email;
        $this->edad   = $edad;
        $this->estado = $estado;
    }

    // Método para mostrar información
    public function mostrar()
    {
        echo 'Nombre: ' . $this->nombre . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Edad: ' . $this->edad . '<br>';
        echo 'Estado: ' . $this->estado . '<br>';
        echo '-----------------------------<br>';
    }
}

// ---------- INSTANCIAS ----------
$usuario1 = new Usuario('Juan Pérez', 'juan@email.com', 28, 'Activo');
$usuario2 = new Usuario('Ana Gómez', 'ana@email.com', 17, 'Inactivo');
$usuario3 = new Usuario('Carlos Ruiz', 'carlos@email.com', 35, 'Activo');

// ---------- SALIDA HTML ----------
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <title>Usuarios con POO</title>';
echo '</head>';
echo '<body>';

echo '<h1>Listado de Usuarios (POO)</h1>';

$usuario1->mostrar();
$usuario2->mostrar();
$usuario3->mostrar();

echo '</body>';
echo '</html>';
