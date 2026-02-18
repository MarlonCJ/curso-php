<?php

// Modo seleccionado: 1️⃣ Crear ejercicios
// Bloque: BLOQUE 2 — LÓGICA (Condicionales, operadores lógicos, switch)

// ⚠️ Recuerda:

// No hay soluciones.

// No hay pistas.

// Dificultad progresiva.

// Solo usar conceptos del bloque 2.

// 🧠 EJERCICIOS — BLOQUE 2
// 1️⃣

// Crea un script que reciba una variable $edad y:

// Si es mayor o igual a 18, imprima:
// "Eres mayor de edad"

// Si no, imprima:
// "Eres menor de edad"

$edad = 18;

if($edad >= 18){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
}

echo "<br>";

// 2️⃣

// Declara una variable $numero.

// Si el número es positivo, mostrar: "Número positivo"

// Si es negativo, mostrar: "Número negativo"

// Si es cero, mostrar: "Es cero"

$numero = 1;

if($numero < 0){
    echo "Número negativo";
}elseif($numero === 0){
    echo "Número es 0";
}else{
    echo "Número positivo";
}

echo "<br>";

// 3️⃣

// Crea una variable $nota (0 a 100).

// Evalúa:

// 90–100 → "Excelente"

// 70–89 → "Aprobado"

// 50–69 → "Regular"

// Menor a 50 → "Reprobado"

$nota = 99;

if($nota < 0 || $nota > 100){
    echo "nota no permitida";
}elseif($nota < 50){
    echo "Reprobado";
}elseif($nota < 70){
    echo "Regular";
}elseif($nota < 90){
    echo "Aprobado";
}else{
    echo "Excelente";
}

echo "<br>";

// 4️⃣

// Declara dos variables: $usuario y $password.

// Si:

// $usuario es "admin"

// Y $password es "1234"

// Mostrar: "Acceso permitido"
// Si no: "Acceso denegado"


$usuario = "admin";
$password = "1234";

if($usuario === "admin" && $password === "1234"){
    echo "Acceso permitido";
}else{
    echo "Acceso denegado";
}

echo "<br>";


// 5️⃣

// Crea una variable $hora (0–23).

// Si está entre 6 y 11 → "Buenos días"

// Si está entre 12 y 18 → "Buenas tardes"

// Si está entre 19 y 23 → "Buenas noches"

// Si está entre 0 y 5 → "Madrugada"


$hora = -1;

if(!is_numeric($hora)){
    echo "Hora no puede ser un string";
}elseif($hora < 0){ 
    echo "No puede ser un numero negativo";
}elseif($hora <= 5){
    echo "Madrugada";
}elseif($hora <= 11){
    echo "Buenos días";
}elseif($hora <= 18){
    echo "Buenas tardes";
}elseif($hora <= 23){
    echo "Buenas noches";
}else{
    echo "Hora incorrecta";
}

echo "<br>";

// 6️⃣

// Declara tres números: $a, $b, $c.

// Determina cuál es el mayor de los tres e imprímelo.

$a = 100000; $b = 2000; $c = 502;

if($a > $b && $a > $c){
    echo $a . " Es mayor";
}elseif($b > $a && $b > $c){
    echo $b. " Es mayor";
}else{
    echo $c . " Es mayor";
}

echo "<br>";

// 7️⃣

// Crea una variable $rol que puede ser:

// "admin"

// "editor"

// "suscriptor"

// Usa switch para mostrar:

// admin → "Acceso total"

// editor → "Acceso de edición"

// suscriptor → "Acceso limitado"

// cualquier otro → "Rol desconocido"

$rol = "suscriptor";

switch($rol){
    case "admin" : 
        echo "Acceso total";
        break;
    case "editor" :
        echo "Acceso de edición";
        break;
    case "suscriptor" :
        echo "Acceso limitado";
        break;
    default : 
        echo "Rol desconocido";
}

echo "<br>";


// 8️⃣

// Declara una variable $compra con un valor numérico.

// Si:

// Es mayor o igual a 100 → aplicar 20% descuento

// Es mayor o igual a 50 → aplicar 10% descuento

// Si no → sin descuento

// Imprime el total final.

$compra = 800;
$compraDescuento = 0;


if($compra >= 100){
    $compraDescuento = $compra - (($compra * 20)/100);
    echo "Valor Compra: ". $compraDescuento . " se aplico 20% descuento";
}elseif($compra >= 50){
    $compraDescuento = $compra - (($compra * 10) / 100);
    echo "Valor Compra: ". $compraDescuento . " se aplico 10% descuento";
}else{
    echo "Su compra no aplica descuento";
}

echo "<br>";


// 9️⃣

// Crea una variable $dia (1–7).

// Usa switch para mostrar:

// 1 → "Lunes"

// 2 → "Martes"

// 3 → "Miércoles"

// 4 → "Jueves"

// 5 → "Viernes"

// 6 → "Sábado"

// 7 → "Domingo"

// Cualquier otro valor → "Día inválido"


$dia = 7;

switch($dia){
    case 1 :
        echo "Lunes";
        break;
    case 2 :
        echo "Martes";
        break;
    case 3 :
        echo "Miercoles";
        break;
    case 4 :
        echo "Jueves";
        break;
    case 5 :
        echo "Viernes";
        break;
    case 6 :
        echo "Sábado";
        break;
    case 7 :
        echo "Domingo";
        break;
    default: 
        echo "Opcion no permitida";
}

echo "<br>";

// 🔟

// Declara una variable $temperatura.

// Si:

// Es menor a 10 → "Hace frío"

// Entre 10 y 25 → "Clima agradable"

// Mayor a 25 → "Hace calor"

// 📌 Entrega tus 10 soluciones completas.
// 📌 Código listo para ejecutar.
// 📌 Ordenado y claro.

// Cuando lo entregues:

// Evaluación estricta 1–10

// Análisis de lógica

// Errores técnicos

// Buenas prácticas

// Diagnóstico profesional

// Entrenamiento real activado. 🔥


$temperatura = 120;

if($temperatura < 10){
    echo "Hace Frio";
}elseif($temperatura <=25){
    echo "Clima agradable";
}else{
    echo "Hace calor";
}

echo "<br>";

