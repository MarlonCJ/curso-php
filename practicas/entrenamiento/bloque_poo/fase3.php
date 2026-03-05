<?php

// declare(strict_types=1);

// 🚀 FASE 3 — POO ROBUSTA (Validaciones + Excepciones + Lógica Profesional)

// Aquí ya no basta con que “funcione”.
// Ahora debe ser seguro, coherente y consistente.

// 🚨 Nuevas reglas activas

// ✅ Encapsulación obligatoria

// ✅ Tipado estricto en todo

// ✅ Validaciones reales

// ✅ Uso correcto de excepciones

// ✅ No permitir estados inválidos

// ✅ Métodos coherentes con su nombre

// ❌ No herencia todavía

// ❌ No interfaces todavía

// ❌ Sin explicación

// Nivel: Junior avanzado / pre–semi senior

// 🧠 RONDA FASE 3
// 1️⃣ Clase CuentaBancariaPro

// titular (private)

// saldo (private)

// Constructor que no permita saldo negativo

// depositar(float $monto): void (no permitir monto ≤ 0)

// retirar(float $monto): void (no permitir monto ≤ 0 ni dejar saldo negativo)

// getSaldo(): float

// Debe lanzar Exception cuando corresponda.


// class CuentaBancariaPRO {
//     private string $titular;
//     private float $saldo;

//     public function __construct(string $titular, float $saldo)
//     {
//         $this->titular = $titular;
//         ($saldo < 0) ? throw new Exception('No se permite saldo negativo') : $this->saldo = $saldo;
//     }

//     public function depositar(float $monto):void{

//         ($monto <= 0) ? throw new Exception('Transacción rechazada, corrige el valor') : $this->saldo += $monto;

//     }

//     public function retirar(float $monto):void{
        
//         if($monto <= 0){
//             throw new Exception('Transacción rechazada: corrige valor');
//         }elseif($this->saldo < $monto){
//             throw new Exception('Transacción rechazada: fondos insuficientes');
//         }else{
//             $this->saldo -= $monto;
//         }
//     }

//     public function getSaldo():float{
//         return $this->saldo;
//     }

// }

// $persona = new CuentaBancariaPRO('Marlon', 1000000);

// echo $persona->getSaldo().PHP_EOL;

// $persona->depositar(200000);

// echo $persona->getSaldo().PHP_EOL;

// $persona->retirar(2000);

// echo $persona->getSaldo().PHP_EOL;

// 2️⃣ Clase ProductoPro

// nombre (private)

// precio (private)

// Constructor que no permita precio ≤ 0

// aplicarDescuento(float $porcentaje): void

// porcentaje > 0

// porcentaje ≤ 100

// getPrecio(): float

// declare(strict_types=1);

// class ProductoPro {

//     private string $nombre;
//     private float $precio;
//     private bool $descuentoAplicado = false;

//     public function __construct(string $nombre, float $precio)
//     {
//         if ($precio <= 0) {
//             throw new Exception('El precio debe ser mayor que cero.');
//         }

//         $this->precio = $precio;
//     }

//     public function aplicarDescuento(float $porcentaje):void{
        
//         if ($this->descuentoAplicado) {
//             throw new Exception('El descuento ya fue aplicado.');
//         }

//         if ($porcentaje <= 0 || $porcentaje > 100) {
//             throw new Exception('Porcentaje inválido.');
//         }

//         $this->precio -= ($this->precio * $porcentaje) / 100;
//         $this->descuentoAplicado = true;

//     }   

//     public function getPrecio(): float{
//         return $this->precio;
//     }

// }


// try{
//     $producto = new ProductoPro('Televisor', 4500000);
//     echo $producto->getPrecio().PHP_EOL;

//     $producto->aplicarDescuento(20);
//     echo $producto->getPrecio().PHP_EOL;

//      $producto->aplicarDescuento(20);
//     echo $producto->getPrecio().PHP_EOL;

// }catch(Exception $e){
//     echo "Error: ". $e->getMessage();
// }



// 3️⃣ Clase EmpleadoPro

// nombre (private)

// salario (private)

// Constructor que no permita salario ≤ 0

// aumentarPorcentaje(float $porcentaje): void

// porcentaje > 0

// getSalario(): float

// Debe aumentar por porcentaje real, no monto fijo.

// declare(strict_types=1);

// class Empleado {

//     private string $nombre;
//     private float $salario;

//     public function __construct(string $nombre, float $salario)
//     {
//         $this->nombre = $nombre;

//         if($salario <= 0){
//             throw new Exception('El salario debe ser Mayor a 0');
//         }

//         $this->salario = $salario;

//     }

//     public function aumentarPorcentaje(float $porcentaje): void{
        
//         if($porcentaje > 0){
//             $this->salario += ($this->salario * $porcentaje) / 100;
//         }else{
//             throw new Exception('Porcentaje invalido');
//         }
//     }

//     public function getSalario():float{
//         return $this->salario;
//     }

// }

// try{

//     $empleado = new Empleado('Marlon', 3400000);
//     echo $empleado->getSalario().PHP_EOL;

//     $empleado->aumentarPorcentaje(20);
//     echo $empleado->getSalario().PHP_EOL;


// }catch(Exception $e){
//     echo "Error: " . $e->getMessage();
// }


// 4️⃣ Clase InventarioPro

// producto (private)

// cantidad (private)

// Constructor que no permita cantidad < 0

// agregar(int $cantidad): void (solo positivo)

// retirar(int $cantidad): void

// solo positivo

// no permitir cantidad final negativa

// getCantidad(): int



declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors',1);

class InventarioPro {
 
    private string $producto;
    private int $cantidad;

    public function __construct(string $producto, int $cantidad){

        
        $this->producto = $producto;
        
        if($cantidad < 0){
            throw new Exception('Valor invalido');
        }

        $this-> cantidad = $cantidad;

    }

    public function agregar(int $cantidad):void{
       
        if($cantidad <= 0){
            throw new Exception('Valor cantidad invalido');
        }
    
        $this->cantidad += $cantidad;
    }

    public function retirar(int $cantidad):void{

        if($cantidad <= 0 || $cantidad > $this->cantidad){
            throw new Exception('Retiro Invalido');
        }

        $this->cantidad -= $cantidad;

    }

    public function getCantidad():int{
        return $this->cantidad;
    }

}

try{
    $producto = new InventarioPro('computador' , 20);
    echo $producto->getCantidad().PHP_EOL;

    $producto->agregar(50);
    echo $producto->getCantidad().PHP_EOL;

    $producto->retirar(60);
    echo $producto->getCantidad().PHP_EOL;

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}







// 5️⃣ Clase Pedido

// producto (private)

// precioUnitario (private)

// cantidad (private)

// Constructor validado (precio > 0, cantidad > 0)

// total(): float

// 6️⃣ Clase UsuarioPro

// nombre (private)

// email (private)

// Constructor validado (email debe contener "@")

// cambiarEmail(string $nuevoEmail): void

// validar formato básico

// getEmail(): string

// 7️⃣ Clase CalculadoraPro

// sumar(float $a, float $b): float

// restar(float $a, float $b): float

// multiplicar(float $a, float $b): float

// dividir(float $a, float $b): float

// lanzar Exception si $b == 0

// raizCuadrada(float $numero): float

// lanzar Exception si número < 0

// 8️⃣ Clase EstudiantePro

// nombre (private)

// nota1 (private)

// nota2 (private)

// Constructor que valide notas entre 0 y 5

// promedio(): float

// aprobo(): bool (≥ 3.0)

// 9️⃣ Clase RectanguloPro

// base (private)

// altura (private)

// Constructor validado (valores > 0)

// area(): float

// perimetro(): float

// 🔟 Clase PersonaPro

// nombre (private)

// edad (private)

// Constructor validado (edad ≥ 0)

// esMayorDeEdad(): bool

// esAdultoMayor(): bool (≥ 60)

// getEdad(): int

// 📌 Reglas finales:

// Todo validado

// Excepciones correctas

// Nada de estados inválidos

// Código completo

// Sin explicación

// Cuando lo envíes → evaluación como si fuera revisión de código en empresa real.

// Ahora sí estamos entrenando criterio profesional serio. 🚀