
<?php

// AMBITO VARIABLES (SCOPE)

/*
❓ ¿Qué es el scope?

El scope define dónde existe y dónde se puede usar una variable.

📌 En PHP hay principalmente:

Scope global

Scope local (funciones)

*/

// 🔹 1️⃣ Variable GLOBAL

$nombre = 'Marlon';

echo $nombre;

// ✔ Existe en todo el archivo
// ❌ NO existe dentro de funciones automáticamente

// 2️⃣ Variable LOCAL (dentro de una función)


function saludar() {
    $mensaje = 'Hola';
    echo $mensaje;
}

saludar();

// ✔ $mensaje existe SOLO dentro de la función
// ❌ No existe fuera

// ❌ ERROR COMÚN (MUY IMPORTANTE)

/*
$nombre = 'Marlon';

function saludar() {
    echo $nombre; // ERROR
}

*/

// 📌 PHP no ve $nombre dentro de la función.

// 🔹 3️⃣ Pasar variables correctamente (FORMA CORRECTA)


function saludar2($nombre) {
    echo 'Hola' . $nombre;
}   

saludar('Marlon');

// 👉 Esta es la forma profesional.

// 🔹 4️⃣ global (EXISTE, pero EVÍTALO)


$nombre = 'Marlon';

function saludar3() {
    global $nombre;
    echo $nombre;
}

/*

⚠️ Mala práctica en la mayoría de los casos.

📌 Se vuelve difícil de mantener y testear.

🔹 5️⃣ ¿Por qué NO usar global?

Rompe encapsulación

Genera dependencias ocultas

Complica el código

Mal visto en WordPress moderno

👉 Solo se usa en casos MUY específicos.

🔹 6️⃣ Constantes y scope

*/

const PAIS = 'Colombia';

function mostrarPais(){
    echo PAIS;
}


mostrarPais();

/*
✔ Las constantes sí son globales
✔ Son seguras
✔ Muy usadas en plugins

🧠 Regla profesional CLAVE

Las funciones deben recibir TODO lo que necesitan

Si una función depende del exterior:
❌ Difícil de probar
❌ Difícil de reutilizar
❌ Código frágil

*/