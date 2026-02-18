<?php

// 🧠 EJERCICIOS
// 1️⃣

// Crea un script que imprima en pantalla:

// Estoy aprendiendo PHP correctamente

echo "Estoy aprendiendo PHP correctamente";
echo "<br>";

// 2️⃣

// Declara una variable llamada $nombre y asígnale tu nombre.
// Luego imprímelo con el siguiente formato:

// Mi nombre es: Carlos

$nombre = "Marlon";
echo "Mi nombre es: ", $nombre;
echo "<br>";

// (Usa concatenación correctamente).

// 3️⃣

// Declara tres variables:

// $edad (entero)

// $altura (float)

// $activo (boolean)

// Imprime cada variable en una línea distinta.

$edad = 32;
$altura = 75.5;
$activo = true;

echo $edad;
echo "<br>";
echo $altura;
echo "<br>";
echo $activo;
echo "<br>";

// 4️⃣

// Crea una constante llamada PI con el valor 3.1416.
// Imprime su valor.

define('PI', 3.14);
echo PI; 
echo "<br>";

// 5️⃣

// Declara una variable $precio con valor 1000.
// Crea otra variable $mensaje que contenga el siguiente texto utilizando concatenación:

// El precio del producto es: 1000 pesos

// Luego imprímela.

$precio = 1000;
$mensaje = "El precio del producto es: $precio pesos";
echo $mensaje;
echo "<br>";

// 6️⃣

// Crea una variable $valor con el número 10.
// Después cambia su valor a texto "Diez"
// Imprime ambos valores (el inicial y el nuevo).

$valor = 10;
var_dump($valor);
echo "<br>";

$valor = "Diez";
var_dump($valor);
echo "<br>";

// 7️⃣

// Declara una variable $numero con valor 5.
// Usa var_dump() para mostrar:

// El valor

// El tipo de dato

$numero = 5;
var_dump($numero);
echo "<br>";

// 8️⃣

// Crea un script que muestre en pantalla:

// Nombre: Ana
// Edad: 25
// Ciudad: Bogotá

$nombre = "Ana";
$edad = 25;
$ciudad = "Bogotá";

echo "Nombre: $nombre<br>Edad: $edad<br>Ciudad: $ciudad";


// Usando variables y concatenación.

// 9️⃣

// Declara una variable sin asignarle valor.
// Luego asígnale el valor 50.
// Imprime el valor antes y después de asignarlo.

$sinValor ;
var_dump($sinValor);
echo "<br>";
$sinValor = 50;
var_dump($sinValor);
echo "<br>";



// 🔟

// Crea un script que:

// Declare una constante PAIS

// Declare una variable $ciudad

// Imprima un mensaje combinando ambas:

// Ejemplo esperado:

// Vivo en Colombia, en la ciudad de Medellín


const PAIS = "Colombia";
$ciudad = "Villavicencio";

echo "Yo vivo en $ciudad ". PAIS;
echo "<br>";



// 📌 Instrucciones

// Responde con tu código completo para los 10 ejercicios.

// Evaluaré:

// Sintaxis

// Uso correcto de variables

// Uso correcto de constantes

// Concatenación

// Claridad

// Orden

// Buenas prácticas básicas

// Comprensión real

// La evaluación será estricta.
// Nota mínima de aprobación: 8/10