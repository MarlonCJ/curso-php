<?php

// 🧠 ENTRENAMIENTO BLOQUE 3 — NIVEL 2 (20 EJERCICIOS)
// 1️⃣

// Crea un array con 7 números enteros.
// Imprime únicamente los números mayores a 50.

$enteros = [100,20,45,8,63,54,1];

foreach($enteros as $entero){
    if($entero > 50){
        echo $entero . "<br>";
    }
}

echo "<br>";


// 2️⃣

// Crea un array con 6 palabras.
// Imprime solo las palabras que empiecen con la letra "m".

$animales = ['perro','gato','mico','loro','tigre','mariposa'];

foreach($animales as $animal){
    if($animal[0] == 'm'){
        echo $animal . "<br>";
    }
}

echo "<br>";

// 3️⃣

// Crea un array con 10 números.
// Cuenta cuántos números son positivos y cuántos negativos.
// Imprime ambos resultados.

$numeros = [10,20,-55,45,-65,85,0,52,45,-20];
$positivo = 0;
$negativo = 0;
$cero = 0;


foreach($numeros as $numero){
    if($numero == 0){
        $cero++;
    }elseif($numero < 0){
        $negativo++;
    }else{
        $positivo++;
    }
}

echo "Validacion de Númenos cantidades <br><br>";
echo "Números Positivos: $positivo <br>";
echo "Números Negativos: $negativo <br>";
echo "Cero: $cero <br>";

// 4️⃣

// Crea un array con 8 números.
// Calcula el número mayor manualmente (sin usar max()).

$numeros =[10,20,45,888,12,45,23,56];
$mayor = $numeros[0];

foreach($numeros as $numero){
    if($numero > $mayor){
        $mayor = $numero;
    }
}

echo $mayor;


// 5️⃣

// Crea un array asociativo con 5 países y sus capitales.
// Imprime cada país junto con su capital.

$paises =[
    'Colombia' => 'Bogota DC',
    'Venezuela' => 'Caracas',
    'Argentina' => 'Buenos Aires',
    'Ecuador' => 'Quito',
    'Peru' => 'Lima'
];

foreach($paises as $pais => $capital){
    echo 'Pais: '. $pais . ' Capital: ' .$capital .'<br>'; 
}


// 6️⃣

// Crea un array con 6 números.
// Multiplica todos los números manualmente y muestra el resultado final.

$numeros = [89,56,24,32,75,59];
$multiplicar = 1;

foreach($numeros as $numero){
    $multiplicar = $multiplicar * $numero;
    echo $multiplicar ."<br>";
}

// 7️⃣

// Crea un array asociativo con productos y cantidades en inventario.
// Imprime solo los productos cuya cantidad sea menor a 10.


$productos = [
    'televisor' => 5,
    'computador' => 50,
    'equipo de sonido' => 4,
    'celular' => 3,
    'esfero' => 150,
    'dulce' => 200
];

foreach($productos as $producto => $cant){
    if($cant < 10){
        echo $producto . '<br>';
    }
}


// 8️⃣

// Crea un array con 10 números.
// Cuenta cuántos son pares y cuántos impares.

$numeros = [10,500,456,235,189,457,459,'perro',563,860];
$pares = 0;
$impares = 0;
$cero = 0;

foreach($numeros as $numero){
    if(!is_numeric($numero)){
        continue;
    }elseif($numero == 0){
        $cero++;
    }elseif($numero % 2 == 0){
        $pares++;
    }else{
        $impares++;
    }
}

echo "
    Pares : $pares <br>
    Impares : $impares <br>
    Cero : $cero <br>
";

// 9️⃣

// Crea un array asociativo con nombres y edades.
// Imprime solo las personas mayores de 30 años.

$personas = [
    'Carlos' => 35,
    'Miguel' => 28,
    'Andres' => 62,
    'Sofia' => 47,
    'Maria' => 64,
    'Camila' => 17
];

foreach($personas as $nombre => $edad){
    if($edad > 30){
        echo $nombre .'<br>';
    }
}

echo '<br>';


// 🔟

// Crea un array con 5 temperaturas.
// Calcula el promedio manualmente.
// Imprime solo el promedio final.

$temperaturas = [10,20,30,40,50];
$suma = 0;
$promedio = 0;

foreach($temperaturas as $temperatura){
    $suma += $temperatura;
}

$promedio = $suma / count($temperaturas);

echo $promedio;
echo "<br>";

