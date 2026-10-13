<?php

echo "=== Bucle for ===\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i\n";
}

echo "\n=== Bucle while ===\n";
$contador = 1;
while ($contador <= 4) {
    echo "Contador: $contador\n";
    $contador++;
}

echo "\n=== Bucle do while ===\n";
$numero = 1;
do {
    echo "Do while: $numero\n";
    $numero++;
} while ($numero <= 3);

echo "\n=== Bucle foreach con arreglo ===\n";
$frutas = ["manzana", "pera", "uva", "mango"];
foreach ($frutas as $fruta) {
    echo "$fruta\n";
}

echo "\n=== foreach con arreglo asociativo ===\n";
$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "Bogotá"
];
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor\n";
}

echo "\n=== break y continue ===\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    if ($i % 2 == 0) {
        continue;
    }
    echo "$i\n";
}
