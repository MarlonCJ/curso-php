<?php

// ======================================================
// Tema 5: Ejercicios para resolver - Arreglos
// ======================================================
// Instrucciones:
// 1. Lee cada enunciado antes de escribir tu solución.
// 2. Usa las estructuras y funciones indicadas.
// 3. Prueba tus soluciones con diferentes valores.
// 4. Escribe tu solución debajo de cada ejercicio.

// ------------------------------------------------------
// Ejercicio 1: Lista de frutas
// ------------------------------------------------------
// Crea un arreglo indexado con cinco frutas.
// Muestra cada fruta en una línea usando foreach.

// Escribe tu solución aquí.

$frutas = ['manzana', 'uva' , 'pera' , 'coco' , 'limon'];

foreach($frutas as $fruta){
    echo $fruta . "\n";
}

echo "\n";



// ------------------------------------------------------
// Ejercicio 2: Acceder y modificar elementos
// ------------------------------------------------------
// Crea un arreglo indexado con cinco colores.
// Muestra el primer y el último color.
// Cambia uno de los colores y muestra el valor actualizado.

// Escribe tu solución aquí.

$colores = ['amarillo','rojo','naranja','verde','cafe'];

echo $colores[0];
echo "\n";
echo $colores[count($colores) - 1];
echo "\n";
$colores[0] = "azul";
echo $colores[0];
echo "\n";
echo "\n";
// ------------------------------------------------------
// Ejercicio 3: Agregar elementos
// ------------------------------------------------------
// Crea un arreglo con tres ciudades.
// Agrega dos ciudades más al final.
// Muestra todas las ciudades usando foreach.

// Escribe tu solución aquí.

$ciudades = ['bogota', 'villavicencio', 'cali'];

$ciudades[] = 'yopal';
$ciudades[] = 'manizales';

foreach($ciudades as $ciudad){
    echo $ciudad . "\n";
}

echo "\n";

array_push($ciudades, 'acacias', 'granada');

foreach($ciudades as $ciudad){
    echo $ciudad . "\n";
}
// ------------------------------------------------------
// Ejercicio 4: Contar elementos
// ------------------------------------------------------
// Crea un arreglo con varios números.
// Usa count() para mostrar cuántos elementos contiene.

// Escribe tu solución aquí.

$numeros = [1,2,3,4,5,6,7,8,9,0];

echo count($numeros) . "\n";

// ------------------------------------------------------
// Ejercicio 5: Arreglo asociativo de una persona
// ------------------------------------------------------
// Crea un arreglo asociativo con las claves nombre, edad y ciudad.
// Muestra cada clave junto con su valor usando foreach.
// Actualiza la edad y muestra el nuevo valor.

// Escribe tu solución aquí.


$persona = [
    'nombre' => 'marlon',
    'edad' => 33,
    'ciudad' => 'villavicencio'
];

foreach($persona as $clave => $valor){
    echo $clave . " : " . $valor . "\n";
}

echo "\n";

$persona['edad'] = 34;

echo 'Edad: ' . $persona['edad'];
echo "\n\n";


// ------------------------------------------------------
// Ejercicio 6: Buscar un elemento
// ------------------------------------------------------
// Crea un arreglo con varios nombres.
// Usa in_array() para comprobar si un nombre indicado está en el arreglo.
// Muestra un mensaje según el resultado.

// Escribe tu solución aquí.


$nombre = "camila";
$nombres = ['marlon', 'edinson' , 'cortes' , 'jara'];

if(in_array($nombre , $nombres)){
    echo "$nombre esta en la lista";
}else{
    echo "$nombre no esta en la lista";
}

echo "\n\n";

// ------------------------------------------------------
// Ejercicio 7: Eliminar un elemento
// ------------------------------------------------------
// Crea un arreglo indexado con cinco animales.
// Elimina uno de los elementos usando unset().
// Reorganiza los índices numéricos con array_values().
// Muestra el arreglo resultante.

// Escribe tu solución aquí.

$animales = ['perro' , 'gato' , 'loro' , 'pollito' , 'gallina']; 


foreach($animales as $clave => $valor){
    echo $clave . " : " . $valor . "\n";
}

echo "\n";

unset($animales[2]);

$animales2 = array_values($animales);

foreach($animales2 as $clave => $valor){
    echo $clave . " : " . $valor . "\n";
}

echo "\n";
// ------------------------------------------------------
// Ejercicio 8: Catálogo de productos
// ------------------------------------------------------
// Crea un arreglo multidimensional con al menos tres productos.
// Cada producto debe tener nombre y precio.
// Recorre el arreglo y muestra el nombre y precio de cada producto.

// Escribe tu solución aquí.

$productos = [
    [
        'nombre' => 'tv tlc',
        'precio' => 1200000,
    ],
    [
        'nombre' => 'equipo sonido lg',
        'precio' => 1000000,
    ],
    [
        'nombre' => 'Lapto Lenovo',
        'precio' => 2000000,
    ],
];

foreach($productos as $producto){
    foreach($producto as $clave => $valor){
        echo $clave . " : " . $valor . "\n";
    }
}
echo "\n";

// ------------------------------------------------------
// Reto final: Lista de compras
// ------------------------------------------------------
// Crea un arreglo asociativo donde cada clave sea el nombre de un producto
// y cada valor sea su precio.
// Recorre el arreglo y muestra únicamente los productos cuyo precio sea
// menor o igual a 100.
// Al final, muestra cuántos productos cumplen esa condición.

// Escribe tu solución aquí.

$frutas = [
        'manzana' => 2000,
        'uvas' => 7000,
        'limon' => 300,
        'coco' => 10000,
        'banano' => 50,
        'pera' => 100
];

$cantidadFrutas = 0;

foreach($frutas as $fruta => $precio){
    if($precio <= 100){
        echo "$fruta : $precio \n"; 
        $cantidadFrutas++;
    }
}   

echo "Cantidad de Frutas: $cantidadFrutas";
echo "\n";


// ======================================================
// Fin de los ejercicios
// ======================================================
