# Tema 5: Arreglos en PHP

## Objetivo

Aprender a guardar varios valores relacionados en una sola variable y a consultar, modificar y recorrer esos datos con PHP.

Los arreglos son útiles cuando necesitamos trabajar con listas de productos, nombres, notas u otros conjuntos de información.

---

## 1. ¿Qué es un arreglo?

Un arreglo es una estructura que permite guardar varios valores bajo un mismo nombre.

```php
<?php

$frutas = ["manzana", "pera", "uva"];
```

En lugar de crear una variable distinta para cada fruta, guardamos todas en `$frutas`.

---

## 2. Arreglos indexados

En un arreglo indexado, cada elemento tiene una posición numérica. En PHP, las posiciones empiezan en `0`.

```php
<?php

$colores = ["rojo", "verde", "azul"];

echo $colores[0]; // rojo
echo $colores[1]; // verde
echo $colores[2]; // azul
```

### Consultar y cambiar un elemento

Usa el índice entre corchetes para acceder a un elemento o reemplazar su valor.

```php
<?php

$colores = ["rojo", "verde", "azul"];
$colores[1] = "amarillo";

echo $colores[1]; // amarillo
```

### Agregar elementos

Puedes agregar un elemento al final con corchetes vacíos:

```php
<?php

$colores = ["rojo", "verde"];
$colores[] = "azul";
```

---

## 3. Arreglos asociativos

En un arreglo asociativo, cada valor se guarda bajo una clave descriptiva en lugar de una posición numérica.

```php
<?php

$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "Bogotá"
];

echo $persona["nombre"];
echo $persona["edad"];
```

Las claves suelen ser cadenas de texto, y se escriben entre comillas. Para cambiar un valor, asigna otro valor a la misma clave:

```php
$persona["edad"] = 26;
```

---

## 4. Recorrer arreglos con `foreach`

`foreach` permite ejecutar una acción por cada elemento del arreglo.

### Arreglo indexado

```php
<?php

$frutas = ["manzana", "pera", "uva"];

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}
```

### Arreglo asociativo

Para obtener la clave y el valor de cada elemento, usa `clave => valor`:

```php
<?php

$persona = [
    "nombre" => "Ana",
    "edad" => 25
];

foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "\n";
}
```

---

## 5. Contar elementos

La función `count()` devuelve cuántos elementos contiene un arreglo.

```php
<?php

$frutas = ["manzana", "pera", "uva"];

echo count($frutas); // 3
```

---

## 6. Comprobar si existe un valor

`in_array()` permite comprobar si un valor está dentro de un arreglo. Devuelve `true` o `false`.

```php
<?php

$frutas = ["manzana", "pera", "uva"];

if (in_array("pera", $frutas, true)) {
    echo "La fruta está en la lista.";
}
```

El tercer argumento `true` hace que la búsqueda también compare el tipo de dato.

---

## 7. Eliminar elementos

La función `unset()` elimina el elemento indicado por su índice o clave.

```php
<?php

$frutas = ["manzana", "pera", "uva"];
unset($frutas[1]);
```

En arreglos indexados, eliminar una posición no renumera automáticamente las demás claves. Para reorganizar los índices numéricos, puedes usar `array_values()`:

```php
$frutas = array_values($frutas);
```

---

## 8. Arreglos multidimensionales

Un arreglo puede contener otros arreglos. Esto permite representar, por ejemplo, varios productos con sus propiedades.

```php
<?php

$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 85000
    ],
    [
        "nombre" => "Mouse",
        "precio" => 40000
    ]
];

echo $productos[0]["nombre"]; // Teclado
echo $productos[1]["precio"]; // 40000
```

Puedes recorrer cada grupo con `foreach` y luego acceder a sus claves:

```php
foreach ($productos as $producto) {
    echo $producto["nombre"] . ": $" . $producto["precio"] . "\n";
}
```

---

## 9. Ejemplo práctico: lista de compras

```php
<?php

$listaCompras = ["arroz", "leche", "café"];
$listaCompras[] = "pan";

echo "Productos en la lista: " . count($listaCompras) . "\n";

foreach ($listaCompras as $producto) {
    echo "- " . $producto . "\n";
}
```

Este patrón sirve para mostrar una lista de datos que puede crecer durante la ejecución del programa.

---

## 10. Buenas prácticas y errores comunes

- Usa nombres descriptivos, como `$productos` o `$notas`.
- Recuerda que el primer índice numérico es `0`.
- Usa claves descriptivas en los arreglos asociativos.
- Usa `foreach` cuando quieras procesar todos los elementos.
- Comprueba que una clave o posición exista antes de usarla si los datos pueden variar.
- No confundas el índice de un arreglo indexado con la clave de un arreglo asociativo.
- Recuerda que `unset()` elimina el elemento, pero no reorganiza los índices numéricos.

---

## Resumen

- Un arreglo agrupa varios valores bajo una variable.
- Los arreglos indexados usan posiciones numéricas que empiezan en `0`.
- Los arreglos asociativos usan claves descriptivas.
- `foreach` recorre los elementos.
- `count()` cuenta los elementos.
- `in_array()` busca un valor.
- `unset()` elimina un elemento.
- Los arreglos multidimensionales contienen otros arreglos.

El siguiente paso es practicar creando y recorriendo tus propias listas.
