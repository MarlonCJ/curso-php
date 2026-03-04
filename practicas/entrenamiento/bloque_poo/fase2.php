<?php

declare(strict_types=1);

// 🔥 FASE 2 — POO PROFESIONAL (Encapsulación real)

// Ahora cambian las reglas.

// 🚨 Reglas activas

// ❌ Nada de propiedades públicas

// ✅ Todas las propiedades privadas

// ✅ Métodos tipados (parámetros y retorno)

// ✅ Uso obligatorio de void cuando aplique

// ✅ Validaciones básicas cuando tenga sentido

// ❌ No herencia todavía

// ❌ No interfaces todavía

// ✅ Código completo

// ❌ Sin explicación

// Nivel: Profesional junior sólido.

// 🧠 NUEVA RONDA — FASE 2
// 1️⃣ Clase Usuario

// nombre (private)

// email (private)

// Constructor tipado

// getNombre(): string

// getEmail(): string

// cambiarEmail(string $nuevoEmail): void

class Usuario {
    private string $nombre;
    private string $email;

    public function __construct(string $nombre, string $email){

        $this->nombre = $nombre;
        $this->email = $email;
    }


    public function getNombre():string{
        return  $this->nombre;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function cambiarEmail(string $nuevoEmail):void{
        $this->email = $nuevoEmail;
    }
}


$usuario = new Usuario('Marlon','marlon.edinsoncj@gmail.com');

echo $usuario->getNombre().PHP_EOL;

echo $usuario->getEmail().PHP_EOL;

$usuario -> cambiarEmail('edinsoncj@gmail.com');

echo $usuario->getEmail().PHP_EOL;


// 2️⃣ Clase CuentaBancaria

// titular (private)

// saldo (private)

// Constructor tipado

// depositar(float $monto): void

// retirar(float $monto): void (no permitir saldo negativo)

// getSaldo(): float

class CuentaBancaria {

    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $monto):void{
        $this->saldo += $monto;
    }

    public function retirar(float $monto):void{
        if($monto < 0){
            throw new Exception('No se permite valores negativos');
        }

        $this->saldo -= $monto;
    }

    public function getSaldo():float{
        return $this->saldo;
    }

}

$persona = new CuentaBancaria('marlon', 2800000);

echo $persona->getSaldo().PHP_EOL;
$persona->depositar(1000000);

echo $persona->getSaldo().PHP_EOL;

$persona->retirar(500000);
echo $persona->getSaldo().PHP_EOL;


// 3️⃣ Clase Producto

// nombre (private)

// precio (private)

// Constructor tipado

// aplicarDescuento(float $porcentaje): void

// getPrecio(): float

class Producto {

    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function aplicarDescuento(float $porcentaje):void{
        $this-> precio -= ($this->precio * $porcentaje) / 100;
    }

    public function getPrecio():float{
        return $this->precio;
    }
}

$producto = new Producto('Marlon', 500000);
echo $producto->getPrecio().PHP_EOL;

$producto->aplicarDescuento(30);
echo $producto->getPrecio().PHP_EOL;


// 4️⃣ Clase Empleado

// nombre (private)

// salario (private)

// aumentarSalario(float $porcentaje): void

// getSalario(): float

class Empleado {

    private string $nombre;
    private float $salario;

    public function __construct(string $nombre, float $salario){
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function aumentarSalario(float $porcentaje) : void{
        $this->salario += $porcentaje;
    }

    public function getSalario():float{
        return $this->salario ;
    }


}

$persona = new Empleado('Marlon', 70000000);

echo $persona -> getSalario().PHP_EOL;
$persona -> aumentarSalario(200000).PHP_EOL;
echo $persona -> getSalario().PHP_EOL;


// 5️⃣ Clase Rectangulo

// base (private)

// altura (private)

// area(): float

// perimetro(): float

class Rectangulo {

    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area():float{
        return $this->base * $this->altura;
    }

    public function perimetro():float{
        return ($this->base * 2) + ($this->altura * 2); 
    }

}


$rectangulo = new Rectangulo(60,30);

echo $rectangulo->area().PHP_EOL;
echo $rectangulo->perimetro().PHP_EOL;


// 6️⃣ Clase Inventario

// producto (private)

// cantidad (private)

// agregar(int $cantidad): void

// retirar(int $cantidad): void (no permitir negativo)

// getCantidad(): int


class Inventario {

    private string $producto;
    private int $cantidad;

    public function __construct(string $producto, int $cantidad)
    {
        $this->producto = $producto;
        $this->cantidad = $cantidad;
    }

    public function agregar(int $cantidad): void{
        $this->cantidad += $cantidad;
    }

    public function retirar(int $cantidad): void{
        $this->cantidad -= $cantidad;
    }

    public function getCantidad(): int{
        return $this->cantidad;
    }

}


$inventario = new Inventario('TV', 200);

echo $inventario->getCantidad().PHP_EOL;

$inventario->agregar(20);
echo $inventario->getCantidad().PHP_EOL;

$inventario->retirar(5);
echo $inventario->getCantidad().PHP_EOL;



// 7️⃣ Clase Estudiante

// nombre (private)

// nota1 (private)

// nota2 (private)

// promedio(): float

// aprobo(): bool


class Estudiante {

    private string $nombre;
    private float $nota1;
    private float $nota2;

    public function __construct(string $nombre, float $nota1, float $nota2)
    {
        $this->nombre = $nombre;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function promedio(): float{
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function aprobo(): bool{
        if(($this->nota1 + $this->nota2) / 2 < 3){
            return false;
        }else{
            return true;
        }

    }

}

$estudiante = new Estudiante('Marlon', 3.5, 5);

echo $estudiante->promedio().PHP_EOL;
echo $estudiante->aprobo().PHP_EOL;



// 8️⃣ Clase Calculadora

// Todos los métodos tipados:

// sumar(float $a, float $b): float

// restar(float $a, float $b): float

// multiplicar(float $a, float $b): float

// dividir(float $a, float $b): float (no permitir dividir por cero)


class Calculadora {

    public function sumar(float $a, float $b):float{
        return $a + $b;
    }   

    public function restar(float $a , float $b): float{
        return $a - $b;
    }

    public function multiplicar(float $a, float $b):float{
        return $a * $b;
    }

    public function dividir(float $a, float $b):float{
        if($b === 0){
            throw new Exception('No se permite dividir por cero');
        }

        return $a / $b;
    }

}

$operacion = new Calculadora();

echo $operacion->sumar(10,20).PHP_EOL;
echo $operacion->restar(10,20).PHP_EOL;
echo $operacion->multiplicar(10,20).PHP_EOL;
echo $operacion->dividir(10,20).PHP_EOL;


// 9️⃣ Clase Temperatura

// celsius (private)

// aFahrenheit(): float

// aKelvin(): float

class Temperatura {

    private float $celsius;

    public function __construct(float $celsius)
    {
        $this-> celsius = $celsius;
    }

    public function aFahrenheit():float{
        return ($this->celsius * 1.8) + 32;
    }

    public function aKelvin():float{
        return $this->celsius + 273.15;
    }
}


$temperatura = new Temperatura(20);

echo $temperatura->aFahrenheit().PHP_EOL;

echo $temperatura->aKelvin().PHP_EOL;


// 🔟 Clase Persona

// nombre (private)

// edad (private)

// esMayorDeEdad(): bool

// getEdad(): int


class Persona {

    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function esMayorDeEdad():bool{
        if($this->edad >= 18){
            return true;
        }else{
            return false;
        }
    }

    public function getEdad():int{
        return $this->edad;
    }

}

$persona = new Persona('Marlon', 32);

echo $persona->getEdad().PHP_EOL;
echo $persona->esMayorDeEdad().PHP_EOL;



// 📌 Reglas finales:

// Todo tipado

// Nada público en propiedades

// Validaciones donde tenga sentido

// Código limpio

// Sin explicación

// Cuando lo envíes → evaluación estricta.

// Ahora sí estás entrando al nivel que te diferencia del promedio. 🚀