<?php

// 📚 CLASE — INTERFACES EN PHP

// Vamos a cubrir:

// 1️⃣ Qué es una interfaz
// 2️⃣ Para qué sirven
// 3️⃣ Cómo se crean
// 4️⃣ Cómo se implementan
// 5️⃣ Diferencia entre herencia e interfaces
// 6️⃣ Ejemplo realista
// 7️⃣ Buenas prácticas

// 1️⃣ Qué es una Interface

// Una interface es un contrato.

// Define qué métodos debe tener una clase, pero no cómo se implementan.

// Ejemplo conceptual:

// Interface: Pago

// Debe tener:
// procesarPago()

// Las clases que implementen la interfaz están obligadas a crear ese método.

// 2️⃣ Ejemplo simple

// Primero veremos el código completo.

interface Animal
{
    public function hacerSonido(): string;
}

class Perro implements Animal
{
    public function hacerSonido(): string
    {
        return "El perro ladra";
    }
}

class Gato implements Animal
{
    public function hacerSonido(): string
    {
        return "El gato maulla";
    }
}

$animales = [
    new Perro(),
    new Gato()
];

foreach ($animales as $animal) {
    echo $animal->hacerSonido() . PHP_EOL;
}

// Resultado
// El perro ladra
// El gato maulla
// 3️⃣ Qué significa implements

// Aquí ocurre la implementación:

// class Perro implements Animal

// Esto significa:

// La clase Perro se compromete a implementar todos los métodos de la interfaz Animal.

// Si no lo hace, PHP lanza un error fatal.

// 4️⃣ Diferencia entre Interface y Herencia
// Concepto	Herencia	Interface
// Palabra clave	extends	implements
// Se hereda código	✔	❌
// Define contrato	❌	✔
// Permite reutilizar lógica	✔	❌
// Ejemplo visual

// Herencia:

// Animal
//    ↑
// Perro
// Gato

// Interface:

// AnimalInterface
//  └ hacerSonido()

//    ↑        ↑
//  Perro     Gato

// La interfaz solo obliga a implementar métodos.

// 5️⃣ Regla importante de las interfaces

// Los métodos en interfaces:

// no tienen cuerpo

// solo se declara la firma

// Ejemplo:

// interface Pago
// {
//     public function procesar(): bool;
// }

// No puedes escribir:

// {
//     return true;
// }

// Eso se hace en las clases.

// 6️⃣ Ejemplo realista (sistema de pagos)
// <?php

interface PagoInterface
{
    public function procesarPago(float $monto): string;
}

class Paypal implements PagoInterface
{
    public function procesarPago(float $monto): string
    {
        return "Pago de {$monto} procesado con Paypal";
    }
}

class Stripe implements PagoInterface
{
    public function procesarPago(float $monto): string
    {
        return "Pago de {$monto} procesado con Stripe";
    }
}

$pagos = [
    new Paypal(),
    new Stripe()
];

foreach ($pagos as $pago) {
    echo $pago->procesarPago(100) . PHP_EOL;
}
// Resultado
// Pago de 100 procesado con Paypal
// Pago de 100 procesado con Stripe
// 7️⃣ Ventaja de las Interfaces

// Permiten diseñar sistemas extensibles.

// Sin interfaces:

// if($tipo == "paypal") { ... }
// if($tipo == "stripe") { ... }
// if($tipo == "mercadopago") { ... }

// Con interfaces:

// $pago->procesarPago();

// El sistema no necesita saber qué tipo de pago es.

// 8️⃣ Algo muy poderoso de las interfaces

// Una clase puede implementar varias interfaces.

// Ejemplo:

// class Usuario implements Autenticable, Notificable

// Esto no se puede hacer con herencia (solo se puede extender una clase).

// 9️⃣ Cuándo usar interfaces

// Se usan cuando quieres definir un comportamiento obligatorio.

// Ejemplos comunes:

// LoggerInterface
// CacheInterface
// PaymentInterface
// RepositoryInterface

// 🧠 Ejercicio para entrenar

// Crea esta estructura.

// Interface
// Vehiculo

// Método obligatorio:

// mover(): string
// Clase 1
// Carro

// Implementa:

// El carro está conduciendo
// Clase 2
// Avion

// Implementa:

// El avión está volando
// Uso esperado
// $vehiculos = [
//     new Carro(),
//     new Avion()
// ];

// foreach($vehiculos as $v){
//     echo $v->mover();
// }

interface Vehiculo {

    public function mover():string;

}

class Carro implements Vehiculo{
    public function mover():string{
        return "El carro está conduciendo";
    }
}

class Avion implements Vehiculo{
    public function mover():string{
        return "El avion esta volando";
    }
}

$vehiculos = [
    new Carro(),
    new Avion(),
];

foreach($vehiculos as $vehiculo){
    echo $vehiculo->mover().PHP_EOL;
}


interface Universidad {

    public function precioSemestre(): float;
}

class IngenieriaSistemas implements Universidad {

    private float $semestre = 1600000;

    public function precioSemestre():float{
        return $this->semestre;
    }
}

class Contabilidad implements Universidad{

    private float $semestre = 1200000;

    public function precioSemestre(): float
    {
        return $this->semestre;
    }

}

$carreras = [
    new IngenieriaSistemas(),
    new Contabilidad(),
];

foreach($carreras as $carrera){
    echo $carrera->precioSemestre().PHP_EOL;
}






