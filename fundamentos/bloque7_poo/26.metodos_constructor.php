<?php

/*
🔹 BLOQUE 7 — PARTE 2
MÉTODOS, $this Y CONSTRUCTOR EN PHP (POO REAL)

Aquí es donde la POO empieza a tener sentido práctico.

1️⃣ MÉTODOS: FUNCIONES DENTRO DE UNA CLASE

Hasta ahora tenías solo propiedades (datos).
Ahora vamos a darle comportamiento al objeto.
*/

class Usuario {

    public $nombre;

    public function saludar() {
        return 'Hola ' . $this -> nombre;
    }

}

/*

📌 Claves importantes:

Un método es una función dentro de una clase
public function
$this = el objeto actual

2️⃣ ¿QUÉ ES $this? (MUY IMPORTANTE)

👉 $this significa:

    “este objeto”

Cuando haces:

    $usuario -> nombre = 'Marlon';

Y luego dentro del método:

    $this->nombre;

PHP entiende:

“el nombre de ESTE usuario”

3️⃣ USANDO EL MÉTODO

*/

$usuario = new Usuario();

$usuario -> nombre = 'Marlon';

echo $usuario -> saludar();

/*
✔ Correcto
✔ Limpio
✔ Muy usado en WordPress

4️⃣ EL PROBLEMA DE ASIGNAR MANUALMENTE

Esto funciona, pero no es lo ideal:

    $usuario->nombre = 'Marlon';

👉 Para eso existe el constructor.

5️⃣ CONSTRUCTOR (__construct)
El constructor se ejecuta automáticamente al crear el objeto.

*/

class Usuario2 {
    
    public  $nombre;

    public function __construct($nombre) {
        
        $this -> nombre = $nombre;

    }

    public function saludar() {

        return 'Hola ' . $this->nombre;

    }

}

// 6️⃣ USANDO EL CONSTRUCTOR

$usuario = new Usuario('Marlon');
echo $usuario -> saludar();

/*
🔥 Más limpio
🔥 Más profesional
🔥 Así trabaja WordPress

🧠 CONCEPTOS QUE ACABAS DE APRENDER

✔ Métodos
✔ $this
✔ Constructor
✔ Inicialización correcta de objetos
✔ POO usable en proyectos reales
*/