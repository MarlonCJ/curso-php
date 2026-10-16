<?php

// ======================================================
// Tema 6: Ejercicios para resolver - Funciones
// ======================================================
// Instrucciones:
// 1. Lee cada enunciado antes de escribir tu solución.
// 2. Declara y llama las funciones que necesites.
// 3. Prueba tus soluciones con diferentes valores.
// 4. Escribe tu solución debajo de cada ejercicio.

// ------------------------------------------------------
// Ejercicio 1: Función de bienvenida
// ------------------------------------------------------
// Crea una función llamada mostrarBienvenida que muestre un mensaje.
// Llama a la función para comprobar que funciona.

// Escribe tu solución aquí.

function mostrarBienvenida(){
    echo "Bienvenidos \n";
}

mostrarBienvenida();
// ------------------------------------------------------
// Ejercicio 2: Saludar por nombre
// ------------------------------------------------------
// Crea una función que reciba un nombre como parámetro y muestre
// un saludo que incluya ese nombre. Llámala con dos nombres distintos.

// Escribe tu solución aquí.

$nombre1 = 'marlon';
$nombre2 = 'edinson';

function mostrarNombre($nombre){
    echo "Hola, $nombre buenos días \n";
}

mostrarNombre($nombre1);

mostrarNombre($nombre2);

// ------------------------------------------------------
// Ejercicio 3: Sumar dos números
// ------------------------------------------------------
// Crea una función que reciba dos números y devuelva su suma con return.
// Guarda el resultado de una llamada en una variable y muéstralo.

// Escribe tu solución aquí.

function sumar($num1, $num2){
    return $num1 + $num2;
}

$suma = sumar(20,30);
echo "El resultado de la suma: $suma \n";

//------------------------------------------------------
// Ejercicio 4: Parámetro predeterminado
// ------------------------------------------------------
// Crea una función que reciba un nombre con el valor predeterminado
// "invitado". Muestra un saludo y prueba llamarla con y sin argumento.

// Escribe tu solución aquí.

function invitado($invitado = "sin nombre"){
    echo "Bienvenido $invitado \n";
}

invitado('marlon');
invitado();


// ------------------------------------------------------
// Ejercicio 5: Número par
// ------------------------------------------------------
// Crea una función que reciba un entero y devuelva true si es par
// o false si es impar. Muestra el resultado de probar varios números.

// Escribe tu solución aquí.

function numeroPar(int $num): void {
    if($num % 2 == 0){
        echo "$num es par \n";
    }else{
        echo "$num no es par \n";
    }
}

numeroPar(10);
numeroPar(9);
numeroPar(10.5);
// ------------------------------------------------------
// Ejercicio 6: Precio con descuento
// ------------------------------------------------------
// Crea una función que reciba un precio y un porcentaje de descuento.
// Devuelve el precio final después de aplicar el descuento.
// Prueba la función con más de un precio.

// Escribe tu solución aquí.

function precioFinal(float $precio, float $porcentaje): float{
    
    $porcentaje = $porcentaje / 100;
    $descuento = $precio * $porcentaje;
    $precioFinal = $precio - $descuento;
    return $precioFinal;
}

$precioFinal = precioFinal(200000, 20);
echo "Precio Final: $precioFinal \n";
// ------------------------------------------------------
// Ejercicio 7: Total de una lista de precios
// ------------------------------------------------------
// Crea una función que reciba un arreglo de precios y devuelva la suma.
// Prueba la función con un arreglo de al menos cuatro precios.

// Escribe tu solución aquí.

$precios = [10000,20000,30000,45000,42000,52000];

function sumaPrecios(array $precios){
    $valor = 0;
    foreach($precios as $precio){
        $valor = $valor + $precio;
    }
    return $valor;
}

sumaPrecios($precios);
echo "\n";
// ------------------------------------------------------
// Reto final: Resumen de compras
// ------------------------------------------------------
// Crea un arreglo asociativo donde las claves sean productos y los valores
// sus precios. Escribe una función que reciba el arreglo y devuelva cuántos
// productos cuestan menos o igual a 100. Muestra el resultado.

// Escribe tu solución aquí.

$alimentos = [
    'pan' => 100,
    'caramelo' => 50,
    'cocakola' => 4500,
    'gomita' => 50,
];

function precioProducto(array $alimentos): void{

    $cant = 0;

    foreach($alimentos as $alimento => $precio){
        if($precio <= 100){
            echo "$alimento: $precio \n";
            $cant++;
        }
    }

    echo "Cantidad: $cant \n";
}

precioProducto($alimentos);

// ======================================================
// Fin de los ejercicios
// ======================================================
