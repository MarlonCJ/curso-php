<?php

echo "=== Arreglo indexado ===\n";
$frutas = ["manzana", "pera", "uva"];

echo "Primera fruta: " . $frutas[0] . "\n";
$frutas[1] = "mango";
$frutas[] = "naranja";

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}

echo "Cantidad de frutas: " . count($frutas) . "\n";
echo "\n";

echo "=== Arreglo asociativo ===\n";
$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "Bogotá"
];

foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "\n";
}

$persona["edad"] = 26;
echo "Nueva edad: " . $persona["edad"] . "\n";
echo "\n";

echo "=== Buscar y eliminar un elemento ===\n";
if (in_array("uva", $frutas, true)) {
    echo "La uva está en la lista.\n";
}

unset($frutas[0]);
$frutas = array_values($frutas);

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}
echo "\n";

echo "=== Arreglo multidimensional ===\n";
$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 85000
    ],
    [
        "nombre" => "Mouse",
        "precio" => 40000
    ],
    [
        "nombre" => "Monitor",
        "precio" => 450000
    ]
];

foreach ($productos as $producto) {
    echo $producto["nombre"] . ": $" . $producto["precio"] . "\n";
}
