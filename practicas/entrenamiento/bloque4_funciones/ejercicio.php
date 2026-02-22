<?php

// 🧠 ENTRENAMIENTO — BLOQUE 4 (FUNCIONES)
// 1️⃣

// Crea una función llamada saludar() que imprima:

// Bienvenido al sistema

// Llama a la función.


function saludar(){
    echo "Bienvenido al sistema";
}

saludar();


// 2️⃣

// Crea una función llamada mostrarNombre($nombre) que reciba un parámetro e imprima:

// Tu nombre es: [nombre]

// Llama a la función pasando tu nombre.


function mostrarNombre($nombre){
    echo "Tu nombre es: ", $nombre;
}

echo "\n";

mostrarNombre('Marlon');
echo "\n";


// 3️⃣

// Crea una función sumar($a, $b) que:

// Reciba dos números

// Devuelva la suma

// Guarda el resultado en una variable

// Imprime el resultado fuera de la función

function sumar($a, $b){
    $suma = $a + $b;
    return $suma;
}

echo sumar(20,35);
echo "\n";


// 4️⃣

// Crea una función esPar($numero) que:

// Reciba un número

// Devuelva true si es par

// Devuelva false si es impar

// Imprime el resultado.


function esPar($numero){

    if($numero % 2 === 0){
        return 'True';
    }else{
        return 'False';
    }
}

$comprobarNumero = esPar(10);
echo $comprobarNumero;
echo "\n";


// 5️⃣

// Crea una función calcularAreaRectangulo($base, $altura) que:

// Devuelva el área

// Imprime el resultado con mensaje descriptivo

function calcularAreaRectangulo($base, $altura){
    $area = $base * $altura;
    return $area;
}

echo "El area es: " . calcularAreaRectangulo(200,400);
echo "\n";


// 6️⃣

// Crea una función mayorDeEdad($edad) que:

// Devuelva "Mayor de edad" si es 18 o más

// Devuelva "Menor de edad" si no

// Imprime el resultado.

function mayorDeEdad($edad){
    if($edad >= 18){
        return "Eres mayor de edad ";
    }else{
        return "Eres menor de edad";
    }
}

echo mayorDeEdad(16);
echo "\n";


// 7️⃣

// Crea una función multiplicar($a, $b) que:

// Devuelva el resultado

// Llama la función varias veces con diferentes valores

// Guarda cada resultado en variables distintas

function multiplicar($a, $b){
    return $a * $b;
}

$resultado1 = multiplicar(2,10);
$resultado2 = multiplicar(2,20);
$resultado3 = multiplicar(2,30);
$resultado4 = multiplicar(2,40);

echo $resultado1 . "\n";
echo $resultado2 . "\n";
echo $resultado3 . "\n";
echo $resultado4 . "\n";


// 8️⃣

// Crea una función calcularPromedio($n1, $n2, $n3) que:

// Devuelva el promedio

// Imprime el promedio fuera de la función


function calcularPromedio($n1,$n2,$n3){
    return ($n1 + $n2 +$n3) / 3;
}

$promedio = calcularPromedio(10,20,30);
echo "El promedio de su Números es: " . $promedio;
echo "\n";

// 9️⃣

// Crea una variable global $mensaje = "Hola mundo";

// Luego:

// Crea una función que intente imprimir esa variable sin usar parámetros.

// Observa qué sucede.

// Después corrige el problema correctamente usando parámetros.

// (No usar conceptos de bloques superiores.)

$mensaje = "Hola mundo";

function imprimirMensaje($mensaje){
    echo $mensaje;
}

imprimirMensaje($mensaje);
echo "\n";


// 🔟

// Crea una función convertirMayusculas($texto) que:

// Reciba un string

// Devuelva el texto en mayúsculas

// Imprime el resultado



function convertirMayusculas($texto){
    $texto = mb_strtoupper($texto);
    return $texto;
}

echo convertirMayusculas('todo bien o qué mi ñiño??');
echo "\n";



// 📌 Entrega

// Código completo

// Ordenado

// Sin explicaciones

// Sin fragmentos sueltos

// Después de que entregues:

// Evaluación estricta 1–10

// Análisis técnico

// Detección de errores de lógica

// Validación de buenas prácticas

// Si la nota es menor a 8, se genera nuevo bloque automáticamente.

// Nivel profesional activado.
// Te leo. 💻🔥