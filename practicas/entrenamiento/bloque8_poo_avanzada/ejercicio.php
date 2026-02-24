<?php

// 🧠 ENTRENAMIENTO — BLOQUE 8 (POO AVANZADA)

// ⚠️ Reglas activas:

// Exactamente 10 ejercicios

// Sin soluciones

// Sin pistas

// Dificultad progresiva

// Solo conceptos del Bloque 8

// No usar temas de bloques posteriores

// 1️⃣ Herencia básica

// Crea una clase Vehiculo con:

// Propiedad protegida $marca

// Método público obtenerMarca()

// Luego crea una clase Carro que herede de Vehiculo y que permita asignar la marca desde el constructor.

class Vehiculo {
    
    protected $marca;
    
    public function __construct($marca){
        $this -> marca = $marca;
    }

    public function obtenerMarca(){
        return $this-> marca;
    }

}


class Carro extends Vehiculo{

    private $modelo;

    public function __construct($marca, $modelo){
        parent::__construct($marca);

        $this->modelo = $modelo;
    }

    public function obtenerDetalles(){
        return "Este carro es un " . $this-> marca . " modelo " . $this->modelo;
    }
}

$miAuto = new Carro("Toyota", "Corolla");

echo "Marca: " . $miAuto->obtenerMarca() . PHP_EOL; 
echo "Detalles: " . $miAuto->obtenerDetalles() . PHP_EOL;


// 2️⃣ Encapsulación correcta

// Crea una clase CuentaBancaria con:

// Propiedad privada $saldo

// Método depositar($monto)

// Método retirar($monto)

// Método obtenerSaldo()

// No debe permitirse acceder directamente a $saldo.

class CuentaBancaria {
    
    private $saldo;

    public function __construct($saldo){
        $this -> saldo = $saldo;
    }


    public function depositar($monto){
        $this -> saldo += $monto;
    }

    public function retirar($monto){
        $this -> saldo -= $monto;
    }

    public function obtenerSaldo(){
        return "Su saldo es: " . $this -> saldo . PHP_EOL;
    }   

}

$persona = new CuentaBancaria(1000000);

echo $persona -> obtenerSaldo();

$persona -> depositar(500000);

echo $persona -> obtenerSaldo();

$persona -> retirar(300000);

echo $persona -> obtenerSaldo();


// 3️⃣ Sobreescritura de métodos

// Crea una clase Empleado con método calcularSalario() que retorne 1000.

// Luego crea una clase EmpleadoTiempoCompleto que herede de Empleado y sobrescriba el método para retornar 2000.





// 4️⃣ Uso de parent::

// Crea una clase Persona con método saludar() que imprima "Hola".

// Crea una clase Estudiante que herede de Persona y sobrescriba saludar(), pero que también ejecute el método original usando parent::.

// 5️⃣ Clase abstracta

// Crea una clase abstracta Figura con:

// Método abstracto calcularArea()

// Luego crea una clase Cuadrado que implemente ese método.

// 6️⃣ Interfaces

// Define una interfaz Pagable con método procesarPago().

// Crea una clase PagoTarjeta que implemente esa interfaz.

// 7️⃣ Polimorfismo real

// Crea:

// Una interfaz Animal

// Dos clases Perro y Gato que la implementen

// Ambas deben tener método hacerSonido().

// Luego crea un array con objetos de ambas clases y recórrelo ejecutando el método.

// 8️⃣ Namespaces

// Organiza dos clases con el mismo nombre Usuario pero en diferentes namespaces:

// App\Admin

// App\Cliente

// Instancia ambas correctamente fuera del namespace.

// 9️⃣ Autoload manual

// Implementa una función usando spl_autoload_register() que cargue automáticamente clases desde una carpeta /clases.

// Simula al menos dos clases separadas.

// 🔟 Ejercicio integrador avanzado

// Diseña el siguiente escenario:

// Clase abstracta Empleado

// Interfaz Bonificable

// Clase Desarrollador que herede de Empleado e implemente Bonificable

// Uso de namespace

// Uso de autoload

// Sobreescritura de métodos

// Uso correcto de encapsulación

// Debe ser una estructura profesional y coherente.
