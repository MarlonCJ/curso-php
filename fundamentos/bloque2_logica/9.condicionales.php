
<?php


// Condicionales

// permiten ejecutar código solo si una se cumple

// ejemplo basico

$edad = 20;

if($edad >= 18){
    echo "Acceso permito";
}

echo "\n";
// si la condicion es falsa, no pasa nada


// IF / ELSE

$edad2 = 15;

if($edad2 > 18){
    echo "Acceso permitido";
}else{
    echo "Acceso denegado";
}

echo "\n";

// Siempre se ejecuta una de las dos ramas

// ELSEIF - MULTIPLES DECISIONES

$nota = 4;

if($nota >= 4){
    echo "Excelente";
} elseif($nota >= 3){
    echo "Aprovado";
} else{
    echo "Reprobado";
}

echo "\n";



