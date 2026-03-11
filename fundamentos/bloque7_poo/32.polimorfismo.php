<?php

// POLIMORFISMO

// 📚 CLASE — POLIMORFISMO EN POO

// Primero veremos:

// 1️⃣ Qué es polimorfismo
// 2️⃣ Cómo funciona internamente
// 3️⃣ Ejemplo simple
// 4️⃣ Ejemplo realista
// 5️⃣ Ejemplo profesional (como en frameworks)
// 6️⃣ Buenas prácticas

// 1️⃣ Qué significa Polimorfismo

// La palabra polimorfismo significa:

// poly = muchos
// morph = formas

// En programación significa:

// Un mismo método puede comportarse de forma diferente dependiendo del objeto.

// 2️⃣ Idea simple

// Imagina que todos los objetos tienen un método:

// hacerSonido()

// Pero cada animal responde diferente.

// Animal
//  └ hacerSonido()

//         ↑
//    ┌─────────┐
// Perro      Gato
//  └ladra     └maulla

// El sistema solo ejecuta:

// $animal->hacerSonido();

// Pero el resultado cambia según el objeto.

// 3️⃣ Ejemplo básico

// Código completo:


// class Animal
// {
//     public function hacerSonido(): string
//     {
//         return "El animal hace un sonido";
//     }
// }

// class Perro extends Animal
// {
//     public function hacerSonido(): string
//     {
//         return "El perro ladra";
//     }
// }

// class Gato extends Animal
// {
//     public function hacerSonido(): string
//     {
//         return "El gato maulla";
//     }
// }

// $animales = [
//     new Perro(),
//     new Gato()
// ];

// foreach ($animales as $animal) {
//     echo $animal->hacerSonido() . PHP_EOL;
// }


// Resultado
// El perro ladra
// El gato maulla
// 4️⃣ Qué ocurre internamente

// Cuando el código ejecuta:

// $animal->hacerSonido();

// PHP revisa el tipo real del objeto.

// Objeto actual → Perro

// Entonces ejecuta:

// Perro::hacerSonido()

// Luego:

// Objeto actual → Gato

// Ejecuta:

// Gato::hacerSonido()
// 5️⃣ Ejemplo más realista

// Sistema de empleados.

// class Empleado
// {
//     public function calcularPago(): int
//     {
//         return 0;
//     }
// }

// class EmpleadoTiempoCompleto extends Empleado
// {
//     public function calcularPago(): int
//     {
//         return 2000;
//     }
// }

// class EmpleadoFreelance extends Empleado
// {
//     public function calcularPago(): int
//     {
//         return 1000;
//     }
// }

// $empleados = [
//     new EmpleadoTiempoCompleto(),
//     new EmpleadoFreelance()
// ];

// foreach ($empleados as $empleado) {
//     echo $empleado->calcularPago() . PHP_EOL;
// }

// Resultado
// 2000
// 1000

// El sistema solo llama:

// $empleado->calcularPago();

// Pero cada objeto responde diferente.

// 6️⃣ Esto es exactamente lo que hacen los frameworks

// Ejemplo conceptual de un sistema de pagos:

// Pago
//  └ procesar()

//         ↑
//    ┌───────────────┐
// Paypal         Stripe
//  └procesar()     └procesar()

// El sistema solo hace:

// $pago->procesar();

// Cada gateway implementa su lógica.

// 7️⃣ Ventaja del Polimorfismo

// Permite escribir código más flexible y escalable.

// Sin polimorfismo:

// if($tipo == "paypal") { ... }

// if($tipo == "stripe") { ... }

// if($tipo == "mercadopago") { ... }

// Con polimorfismo:

// $pago->procesar();

// El objeto decide qué hacer.

// 8️⃣ Regla mental importante
// Mismo método
// Objetos diferentes
// Comportamientos diferentes

// Eso es polimorfismo.

// 9️⃣ Polimorfismo + Herencia

// Normalmente el polimorfismo aparece junto con:

// Herencia

// Method Overriding

// Ejemplo:

// Vehiculo
//  └ mover()

//         ↑
//    ┌─────────┐
// Carro      Avion
//  └mover()   └mover()

// 🧠 Ejercicio para entrenar

// Crea este sistema:

// Clase padre
// Figura

// Método:

// calcularArea()

// Debe devolver:

// 0
// Clase hija 1
// Rectangulo

// Propiedades:

// ancho
// alto

// Sobrescribir:

// calcularArea()
// Clase hija 2
// Circulo

// Propiedad:

// radio

// Sobrescribir:

// calcularArea()
// Uso esperado
// $figuras = [
//     new Rectangulo(10,5),
//     new Circulo(7)
// ];

// foreach($figuras as $figura){
//     echo $figura->calcularArea() . PHP_EOL;
// }



class Figura {

    public function calcularArea():float{
        return 0;
    }

}


class Rectangulo extends Figura{

    private float $ancho;
    private float $alto;

    public function __construct(float $ancho, float $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea():float{

        return $this->ancho * $this->alto;
    }

}

class Circulo extends Figura{

    private float $radio;

    public function __construct(float $radio){
        $this->radio = $radio;
    }

    public function calcularArea():float{
        return pi() * ($this->radio ** 2); 
    }

}

$figuras =[
    new Rectangulo(200,100),
    new Circulo(60)
];

foreach($figuras as $figura){
    echo $figura->calcularArea().PHP_EOL;
}