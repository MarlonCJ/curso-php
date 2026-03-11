<?php

// 🔥 Method Overriding (Sobrescritura de métodos)

// Este concepto es la base del polimorfismo, y es usado en:

// Laravel

// Symfony

// WordPress

// APIs

// frameworks de backend

// 1. Qué es Method Overriding

// Significa que una clase hija redefine un método que ya existe en la clase padre.

// Ejemplo conceptual:

// Clase Padre
//    mostrarInfo()

// Clase Hija
//    mostrarInfo()   ← versión diferente

// El método tiene el mismo nombre, pero el comportamiento cambia.

// Ejemplo simple completo

// Primero el código completo.

// <?php

// declare(strict_types=1);
// error_reporting(E_ALL);
// ini_set('display_errors',1);

// class Empleado
// {
//     protected string $nombre;
//     protected float $salario;

//     public function __construct(string $nombre, float $salario)
//     {
//         $this->nombre = $nombre;
//         $this->salario = $salario;
//     }

//     public function mostrarInfo(): string
//     {
//         return "Empleado: {$this->nombre} | Salario: {$this->salario}";
//     }
// }

// class EmpleadoGerente extends Empleado
// {
//     public function mostrarInfo(): string
//     {
//         return "Gerente: {$this->nombre} | Salario: {$this->salario}";
//     }
// }

// $empleado = new Empleado("Juan", 2000);
// $gerente = new EmpleadoGerente("Carlos", 5000);

// echo $empleado->mostrarInfo() . PHP_EOL;
// echo $gerente->mostrarInfo() . PHP_EOL;
// 2. Qué está pasando aquí

// Clase padre:

// public function mostrarInfo()

// Clase hija sobrescribe el mismo método:

// public function mostrarInfo()

// El nombre del método es idéntico, pero el comportamiento cambia.

// Resultado
// Empleado: Juan | Salario: 2000
// Gerente: Carlos | Salario: 5000

// PHP decide qué método ejecutar dependiendo del objeto.

// Eso es polimorfismo básico.

// 3. Regla importante del Overriding

// La firma del método debe ser compatible.

// Ejemplo correcto:

// public function mostrarInfo(): string

// Si cambias el tipo de retorno incorrectamente, PHP generará error.

// 4. Error común de principiantes

// Muchos hacen esto:

// class EmpleadoGerente extends Empleado
// {
//     public function mostrarInfoGerente()

// Eso NO es overriding.

// Eso solo es otro método.

// Para sobrescribir debe ser:

// public function mostrarInfo()
// 5. Visualización del sistema
// Empleado
//  └ mostrarInfo()

//        ↑

// EmpleadoGerente
//  └ mostrarInfo() (sobrescrito)
// 🧠 Ejercicio de entrenamiento

// Crea este sistema:

// Clase padre
// Animal

// Propiedad:

// nombre

// Método:

// hacerSonido()

// Debe devolver:

// El animal hace un sonido
// Clase hija 1
// Perro

// Sobrescribir método:

// El perro ladra
// Clase hija 2
// Gato

// Sobrescribir método:

// El gato maulla
// Uso esperado
// $perro = new Perro("Firulais");
// $gato = new Gato("Michi");

// echo $perro->hacerSonido();
// echo $gato->hacerSonido();
// Lo que voy a evaluar

// correcta herencia

// correcto overriding

// uso de protected

// diseño limpio

// sin duplicar lógica innecesaria


class Animal {
    
    protected string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function hacerSonido():string{
        return 'El animal hace un sonido';
    }

}

class Perro extends Animal{

    public function hacerSonido():string{
        return "El perro ladra";
    }

}

class Gato extends Animal{

    public function hacerSonido():string{
        return "El Gato maulla";
    }

}

$perro = new Perro("Firualis");
$gato = new Gato("Michi");

echo $perro->hacerSonido().PHP_EOL;
echo $gato->hacerSonido().PHP_EOL;