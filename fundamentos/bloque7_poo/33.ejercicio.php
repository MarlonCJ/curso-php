
<?php

/*
📌 PROBLEMA REAL (MUY COMÚN)

Tienes un sistema que muestra mensajes a diferentes tipos de usuarios:

Usuario normal

Usuario administrador

👉 Ambos saludan, pero de forma distinta.

🧱 PASO 1 — CLASE BASE (LA IDEA COMÚN)

*/

class Usuario {

    protected $nombre;

    public function __construct($nombre){
        $this -> nombre = $nombre;
    }

    public function saludar() {
        return 'Hola usuario';
    }

}

/*
¿Qué significa esto?

    Todos los usuarios tienen nombre
    Todos pueden saludar
    Esta es la base común
*/

// 🧱 PASO 2 — CLASE HIJA (COMPORTAMIENTO DIFERENTE)

class Admin extends Usuario {

    public function saludar() {
        return 'Hola Admnistrador';
    }

}

/*
Aquí pasa algo CLAVE:

Admin hereda de Usuario

Reescribe (override) el método saludar

👉 Mismo método
👉 Resultado distinto

🧪 PASO 3 — USO (AQUÍ ESTÁ EL POLIMORFISMO

*/

$usuarios = [
    new Usuario('Marlon'),
    new Admin('Marlon')
];

foreach ($usuarios as $usuario) {
    echo $usuario -> saludar() . '<br>';
}

/*
🔥 DETENTE AQUÍ — ESTE ES EL MOMENTO CLAVE

👉 Mira este código:

$usuario->saludar();


📌 Pregunta importante:

¿PHP sabe si es Usuario o Admin?

❌ NO
👉 Y NO LE IMPORTA

PHP solo dice:

“Este objeto tiene un método saludar()”

Y ejecuta el correcto según el objeto real.

🎯 ESO ES POLIMORFISMO (SIN PALABRAS RARAS)

Misma llamada
Distinto comportamiento
Según el tipo de objeto

Nada más.
No más misterio.

🧠 PIÉNSALO ASÍ

Un botón:

Click en celular

Click en computador

👉 Misma acción (click)
👉 Resultado distinto

*/