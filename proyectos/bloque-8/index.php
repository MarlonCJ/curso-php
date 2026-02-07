<?php
// ===============================
// PROYECTO 8 - BLOQUE 8
// POO avanzada: herencia y encapsulación
// ===============================

// ---------- CLASE BASE ----------
class Usuario
{
    protected $nombre;
    protected $email;
    protected $edad;

    public function __construct($nombre, $email, $edad)
    {
        $this->nombre = $nombre;
        $this->email  = $email;
        $this->edad   = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    protected function separador()
    {
        echo '-----------------------------<br>';
    }

    public function mostrarBasico()
    {
        echo 'Nombre: ' . $this->nombre . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Edad: ' . $this->edad . '<br>';
        $this->separador();
    }
}

// ---------- CLASE HIJA ----------
class UsuarioAdmin extends Usuario
{
    private $rol;

    public function __construct($nombre, $email, $edad, $rol)
    {
        parent::__construct($nombre, $email, $edad);
        $this->rol = $rol;
    }

    public function mostrarCompleto()
    {
        echo 'Nombre: ' . $this->nombre . '<br>';
        echo 'Email: ' . $this->email . '<br>';
        echo 'Edad: ' . $this->edad . '<br>';
        echo 'Rol: ' . $this->rol . '<br>';
        $this->separador();
    }
}

// ---------- INSTANCIAS ----------
$usuario = new Usuario('Juan Pérez', 'juan@email.com', 28);
$admin   = new UsuarioAdmin('Marlonete', 'admin@email.com', 25, 'Administrador');

// ---------- SALIDA HTML ----------
echo '<!DOCTYPE html>';
echo '<html lang="es">';
echo '<head>';
echo '    <meta charset="UTF-8">';
echo '    <title>POO Avanzada</title>';
echo '</head>';
echo '<body>';

echo '<h1>Usuario Básico</h1>';
$usuario->mostrarBasico();

echo '<h1>Usuario Administrador</h1>';
$admin->mostrarCompleto();

echo '</body>';
echo '</html>';
