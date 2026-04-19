<?php

/*

📘 BLOQUE 4 — TEMA 4: PARÁMETROS Y ARGUMENTOS EN FUNCIONES

🎯 Definición Profesional

Hasta ahora creamos funciones fijas.

Pero en sistemas reales una función debe recibir datos para trabajar con diferentes valores.

Eso se logra con:

Parámetros → variables declaradas en la función.
Argumentos → valores reales enviados al llamar la función.

🧠 Ejemplo Básico

*/

function saludar($nombre) {
    echo "Hola " . $nombre;
}

saludar("Carlos");

/*

📌 Resultado:

Hola Carlos

🔍 Explicación Técnica

En la definición:

function saludar($nombre)

$nombre es parámetro.

En la llamada:

saludar("Carlos");

"Carlos" es argumento.

PHP toma "Carlos" y lo guarda temporalmente en $nombre.

✅ Ventaja Profesional

Sin parámetros:

function saludar() {
 echo "Hola Carlos";
}

Solo sirve para Carlos.

Con parámetros:

saludar("Carlos");
saludar("Ana");
saludar("Luis");

Una sola función sirve para todos.

📌 Ejemplo con Dos Parámetros

*/

function sumar($a, $b) {
    echo $a + $b;
}

sumar(5, 3);

/*

Resultado:

8

🔍 Orden Importa

sumar(5, 3);

No es igual a:

sumar(3, 5);

En suma da igual, pero en otras operaciones no.

📌 Ejemplo Real Empresarial

function crearUsuario($nombre, $correo) {
    echo "Usuario: $nombre - $correo";
}

crearUsuario("Carlos", "carlos@email.com");

📌 Múltiples Parámetros

function producto($nombre, $precio, $stock) {
    echo "$nombre - $precio - $stock";
}

❌ Errores Comunes

1. Enviar menos argumentos

sumar(5);

Si esperaba 2 → error.

2. Orden incorrecto

crearUsuario("correo@email.com", "Carlos");

Resultado lógico incorrecto.

3. Nombres pobres

function dato($x, $y)

Poco profesional.

✅ Buenas Prácticas

Usa nombres descriptivos:

function registrarVenta($cliente, $total)

No:

function x($a, $b)

🧠 Mentalidad Senior

Una función sin parámetros hace tareas cerradas.
Una función con parámetros se vuelve reutilizable y escalable.

📌 Ejemplo Profesional Limpio

*/

function mostrarMensaje($usuario) {
    echo "Bienvenido $usuario";
}

mostrarMensaje("Marlonete");

