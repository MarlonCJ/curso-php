<?php

/*

🧪 EVALUACIÓN PROFESIONAL — BLOQUE 3: ESTRUCTURAS DE CONTROL

Cumple estrictamente cada instrucción.
No hay interpretación. No hay ambigüedad. No hay pistas.

🧩 EJERCICIO 1 (BÁSICO)
🎯 Objetivo

Evaluar uso correcto de if

📘 Contexto

Determinar si un número es positivo

📋 Instrucciones

Crear variable $numero = 10;
Usar if
Validar si es mayor que 0
Imprimir SOLO si cumple la condición

📥 Entrada

$numero = 10

📤 Salida esperada EXACTA
Numero positivo
⚙️ Reglas técnicas
Usar if
No usar else

*/


$numero = 10;

if($numero > 0){
    echo "Número positivo";
}

echo "\n";

/*

🧩 EJERCICIO 2 (BÁSICO)
🎯 Objetivo

Uso de if - else

📘 Contexto

Determinar si una persona puede votar

📋 Instrucciones
$edad = 17;
Si es mayor o igual a 18 → "Puede votar"
Si no → "No puede votar"
📤 Salida esperada EXACTA
No puede votar
*/

$edad = 17;

if($edad >= 18){
    echo 'Puede votar';
}else{
    echo 'No puede votar';
}

echo "\n";

/*

🧩 EJERCICIO 3 (BÁSICO)

🎯 Objetivo

Uso de if - elseif - else

📘 Contexto

Clasificar una nota

📋 Instrucciones
$nota = 65;
≥ 90 → "Excelente"
≥ 70 → "Aprobado"
< 70 → "Reprobado"
📤 Salida esperada EXACTA
Reprobado

*/

$nota = 65;

if($nota >= 90){
    echo 'Excelente';
}elseif($nota >= 70){
    echo 'Aprobado';
}else{
    echo 'Reprobado';
}

echo "\n";

/*

🧩 EJERCICIO 4 (BÁSICO)

🎯 Objetivo

Uso de operadores lógicos

📘 Contexto

Validar acceso

📋 Instrucciones
$edad = 20;
$tieneDocumento = true;
Si ambas condiciones se cumplen → "Acceso permitido"
Si no → "Acceso denegado"
📤 Salida esperada EXACTA
Acceso permitido

*/

$edad = 20;
$tieneDocumento = true;

if($edad >= 18 && $tieneDocumento == true){
    echo 'Acceso permitido';
}else{
    echo 'Acceso denegado';
}

echo "\n";

/*

🧩 EJERCICIO 5 (INTERMEDIO)
🎯 Objetivo

Uso de switch

📘 Contexto

Evaluar rol

📋 Instrucciones
$rol = "admin";
admin → "Acceso total"
usuario → "Acceso limitado"
otro → "Sin acceso"

📤 Salida esperada EXACTA
Acceso total

*/

$rol = 'admin';

switch($rol){
    case 'admin' : 
        echo 'Acceso total';
        break;
    case 'usuario' :
        echo 'Acceso limitado';
        break;
    default:
        echo 'Sin acceso';
}

echo "\n";

/*
🧩 EJERCICIO 6 (INTERMEDIO)
🎯 Objetivo

Uso de while

📘 Contexto

Imprimir números

📋 Instrucciones
Imprimir números del 1 al 3 usando while
📤 Salida esperada EXACTA
1
2
3

*/


$num = 1;

while($num <= 3){
    echo $num . "\n";
    $num++;
}

echo "\n";

/*
🧩 EJERCICIO 7 (INTERMEDIO)
🎯 Objetivo

Uso de do while

📘 Contexto

Ejecutar al menos una vez

📋 Instrucciones
$i = 5;
Ejecutar do while ($i < 3)
Imprimir $i
📤 Salida esperada EXACTA
5

*/


$i = 5;

do{
    echo $i;
}while($i < 3);

echo "\n";

/*

🧩 EJERCICIO 8 (INTERMEDIO)
🎯 Objetivo

Uso de for

📘 Contexto

Conteo descendente

📋 Instrucciones
Imprimir del 3 al 1 usando for
📤 Salida esperada EXACTA
3
2
1

*/

for($i = 3; $i >= 1 ; $i--){
    echo $i . "\n";
}


/*
🧩 EJERCICIO 9 (AVANZADO)
🎯 Objetivo

Uso de continue

📘 Contexto

Filtrar números

📋 Instrucciones
Usar for del 1 al 5
Omitir el número 3 usando continue
Imprimir los demás
📤 Salida esperada EXACTA
1
2
4
5

*/

for($i = 1; $i <= 5 ; $i++){
    if($i === 3 ){
        continue;
    }

    echo $i . "\n";
}

/*
🧩 EJERCICIO 10 (AVANZADO)
🎯 Objetivo

Estructuras anidadas

📘 Contexto

Control de acceso complejo

📋 Instrucciones
$edad = 22;
$activo = false;
Si edad ≥ 18:
Si activo → "Acceso completo"
Si no → "Usuario inactivo"
Si no cumple edad → "Menor de edad"
📤 Salida esperada EXACTA
Usuario inactivo
🚨 INSTRUCCIÓN FINAL

Responde con todo tu código en un solo mensaje.

No expliques. No justifiques. Solo código.

*/

$edad = 22;
$activo = false;


if($activo === true){
    if($edad >= 18){
        echo 'Acceso completo';
    }else{
        echo 'Menor de edad';
    }
}else{
    echo 'Usuario inactivo';
}
