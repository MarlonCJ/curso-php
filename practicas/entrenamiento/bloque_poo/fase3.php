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


// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors',1);


// class InventarioPro {
 
//     private string $producto;
//     private int $cantidad;

//     public function __construct(string $producto, int $cantidad){

        
//         $this->producto = $producto;
        
//         if($cantidad < 0){
//             throw new Exception('Valor invalido');
//         }

//         $this->cantidad = $cantidad;

//     }

//     public function agregar(int $cantidad):void{
       
//         if($cantidad <= 0){
//             throw new Exception('Valor cantidad invalido');
//         }
    
//         $this->cantidad += $cantidad;
//     }

//     public function retirar(int $cantidad):void{

//         if($cantidad <= 0 || $cantidad > $this->cantidad){
//             throw new Exception('Retiro Invalido');
//         }

//         $this->cantidad -= $cantidad;

//     }

//     public function getCantidad():int{
//         return $this->cantidad;
//     }

// }

// try{
//     $producto = new InventarioPro('computador' , 20);
//     echo $producto->getCantidad().PHP_EOL;

//     $producto->agregar(50);
//     echo $producto->getCantidad().PHP_EOL;

//     $producto->retirar(60);
//     echo $producto->getCantidad().PHP_EOL;

// }catch(Exception $e){
//     echo "Error: " . $e->getMessage();
// }


// 5️⃣ Clase Pedido

// producto (private)

// precioUnitario (private)

// cantidad (private)

// Constructor validado (precio > 0, cantidad > 0)

// total(): float

// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors',1);


// class Pedido {

//     private string $producto;
//     private float $precioUnitario;
//     private int $cantidad;

//     public function __construct(string $producto, float $precioUnitario , int $cantidad){
        
//         if($precioUnitario <= 0){
//             throw new InvalidArgumentException('Precio invalido');
//         }

//         if($cantidad <= 0){ 
//             throw new InvalidArgumentException('Cantidad invalida');
//         }

//         $this->producto = $producto;
//         $this->precioUnitario = $precioUnitario;
//         $this->cantidad = $cantidad;

//     }

//     public function total():float{
//         return $this->precioUnitario * $this->cantidad;
//     }

// }

// try{

//     $producto = new Pedido('Televisor', -1200000, 5);
//     echo $producto->total().PHP_EOL;

// }catch(Exception $e){
//     echo "Error: " . $e->getMessage();
// }


// 6️⃣ Clase UsuarioPro

// nombre (private)

// email (private)

// Constructor validado (email debe contener "@")

// cambiarEmail(string $nuevoEmail): void

// validar formato básico

// getEmail(): string

// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors',1);

// class UsuarioPro {

//     private string $nombre;
//     private string $email;


//     private function validarEmail(string $email): void{
//         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//             throw new InvalidArgumentException('Email invalido');
//         }
//     }


//     public function __construct(string $nombre, string $email)
//     {
//         $this->validarEmail($email);
//         $this->nombre = $nombre;
//         $this->email = $email;    
//     }

//     public function cambiarEmail(string $nuevoEmail):void{
        
//         $this->validarEmail($nuevoEmail);
//         $this->email = $nuevoEmail;
//     }


//     public function getEmail(): string{
//         return $this->email;
//     }

// }

// try{

//     $correo = new UsuarioPro('Marlon', 'marlon.edinsoncj@gmail.com');
//     echo $correo->getEmail().PHP_EOL;

//     $correo->cambiarEmail('edisoncj@gmail.com');
//     echo $correo->getEmail().PHP_EOL;


// }catch(Exception $e){
//     echo "Error: " . $e->getMessage();
// }


// 7️⃣ Clase CalculadoraPro

// sumar(float $a, float $b): float

// restar(float $a, float $b): float

// multiplicar(float $a, float $b): float

// dividir(float $a, float $b): float

// lanzar Exception si $b == 0

// raizCuadrada(float $numero): float

// lanzar Exception si número < 0

// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// class CalculadoraPro {

//     public function sumar(float $a, float $b):float{
//         return $a + $b;
//     }

//     public function resta(float $a, float $b):float{
//         return $a - $b;
//     }

//     public function multiplicacion(float $a, float $b):float{
//         return $a * $b;
//     }

//     public function dividir(float $a, float $b):float{
//         if($b == 0){
//             throw new InvalidArgumentException('No se puede dividor por 0');
//         }

//         return $a / $b;
//     }

//     public function raizCuadrada(float $numero):float{
        
//         if($numero < 0){
//             throw new Exception('Numero invalido: no se permite números negativos');
//         }
    
//         return sqrt($numero);
//     }

// }

// try{

//     $operacion = new CalculadoraPro();

//     echo $operacion->sumar(10,20).PHP_EOL;
//     echo $operacion->resta(10,20).PHP_EOL;
//     echo $operacion->multiplicacion(10,20).PHP_EOL;
//     echo $operacion->dividir(10,20).PHP_EOL;
//     echo $operacion->raizCuadrada(4).PHP_EOL;

// }catch(Exception $e){
//     echo "Error: " . $e->getMessage().PHP_EOL;
// }


// 8️⃣ Clase EstudiantePro

// nombre (private)

// nota1 (private)

// nota2 (private)

// Constructor que valide notas entre 0 y 5

// promedio(): float

// aprobo(): bool (≥ 3.0)

// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors',1);

// class EstudiantePro {

//     private string $nombre;
//     private float $nota1;
//     private float $nota2;

//     public function __construct(string $nombre, float $nota1, float $nota2 )
//     {
//         if($nota1 < 0 || $nota1 > 5){
//             throw new InvalidArgumentException('Valor invalido');
//         }

//         if($nota2 < 0 || $nota2 > 5){
//             throw new InvalidArgumentException('Valor invalido');
//         }

//         $this->nombre = $nombre;
//         $this->nota1 = $nota1;
//         $this->nota2 = $nota2;

//     }

//     public function promedio():float{

//         return ($this->nota1 + $this->nota2) / 2;
//     }   

//     public function aprobo():bool{

//         return $this->promedio() >= 3.0 ;

//     }
    
//     public function getNombre():string{
//         return $this->nombre;
//     }

// }

// try{

//     $estudiante = new EstudiantePro('Marlon',4.0,4.5);
//     echo "Nombre: {$estudiante->getNombre()} Promedio: {$estudiante->promedio()} Estado: {$estudiante->aprobo()}";

// }catch(Exception $e){
//     echo "Error: ". $e->getMessage().PHP_EOL;
// }

// 9️⃣ Clase RectanguloPro

// base (private)

// altura (private)

// Constructor validado (valores > 0)

// area(): float

// perimetro(): float

// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors',1);

// class Rectangulo {

//     private float $base;
//     private float $altura;

//     public function __construct(float $base, float $altura)
//     {
//         if($base <=0){
//             throw new InvalidArgumentException('base Valor invalido: no se permite numeros negativos o cero');
//         }

//          if($altura <= 0){
//             throw new InvalidArgumentException('altura Valor invalido: no se permite numeros negativos o cero');
//         }

//         $this->base = $base;
//         $this->altura = $altura;

//     }

//     public function area():float{
//         return $this->base * $this->altura;
//     }

//     public function perimetro():float{
//         return ($this->base * $this->altura) * 2;
//     }

// }

// try{

//     $rectangulo = new Rectangulo(20,10);
//     echo $rectangulo->area().PHP_EOL;
//     echo $rectangulo->perimetro().PHP_EOL;

// }catch(Exception $e){
//     echo "Error: ". $e->getMessage().PHP_EOL;
// }


// 🔟 Clase PersonaPro

// nombre (private)

// edad (private)

// Constructor validado (edad ≥ 0)

// esMayorDeEdad(): bool

// esAdultoMayor(): bool (≥ 60)

// getEdad(): int

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',1);

class PersonaPro {

    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        ($edad > 0) ? $this->edad = $edad : throw new InvalidArgumentException('Edad invalida: no puede ser 0 o negativo'); 
    }

    public function esMayorDeEdad():bool{

        return $this->edad >= 18;
    
    }

    public function esAdultoMayor():bool{
        return $this->edad >= 60;
    }

    public function getEdad():int{
        return $this->edad;
    }

}

try{

    $persona = new PersonaPro('Marlon', 32);
    echo $persona->esMayorDeEdad().PHP_EOL;
    echo $persona->esAdultoMayor().PHP_EOL;
    echo $persona->getEdad().PHP_EOL;

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

// 📌 Reglas finales:

// Todo validado

// Excepciones correctas

// Nada de estados inválidos

// Código completo

// Sin explicación

// Cuando lo envíes → evaluación como si fuera revisión de código en empresa real.

// Ahora sí estamos entrenando criterio profesional serio. 🚀