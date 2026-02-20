<?php

// 🔹 BLOQUE 3 — ESTRUCTURAS DE DATOS (Arrays, arrays asociativos, foreach)

// 🧠 EJERCICIOS — BLOQUE 3
// 1️⃣

// Crea un array numérico con 5 colores y:

// Imprime el tercer elemento del array.

$colores = ['rojo','sapote',"amarillito","verde","negro"];

echo $colores[2];
echo "<br><br>";

// 2️⃣

// Crea un array con 5 números enteros y:

// Recorre el array usando foreach

// Imprime cada número en una línea diferente.

$numeros = [10,45,89,45,64];

foreach($numeros as $numero){
    echo $numero . "<br>";
}

echo "<br><br>";

// 3️⃣

// Crea un array con 6 números y:

// Muestra la suma total de todos los elementos usando un recorrido manual (foreach).

// (No usar funciones avanzadas como array_sum.)

$numeros2 = [45,47,56,254,145,356];
$suma = 0;

foreach($numeros2 as $numero){
    $suma += $numero;
}

echo $suma;
echo "<br><br>";

// 4️⃣

// Crea un array con nombres de 5 personas y:

// Imprime únicamente los nombres que tengan más de 5 caracteres.

$nombres = [
    'marlon',
    'edinson',
    'cortes',
    'jara',
    'marlonete',
    'ñoño'
];

foreach($nombres as $nombre){
    if(mb_strlen($nombre) > 4){
        echo $nombre .  "<br>";
    }
}

echo "<br><br>";


// 5️⃣

// Crea un array asociativo que represente una persona:

// [
//     "nombre" => "...",
//     "edad" => ...,
//     "ciudad" => "..."
// ]

$persona = [
    "nombre" => "marlon",
    "edad" => 32,
    "ciudad" => 'villavicencio',
];

// Imprime solo la edad usando la clave correspondiente.

echo $persona['edad'];
echo "<br><br>";


// 6️⃣

// Crea un array asociativo con 4 productos y sus precios.

// Ejemplo:

// [
//    "Laptop" => 3000,
//    "Mouse" => 50
// ]

// Recorre el array con foreach

// Muestra el producto y su precio.

$productos = [
    "laptop" => 1200000,
    "mouse" => 50000,
    "teclado" => 60000,
    "parlantes" => 60000
];

foreach($productos as $producto => $valor){
    echo $producto . " = " . $valor ."<br>";
}

echo "<br><br>";


// 7️⃣

// Crea un array con 8 números y:

// Imprime únicamente los números pares.

$numeros = [10,56,46,85,96,47,87];

foreach($numeros as $numero){
    if($numero % 2 === 0){
        echo $numero . "<br>";
    }
}

echo "<br><br>";

// 8️⃣

// Crea un array asociativo con nombres de estudiantes y sus notas.

// Muestra solo los estudiantes que tengan nota mayor o igual a 3.5.

$estudiantes = [
    'pepito' => 5,
    'carlitos' => 2,
    'lorenita' => 5,
    'mateito' => 3.8
];

foreach($estudiantes as $estudiante){
    if($estudiante >= 3.5){
        echo $estudiante . "<br>";
    }
}

echo "<br><br>";


// 9️⃣

// Crea un array numérico con 10 números.

// Calcula el promedio manualmente (sin funciones avanzadas).

// Imprime el promedio final.


$numeritos = [11,22,55,66,44,77,88,56,13,245];
$valor = 0;
$cont = 0;
$promedio = 0;

for($i=0; $i < count($numeritos) ; $i++ ){
    $cont++;
    $valor += $numeritos[$i];
}

$promedio = $valor / $cont;
echo $valor;
echo "<br><br>";
echo $cont;
echo "<br><br>";
echo "El promedio de sus números es: ". $promedio;
echo "<br><br>";

// 🔟

// Crea un array asociativo que contenga información de 3 empleados.
// Cada empleado debe ser otro array asociativo con:

// nombre

// salario

// Recorre la estructura completa usando foreach e imprime:

// Empleado: Juan - Salario: 2000

$empleados = [
    'juan' => 1000,
    'pedro' => 2000,
    'carlos' => 3000    
];

foreach($empleados as $empleado => $salario){
    echo 'Nombre: ' . $empleado . " Salario: " . $salario ."<br>";
}


// Cuando termines:

// 📌 Envíame todo tu código completo.
// 📌 No expliques nada, solo código.
// 📌 Yo haré evaluación estricta (1–10).

// Si sacas menos de 8 → repetirás con 20 ejercicios nuevos.