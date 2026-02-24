<?php

// 🧠 EJERCICIOS — BLOQUE 7 (POO)
// 1️⃣

// Crea una clase Persona que tenga:

// Una propiedad pública $nombre

// Un método saludar() que imprima:
// "Hola, mi nombre es [nombre]"

// Crea una instancia y ejecútalo.


class Saludo{

    public $nombre;

    public function __construct($nombre){

        $this -> nombre = $nombre;
    }

    public function saludar(){
        return 'Hola, mi nombre es '. $this -> nombre; 
    }

}

$persona1 = new Saludo('Marlon');

echo $persona1 -> saludar();
echo "\n";

// 2️⃣

// Crea una clase Producto con:

// Propiedad pública $precio

// Método mostrarPrecio() que imprima el precio

// Asigna el precio después de crear la instancia.

class Producto {
    
    public $precio;

    public function __construct($precio){
        $this -> precio = $precio;
    }

    public function mostrarPrecio(){
        return $this -> precio;
    }

}


$producto = new Producto(2000000);

$televisor = $producto -> mostrarPrecio();

echo "Precio televisor = ". $televisor;
echo "\n";

// 3️⃣

// Crea una clase Calculadora con:

// Método sumar($a, $b)

// Método restar($a, $b)

// Instancia la clase y ejecuta ambos métodos.


class Calculadora {

    public function sumar($a, $b){
        return $a + $b;
    }

    public function restar($a, $b){
        return $a - $b;
    }

}


$operacion = new Calculadora();

$suma = $operacion -> sumar(20,20);
$resta = $operacion -> restar(50,20);

echo "Suma: " . $suma ."\nResta: " . $resta;
echo "\n";




// 4️⃣

// Crea una clase Usuario con:

// Propiedad privada $email

// Método público setEmail($email)

// Método público getEmail()

// Demuestra que no puedes acceder directamente a la propiedad privada.

class Usuario {

    private $email;

    public function __construct($email){
        
        $this -> email = $email;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setEmail($email){
        
        $this -> email = $email;
    }

}

$persona = new Usuario('marlon.edinsoncj@gmail.com');

echo $persona->getEmail();
echo "\n";

$persona -> setEmail('edinson.cj@gmail.com');
echo $persona->getEmail();
echo "\n";

// 5️⃣

// Crea una clase Coche que tenga:

// Propiedad pública $marca

// Constructor que reciba la marca

// Método mostrarMarca()


class Coche {
    public $marca;

    public function __construct($marca){
        $this -> marca = $marca;
    }

    public function mostrarMarca(){
        return $this -> marca;
    }
}

$producto = new Coche('toyota');

echo $producto->mostrarMarca();
echo "\n";

// 6️⃣

// Crea una clase CuentaBancaria con:

// Propiedad privada $saldo

// Constructor que reciba saldo inicial

// Método depositar($cantidad)

// Método retirar($cantidad)

// Método verSaldo()

class CuentaBancaria {
    private $saldo;

    public function __construct($saldo){
        $this -> saldo = $saldo;
    }

    public function retirar($retirar){
        $this -> saldo -= $retirar;
    
    }

    public function depositar($depositar){
        $this -> saldo += $depositar;
    }

    public function verSaldo(){
        return $this -> saldo;
    }

}

$usuario = new CuentaBancaria(10000);

echo $usuario -> verSaldo();
echo "\n";

$usuario -> depositar(20000);

echo $usuario -> verSaldo();
echo "\n";

echo $usuario -> retirar(14000);

echo $usuario -> verSaldo();
echo "\n";



// 7️⃣

// Crea una clase Empleado con:

// Propiedad pública $nombre

// Propiedad pública $salario

// Método calcularAnual() que retorne salario * 12


class Empleado {
    
    public $nombre;
    public $salario;

    public function __construct($nombre, $salario){
        $this -> nombre = $nombre;
        $this -> salario = $salario;
    }

    public function calcularAnual(){
        $nombre = $this -> nombre;
        $salario = $this -> salario;    
        
        return $nombre ." su salario anual es: " . $salario * 12;
    }
}

$empleado = new Empleado('Marlon', 2800000);

echo $empleado -> calcularAnual();
echo "\n";

// 8️⃣

// Crea una clase Rectangulo con:

// Propiedad privada $base

// Propiedad privada $altura

// Constructor para inicializar ambas

// Método calcularArea()

class Rectangulo {
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this -> base = $base;
        $this -> altura = $altura;
    }

    public function calcularArea(){
        return $this -> base * $this -> altura;
    }

}

$area = new Rectangulo(100,500);
echo "El area es: ".$area -> calcularArea();
echo "\n";

// 9️⃣

// Crea una clase Contador que:

// Tenga propiedad privada $numero

// Método incrementar()

// Método decrementar()

// Método mostrar()

class Contador{

    private $numero;

    public function __construct($numero){
        $this -> numero = $numero;
    }

    public function incrementar($incrementar){
        $this -> numero += $incrementar;
    }

    public function decrementar($decrementar){
        $this -> numero -= $decrementar;
    }

    public function mostrar(){
        return $this -> numero;
    }
}

$contar = new Contador(20);

echo $contar -> mostrar();
echo "\n";

$contar -> incrementar(40);
echo $contar -> mostrar();
echo "\n";

$contar -> decrementar(10);
echo $contar -> mostrar();
echo "\n";

// 🔟

// Crea una clase Login con:

// Propiedad privada $usuario

// Propiedad privada $password

// Constructor que reciba ambos

// Método validar() que compare con valores fijos definidos dentro del método

class Login {
    
    private $usuario;
    private $password;

    public function __construct($usuario, $password){
        $this -> usuario = $usuario;
        $this -> password = $password;
    }

    public function validar(){
        if($this-> usuario === 'admin' && $this -> password === "1234"){
            return "Bienvenido";
        }else{
            return "Usuario o Contraseña incorrectas";
        }
    }

}


$usuario = new Login('admin','1234');

echo $usuario -> validar();