<?php

/*

🧪 EVALUACIÓN BLOQUE 4 — FUNCIONES EN PHP

📌 Instrucciones Generales

Debes resolver EXACTAMENTE 10 ejercicios.

Sin soluciones parciales.
Código limpio y ejecutable.
No se regalan puntos.
Nota mínima para aprobar: 8.5 / 10
Entrega todos juntos o por tandas (recomendado 5 y 5).

✅ EJERCICIO 1

🎯 Objetivo

Crear y ejecutar una función básica.

Contexto

El sistema necesita mostrar un mensaje inicial reutilizable.

Instrucciones
Crea una función llamada bienvenida.
Debe imprimir exactamente: Bienvenido al sistema
Ejecuta la función una vez.
Salida esperada EXACTA
Bienvenido al sistema
Reglas técnicas
Usar function
Debe llamarse después de crearla

*/

function bienvenida(){
    echo 'Bienvenido al sistema';
}

bienvenida();
echo "\n";


/*

✅ EJERCICIO 2

🎯 Objetivo

Función con parámetro.

Contexto

El sistema debe saludar usuarios dinámicamente.

Instrucciones
Crea una función llamada saludar.
Recibe parámetro $nombre.
Imprime exactamente: Hola Carlos
Llamarla enviando "Carlos".
Salida esperada EXACTA
Hola Carlos
Reglas técnicas
Usar 1 parámetro

*/

function saludar($nombre){
    echo 'Hola ' . $nombre;
}

saludar('Carlos');
echo "\n";

/*


✅ EJERCICIO 3
🎯 Objetivo

Retorno de valores.

Contexto

El sistema calcula suma básica.

Instrucciones
Crea función sumar.
Recibe $a y $b.
Debe retornar la suma.
Mostrar resultado llamando con 8 y 4.
Salida esperada EXACTA
12

*/


function sumar($a, $b){
    return $a + $b;
}

echo sumar(8 , 4);
echo "\n";

/*

✅ EJERCICIO 4
🎯 Objetivo

Parámetro con valor por defecto.

Contexto

Usuarios sin nombre deben entrar como visitante.

Instrucciones
Crear función usuario.
Parámetro $nombre = "Visitante"
Imprimir Bienvenido Visitante
Llamar sin argumentos.
Salida esperada EXACTA
Bienvenido Visitante

*/

function usuario($nombre = 'Visitante'){
    echo 'Bienvenido ' . $nombre;
}

usuario();
echo "\n";

/*

✅ EJERCICIO 5
🎯 Objetivo

Tipado de parámetros.

Contexto

Calcular total de compra.

Instrucciones
Crear función total.
Recibir:
float $precio
int $cantidad
Retornar multiplicación.
Mostrar resultado con 10.5 y 3
Salida esperada EXACTA
31.5

*/

function total(float $precio, int $cantidad){
    return $precio * $cantidad;
}

echo total(10.5 , 3);
echo "\n";

/*

✅ EJERCICIO 6
🎯 Objetivo

Tipado de retorno.

Contexto

Sistema valida mayoría de edad.

Instrucciones
Crear función esMayor.
Recibe int $edad
Retorna bool
Llamar con 20
Mostrar exactamente true
Salida esperada EXACTA
true

*/

function esMayor(int $edad):bool{
    
    if($edad >= 18){
        return true;
    }else{
        return false;
    }
}

echo esMayor(20);
echo "\n";

/*

✅ EJERCICIO 7

🎯 Objetivo

Función anónima.

Contexto

Aplicar descuento temporal.

Instrucciones
Guardar una función anónima en $descuento
Recibe $precio
Retorna precio menos 10%
Mostrar resultado con 100
Salida esperada EXACTA
90

*/


$descuento = function($precio){
    return $precio - ($precio * 10) / 100 ;
};

echo $descuento(100);
echo "\n";

/*

✅ EJERCICIO 8

🎯 Objetivo

Arrow Function.

Contexto

Duplicar valores.

Instrucciones
Crear arrow function en $doble
Recibe $n
Retorna $n * 2
Mostrar resultado con 7
Salida esperada EXACTA
14

*/


$doble = fn($n) => $n * 2 ;

echo $doble(7);
echo "\n";

/*
✅ EJERCICIO 9
🎯 Objetivo

Callback.

Contexto

Ejecutar operación dinámica.

Instrucciones
Crear función procesar($valor, $callback)
Debe mostrar resultado del callback.
Llamar con valor 5
Callback debe multiplicar por 3
Salida esperada EXACTA
15

*/

function procesar($valor , $callback){
    return $valor * $callback();
}

function multiplicar(){
    return 3;
}


echo procesar(5 , 'multiplicar');
echo "\n";


/*

✅ EJERCICIO 10
🎯 Objetivo

Caso real profesional.

Contexto

Calcular IVA del 19%.

Instrucciones
Crear función calcularIva
Recibe float $precio
Retorna valor del IVA
Mostrar resultado con 1000
Salida esperada EXACTA
190

*/

function calcularIva(float $precio){
    return ($precio * 19 ) / 100;
}

echo calcularIva(1000);