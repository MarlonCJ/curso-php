<?php

echo "=== Función sin parámetros ===\n";

function mostrarBienvenida()
{
    echo "Bienvenido al tema de funciones\n";
}

mostrarBienvenida();
echo "\n";

echo "=== Función con parámetros ===\n";

function mostrarSaludo(string $nombre): void
{
    echo "Hola, $nombre\n";
}

mostrarSaludo("Marlon");
echo "\n";

echo "=== Función que devuelve un resultado ===\n";

function sumar(int $numero1, int $numero2): int
{
    return $numero1 + $numero2;
}

$resultado = sumar(8, 5);
echo "La suma es: $resultado\n";
echo "\n";

echo "=== Parámetro con valor predeterminado ===\n";

function mostrarMensaje(string $mensaje = "No hay mensajes nuevos"): void
{
    echo $mensaje . "\n";
}

mostrarMensaje();
mostrarMensaje("Tienes una notificación");
echo "\n";

echo "=== Función que trabaja con un arreglo ===\n";

function calcularTotal(array $precios): int
{
    $total = 0;

    foreach ($precios as $precio) {
        $total += $precio;
    }

    return $total;
}

$precios = [120, 80, 50];
echo "Total: " . calcularTotal($precios) . "\n";
