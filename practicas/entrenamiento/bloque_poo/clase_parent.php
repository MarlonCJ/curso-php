<?php


class Vehiculo {

    protected $marca;

    public function __construct($marca)
    {
        $this-> marca = $marca;
    }

    public function obtenerMarca(){
        return $this->marca;
    }

}


class Carro extends Vehiculo {

    private $modelo;

    public function __construct($marca , $modelo)
    {
        parent:: __construct($marca);
        $this->modelo = $modelo;
    }

    public function ObtenerDetalle(){
        return $this->marca;
    }
}


$transporte = new Carro('Toyota','2026');
echo $transporte ->obtenerDetalle();
