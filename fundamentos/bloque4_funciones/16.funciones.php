
<?php

// FUNCIONES

/*
❓ ¿Qué es una función?

Una función es un bloque de código reutilizable que:

Ejecuta una tarea específica

Evita repetir código

Hace el código más limpio y mantenible

📌 Sin funciones no existe software profesional.

🔹 4.1 Función básica (sin parámetros)

*/

function saludar(){
    echo 'Hola desde una funcion';
}

saludar();

/*
¿Qué pasa aquí?

function → palabra reservada

saludar → nombre de la función

() → parámetros (vacíos por ahora)

{} → cuerpo

saludar(); → llamada

🔹 4.2 ¿Por qué usar funciones?

❌ Mal (repetición):

echo 'Bienvenido';
echo 'Bienvenido';

✅ Bien:

function mensajeBienvenida() {
    echo 'Bienvenido';
}

mensajeBienvenida();
mensajeBienvenida();

📌 Menos errores, más control.

🔹 4.3 Funciones con parámetros

*/

function saludarUsuario($nombre){
    echo 'Hola ' . $nombre . "\n";
}

saludarUsuario('Marlon');

// 📌 $nombre solo existe dentro de la función.

// 🔹 4.4 Múltiples parámetros


function mostrarProducto($nombre, $precio){
    echo 'El producto ' . $nombre . ' cuesta ' . $precio . "\n";
}

mostrarProducto('television', 12000);

// 🔹 4.5 return (MUY IMPORTANTE)

// Una función no siempre imprime, muchas veces devuelve un valor.

function sumar($a, $b){
    return $a + $b;
}

$resultado = sumar(5,3);
echo $resultado . "\n"; 

/* 📌 En sistemas reales:

    Las funciones devuelven

    Otra capa decide qué hacer con eso

    🔹 4.6 Error común (importante)

    ❌ Esto está mal:

    function calcular() {
        echo 10 + 5;
    }

    ✅ Mejor:

    function calcular() {
        return 10 + 5;
    }

    📌 Separación de lógica y presentación.

    🧠 Mentalidad profesional

    Función = una responsabilidad

    Nombre claro

    Nada de funciones gigantes

    Si repites código → función
*/