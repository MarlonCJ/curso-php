<?php

// HERENCIA

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_erros',1);

class TextValidateException extends Exception{};
class EmailValidateException extends Exception{};
class NumeroValidateException extends Exception{};

class Validar {

    public static function validarNombre(string $texto):string{
        if(trim($texto) === ""){
            throw new TextValidateException('texto vacio');
        }  
        return $texto;
    }

    public static function validarEmail(string $email):string{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new EmailInvalidoException("Email invalido");
        }
        return $email;
    }

    public static function validarNumero(float $numero):float{
        if($numero <= 0){
            throw new NumeroValidateException('No puede ser negativo o cero');
        }

        return $numero;
    }

}


class Empleado {
    protected string $nombre;
    protected float $salario;

    public function __construct(string $nombre, float $salario)
    {
        $this->nombre = Validar::validarNombre($nombre);
        $this->salario = Validar::validarNumero($salario);
    }

    public function mostrarInfo():string{
        return "Empleado: {$this->nombre} | Salario: {$this->salario}";
    }
}

class EmpleadoGerente extends Empleado{

    public function aprobarVacaciones():string{
        return "El gerente aprobo vacaciones";
    }
}


try{
    $empleado = new EmpleadoGerente('Marlon', 2800000);
    echo $empleado->mostrarInfo().PHP_EOL;
    echo $empleado->aprobarVacaciones().PHP_EOL;
}catch(TextValidateException $e){
    echo "Error texto: ".$e->getMessage().PHP_EOL;
}catch(NumeroValidateException $e){
    echo "Error Número: " . $e->getMessage().PHP_EOL;    
}catch(Exception $e){
    echo "Error general: ". $e->getMessage().PHP_EOL;
}

// ----------------------


class Producto {
    
    protected string $nombre;
    protected float $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = Validar::validarNombre($nombre);
        $this->precio = Validar::validarNumero($precio);
    }

    public function mostrarProducto():string{
        return "Producto: {$this->nombre} | Precio: {$this->precio}";
    }

}

class ProductoDigital extends Producto {
    
    public function descargar():string{
        return "Descargando producto digital";
    }
}

try{
    $productos = [
        new ProductoDigital('Computador', 2400000),
        new ProductoDigital('teclado', 120000),
        new ProductoDigital('Mouse',72000)
    ];

    foreach($productos as $producto){
        echo $producto->mostrarProducto() . " " . $producto->descargar().PHP_EOL;
    }

}catch(TextValidateException $e){
    echo "Error producto: ".$e->getMessage().PHP_EOL;
}catch(NumeroValidateException $e){
    echo "Error precio: ". $e->getMessage().PHP_EOL;
}

// ----------------------------------

// EJERCICIO 3 — Herencia + método protegido

class CuentaBancaria {
    
    protected string $titular;
    protected float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        $this->titular = Validar::validarNombre($titular);
        $this->saldo = Validar::validarNumero($saldo);
    }

    public function mostrarSaldo():string{
        return "Saldo actual: {$this->saldo}";
    }

    protected function validarMonto(float $monto):float{
        if($monto <= 0){
            throw new InvalidArgumentException('Valor invalido');
        }
        return $monto;
    }

}

class CuentaAhorro extends CuentaBancaria{
 
    public function depositarMonto(float $monto){
        $this->saldo += $this->validarMonto($monto);
    }   
}

try{
    $usuario = new CuentaAhorro('Marlon', 2800000);
    echo $usuario->mostrarSaldo().PHP_EOL;
    $usuario->depositarMonto(-200000);
    echo $usuario->mostrarSaldo().PHP_EOL;
}catch(Exception $e){
    echo "Error: ". $e->getMessage().PHP_EOL;
}

// -----------------

// EJERCICIO 4 — Herencia realista

class Vehiculo {

    protected string $marca;

    public function __construct(string $marca)
    {
        $this->marca = $marca;
    }
    
    public function encender():string{
        return 'Este vehiculo esta encendido';
    }

}

class Moto extends Vehiculo{
    
    public function hacerCaballito():string{
        return "La moto hizo un caballito";
    }
}

$vehiculo = new Moto('susuki');

echo $vehiculo->encender().PHP_EOL;
echo $vehiculo->hacerCaballito().PHP_EOL;





