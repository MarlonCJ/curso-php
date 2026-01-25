<?php


class Producto {

    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this -> nombre = $nombre;
        $this -> precio = $precio;
    }

    public function mostrarInfo() {
        return $this -> nombre . ' cuesta ' . $this -> precio;
    }

}

$producto = new Producto('Televisor', 1200000);

echo $producto -> mostrarInfo();