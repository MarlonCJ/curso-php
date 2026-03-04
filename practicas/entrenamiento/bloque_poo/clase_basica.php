<?php

declare(strict_types=1);

// 🔥 Nueva Ronda — Fase 1 (Clases básicas)

// Nivel un poco más exigente.

// 1️⃣ Clase Computador

// Propiedades:

// marca

// ram

// almacenamiento

// Método descripcion().


class Computador {
    public string $marca;
    public float $ram;
    public float $almacenamiento;

    public function __construct(string $marca, float $ram, float $almacenamiento){
        $this-> marca = $marca;
        $this->ram = $ram;
        $this->almacenamiento = $almacenamiento;
    }

    public function descripcion(){
        return "Marca: {$this->marca} - Ram: {$this->ram} GB - Almacenamiento: {$this->almacenamiento} GB";
    }

}


$computador = new Computador('ACER', 6, 500);
echo $computador->descripcion().PHP_EOL;



// 2️⃣ Clase Pelicula

// Propiedades:

// titulo

// duracion

// genero

// Método fichaTecnica().

class Pelicula {
    public string $titulo;
    public float $duracion;
    public string $genero;

    public function __construct(string $titulo, float $duracion, string $genero)
    {
        $this->titulo = $titulo;
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function fichaTecnica():string{
        return "Titulo: {$this->titulo} - Duracion: {$this->duracion} - Genero: {$this->genero}";
    }

}

$pelicula = new Pelicula('Harry Potter', 140, 'Ficción');
echo $pelicula->fichaTecnica().PHP_EOL;


// 3️⃣ Clase Estudiante

// Propiedades:

// nombre

// nota1

// nota2

// Método promedio().

class Estudiante {

    public string $nombre;
    public float $nota1;
    public float $nota2;

    public function __construct(string $nombre, float $nota1, float $nota2)
    {
        $this-> nombre = $nombre;
        $this-> nota1 = $nota1;
        $this-> nota2 = $nota2;
    }

    public function promedio(){
        return "Estudiante {$this->nombre} Promedio: " . ($this->nota1 + $this->nota2)/2;
    }

}

$estudiante = new Estudiante('Marlon',4.8,4.7);
echo $estudiante->promedio().PHP_EOL;



// 4️⃣ Clase Triangulo

// Propiedades:

// base

// altura

// Método calcularArea() que retorne valor numérico.

class Triangulo {

    public float $base;
    public float $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea():float{
        return ($this->base * $this->altura) / 2;
    }
}

$triangulo = new Triangulo(10,5);
echo "Area del triangulo: " . $triangulo->calcularArea().PHP_EOL;


// 5️⃣ Clase Inventario

// Propiedades:

// producto

// cantidad

// Método agregarStock($cantidad).


class Inventario {

    public string $producto;
    public int $cantidad;

    public function __construct(string $producto, int $cantidad )
    {
        $this->producto = $producto;
        $this->cantidad = $cantidad;   
    }


    public function agregarStock($cantidad):void{
        $this->cantidad += $cantidad; 
    }   

    public function mostrarDetalles(){
        return 'Producto: ' . $this->producto . ' Cantidad: ' . $this->cantidad;
    }


}

$producto = new Inventario('computador', 20);

echo $producto->mostrarDetalles().PHP_EOL;


// 6️⃣ Clase CarritoCompra

// Propiedades:

// producto

// precio

// cantidad

// Método total().

class CarritoCompra {

    public string $producto;
    public float $precio;
    public int $cantidad;

    public function __construct(string $producto, float $precio, int $cantidad)
    {
        $this->producto = $producto;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    public function total(): string{
        return 'PRODUCTO: ' . $this->producto . ' PRECIO: ' . $this->precio . ' CANTIDAD: '. $this->cantidad;
    }

}

$producto = new CarritoCompra('computador', 2000000,10);
echo $producto->total().PHP_EOL;

// 7️⃣ Clase Temperatura

// Propiedad:

// celsius

// Método convertirAFahrenheit().


class Temperatura {

    public float $celsius;

    public function __construct($celsius){
        $this->celsius = $celsius;
    }

    public function convertirAFahrenheit():float{
        return ($this->celsius * 1.8) + 32; 
    }
}

$temperatura = new Temperatura(20);
echo 'Su temperatura es: ' . $temperatura->convertirAFahrenheit().PHP_EOL;


// 8️⃣ Clase Banco

// Propiedades:

// cliente

// saldo

// Método retirar($monto).

class Banco {

    public string $cliente;
    public float $saldo;

    public function __construct(string $cliente, float $saldo)
    {
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }

    public function retirar($monto):float{
        return $this->saldo -= $monto;
    }

    public function depositar($monto){
        $this->saldo += $monto;
    }

    public function verSaldo():string{
        return  "Cliente: {$this->cliente} Saldo: {$this->saldo}";
    }

}

$cliente = new Banco('Marlon', 2800000);

echo $cliente -> verSaldo().PHP_EOL;

$cliente->depositar(500000);

echo $cliente -> verSaldo().PHP_EOL;

$cliente->retirar(200000);

echo $cliente -> verSaldo().PHP_EOL;



// 9️⃣ Clase Curso

// Propiedades:

// nombre

// duracion

// precio

// Método resumen().

class Curso {

    public string $nombre;
    public float $duracion;
    public float $precio;

    public function __construct(string $nombre, float $duracion, float $precio){

        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->precio = $precio;
    }   

    public function resumen(): string{
        return "Nombre: $this->nombre - Duracion: $this->duracion - Precio: $this->precio";
    }

}

$curso = new Curso('Marlon', 48, 2000000);

echo $curso -> resumen().PHP_EOL;



// 🔟 Clase Operacion

// Métodos:

// sumar

// restar

// multiplicar

// dividir

class Operacion {

    public function sumar($a, $b){
        return $a + $b;
    }

    public function restar($a, $b){
        return $a - $b;
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public function dividir($a, $b){

        if($b === 0){
            throw new Exception("No se puede dividir por cero");
        }

        return $a / $b;
    }
}

$operacion = new Operacion();

echo 'Suma: '. $operacion -> sumar(10,20).PHP_EOL;
echo 'Restar: '. $operacion -> restar(10,20).PHP_EOL;
echo 'Multiplicar: '. $operacion -> multiplicar(10,20).PHP_EOL;
echo 'Dividir: '. $operacion -> dividir(10,20).PHP_EOL;

// Esta vez deben funcionar correctamente.

// 🚨 Reglas

// Propiedades públicas

// Sin private

// Sin protected

// Sin herencia

// Sin abstract

// Código completo

// Sin explicación