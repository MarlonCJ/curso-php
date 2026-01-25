
<?php


class Usuario {

    private $nombre;
    private $rol;

    public function __construct($nombre, $rol) {
        
        $this -> nombre = $nombre;
        $this -> rol = $rol;
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getRol() {
        return $this -> rol;
    }

    public function esAdmin() {
        return $this -> rol === 'admin';
    }

}


$usuario = new Usuario('Marlon', 'admin');

echo $usuario -> getNombre();
echo '<br>';

if($usuario -> esAdmin()) {
    echo 'Acceso total';
} else{
    echo 'Acceso limitado';
}