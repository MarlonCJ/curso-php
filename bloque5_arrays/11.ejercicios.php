<?php

/*

🧪 EVALUACIÓN OFICIAL — BLOQUE 5: ARRAYS EN PHP

📌 Instrucciones Generales

Debes resolver EXACTAMENTE 10 ejercicios
Entrega código PHP limpio y ejecutable
No se permiten soluciones parciales
No se regalan puntos
Nota mínima para aprobar: 8.5 / 10
Se evaluará lógica, sintaxis, buenas prácticas, claridad y dominio real del tema

🔟 EJERCICIOS OFICIALES

1️⃣ Array indexado básico

Objetivo:

Crear y acceder a posiciones numéricas.

Instrucciones:

Crea un array llamado $colores con estos valores en este orden:

Rojo
Verde
Azul

Imprime únicamente el segundo elemento.

Salida esperada EXACTA:
Verde

*/

$colores = ['Rojo' , 'Verde' , 'Azul'];

echo $colores[1].PHP_EOL;

/*

2️⃣ Conteo de elementos

Objetivo:

Usar count().

Instrucciones:

Crea un array $numeros con:

10, 20, 30, 40, 50

Imprime cuántos elementos contiene.

Salida esperada EXACTA:
5

*/

$numeros = [10 , 20 , 30 , 40 , 50];

echo count($numeros).PHP_EOL;

/*

3️⃣ Modificación de valor

Objetivo:

Reemplazar elementos.

Instrucciones:

Crea:

$frutas = ["Manzana", "Pera", "Uva"];

Reemplaza "Pera" por "Mango" e imprime todo con print_r().

Salida esperada EXACTA:
Array
(
    [0] => Manzana
    [1] => Mango
    [2] => Uva
)


*/

$frutas = ["Manzana" , "Pera" , "Uva"];

$frutas[1] = "Mango";

print_r($frutas).PHP_EOL;

/*

4️⃣ Array asociativo

Objetivo:

Acceder por clave.

Instrucciones:

Crea:

$persona = [
   "nombre" => "Carlos",
   "edad" => 30
];

Imprime solo la edad.

Salida esperada EXACTA:
30

*/

$persona = [
    "nombre" => "Carlos",
    "edad" => 30
];

echo $persona['edad'].PHP_EOL;


/*

5️⃣ Recorrido con foreach
Objetivo:

Recorrer arrays.

Instrucciones:

Crea:

$animales = ["Perro", "Gato", "Loro"];

Imprime cada valor en línea separada usando foreach.

Salida esperada EXACTA:
Perro
Gato
Loro

*/

$animales = ['Perro' , 'Gato' , 'Loro'];

foreach($animales as $animal){
    echo $animal . "\n";
}

/*

6️⃣ Buscar valor

Objetivo:

Usar in_array().

Instrucciones:

Crea:

$paises = ["Colombia", "Peru", "Chile"];

Si existe "Peru" imprime:

Encontrado

*/

$paises = ['Colombia' , 'Peru' , 'Chile'];

if(in_array("Peru",$paises)){
    echo 'Encontrado';
}


/*

7️⃣ Eliminar elemento

Objetivo:

Usar unset().

Instrucciones:

Crea:

$nums = [100, 200, 300];

Elimina el índice 1 e imprime con print_r().

Salida esperada EXACTA:
Array
(
    [0] => 100
    [2] => 300
)

*/

$nums = [100 , 200 , 300];

unset($nums[1]);

print_r($nums);


/*

8️⃣ Ordenamiento

Objetivo:

Usar sort().

Instrucciones:

Crea:

$letras = ["C", "A", "B"];

Ordénalo e imprime con print_r().

Salida esperada EXACTA:
Array
(
    [0] => A
    [1] => B
    [2] => C
)

*/

$letras = ["C" , "A" , "B"];

sort($letras);

print_r($letras);


/*

9️⃣ Multidimensional

Objetivo:

Acceder a niveles internos.

Instrucciones:

Crea:

$usuarios = [
   ["Ana", 20],
   ["Luis", 25],
   ["Pedro", 30]
];

Imprime únicamente:

Luis

*/

$usuarios = [
    ["Ana" , 20],
    ["Luis" , 25],
    ["Pedro" , 30]
];

echo $usuarios[1][0].PHP_EOL;


/*

🔟 Validación de clave

Objetivo:

Usar isset() o array_key_exists().

Instrucciones:

Crea:

$config = [
   "modo" => "oscuro",
   "idioma" => "es"
];

Valida si existe "idioma" e imprime:

Si existe
📌 Entrega

Responde con tus 10 ejercicios en un solo bloque de código PHP, numerados del 1 al 10.

🚨 Sin soluciones parciales. Evaluación estricta tipo empresa.

*/

$config = [
   "modo" => "oscuro",
   "idioma" => "es"
];

if(isset($config['idioma'])){
    echo 'Existe';
}
