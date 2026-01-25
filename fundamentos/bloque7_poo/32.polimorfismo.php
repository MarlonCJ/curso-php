<?php

/*
POLIMORFISMO + INTERFACES EN PHP (CLAVE EN WORDPRESS)

Este bloque es CRÍTICO.
WordPress usa interfaces y polimorfismo en todo su core.

1️⃣ ¿QUÉ ES POLIMORFISMO? (SIN RODEOS)

👉 Objetos distintos pueden responder al mismo método, aunque internamente hagan cosas diferentes.

Ejemplo mental:

Un Producto

Un ProductoDigital

Un ProductoFisico

Todos pueden:

$producto->getPrecio();


👉 No importa qué tipo exacto sea.

2️⃣ EJEMPLO SIMPLE DE POLIMORFISMO

*/

// class Producto {
//     public function getTipo() {
//         return 'Producto general';
//     }
// }

// class ProductoDigital extends Producto {
//     public function getTipo() {
//         return 'Producto digital';
//     }
// }

// class ProductoFisico extends Producto {
//     public function getTipo() {
//         return 'Producto físico';
//     }
// }


// uso

// $items = [
//     new Producto(),
//     new ProductoDigital(),
//     new ProductoFisico()
// ];

// foreach ($items as $item) {
//     echo $item->getTipo() . '<br>';
// }


/*
🔥 Mismo método
🔥 Diferente comportamiento
👉 Eso es polimorfismo

3️⃣ PROBLEMA SIN INTERFACES

Si no hay reglas claras:

Cada clase puede llamarse distinto

Código frágil

Difícil de mantener

👉 Aquí entran las interfaces.

4️⃣ ¿QUÉ ES UNA INTERFACE?

📌 Una interface define qué métodos DEBE tener una clase.

👉 No implementa lógica
👉 Solo define el contrato

*/

interface Vendible {

    public function getPrecio();

}

// IMPLEMENTAR LA INTERFACE


class ProductoDigital implements Vendible {

    private $precio;

    public function __construct($precio) {
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }
}

class Servicio implements Vendible {

    private $precio;

    public function __construct($precio) {
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }
}


// 📌 Clases distintas
// 📌 Mismo método obligatorio

// 7️⃣ POLIMORFISMO CON INTERFACES (NIVEL PRO)

function mostrarPrecio(Vendible $item) {
    echo $item->getPrecio();
}

mostrarPrecio(new ProductoDigital(50000));
mostrarPrecio(new Servicio(80000));

// 🔥 PHP garantiza que getPrecio() existe
// 🔥 Código seguro
// 🔥 Diseño profesional

// 👉 Esto es arquitectura limpia

// 🧠 LO QUE ACABAS DE APRENDER

// ✔ Polimorfismo real
// ✔ Interfaces
// ✔ implements
// ✔ Tipado por contrato
// ✔ Código escalable

// 👉 Esto ya es nivel avanzado de PHP.

/*
✅ RESPUESTA HONESTA A TU PREGUNTA

“¿Para qué sirve todo esto?”

Sirve para:

No romper el código cuando crece

Permitir que otros programadores extiendan tu sistema

Construir plugins profesionales

Escribir código que escala

❌ No sirve para scripts pequeños
❌ No sirve para ejercicios simples
✔ Sirve para sistemas reales

*/