<?php

class Producto {

    protected $nombre;
    protected $precio;

    public function __construct($nombre, $precio) {
        
        $this -> nombre = $nombre;
        $this -> precio = $precio;
    }

    public function getInfo() {
        return $this -> nombre . ' cuesta ' . $this -> precio;
    }
}

class ProductoDigital extends Producto {
    
    private $tamanoMB;

    public function __construct($nombre, $precio, $tamanoMB) {
        parent::__construct($nombre, $precio);
        $this -> tamanoMB = $tamanoMB;
    }

    public function getInfoCompleta() {
        return $this -> getInfo() . ' y pesa ' . $this -> tamanoMB . 'MB';
    }
}

$ebook = new ProductoDigital('Ebook PHP', 50000, 20);
echo $ebook -> getInfoCompleta();