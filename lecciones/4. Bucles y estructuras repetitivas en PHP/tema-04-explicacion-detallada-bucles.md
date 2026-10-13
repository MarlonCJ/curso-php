# Tema 4: Bucles y estructuras repetitivas en PHP

## Objetivo

Aprender a repetir instrucciones de forma controlada con `for`, `while`, `do while` y `foreach`.

Cuando escribimos programas, muchas veces necesitamos ejecutar la misma tarea varias veces. Por ejemplo:

- Mostrar los números del 1 al 10
- Sumar una lista de precios
- Repetir una acción mientras una condición se cumpla
- Recorrer un arreglo de datos

Eso se hace con bucles.

---

## 1. ¿Qué es un bucle?

Un bucle es una estructura que permite repetir un bloque de código varias veces mientras se cumpla una condición o hasta que se recorra un conjunto de elementos.

```php
<?php

for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}
```

### Salida:

```text
1
2
3
4
5
```

---

## 2. Bucle `for`

El bucle `for` se usa cuando conocemos de antemano cuántas veces queremos repetir algo.

### Sintaxis

```php
for (inicialización; condición; incremento) {
    // código a repetir
}
```

### Ejemplo

```php
<?php

for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i\n";
}
```

### Explicación

- `$i = 1` => inicia el contador
- `$i <= 10` => condición para seguir repitiendo
- `$i++` => aumenta el valor del contador

---

## 3. Bucle `while`

El bucle `while` se usa cuando no sabemos exactamente cuántas veces se repetirá, pero sí sabemos la condición que debe mantenerse verdadera.

### Sintaxis

```php
while (condición) {
    // código a repetir
}
```

### Ejemplo

```php
<?php

$contador = 1;

while ($contador <= 5) {
    echo "Contador: $contador\n";
    $contador++;
}
```

### Importante

Si la condición nunca deja de cumplirse, el bucle puede volverse infinito.

---

## 4. Bucle `do while`

El bucle `do while` ejecuta el bloque al menos una vez, aunque la condición sea falsa desde el inicio.

### Sintaxis

```php
<?php

do {
    // código
} while (condición);
```

### Ejemplo

```php
<?php

$numero = 1;

do {
    echo "Número: $numero\n";
    $numero++;
} while ($numero <= 3);
```

### Diferencia con `while`

- `while`: primero evalúa la condición y luego ejecuta
- `do while`: primero ejecuta y luego evalúa

---

## 5. Bucle `foreach`

`foreach` se usa principalmente para recorrer arreglos.

### Ejemplo con arreglo indexado

```php
<?php

$frutas = ["manzana", "pera", "uva"];

foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}
```

### Ejemplo con arreglo asociativo

```php
<?php

$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "Bogotá"
];

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor\n";
}
```

---

## 6. `break` y `continue`

### `break`

Termina el bucle inmediatamente.

```php
<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "\n";
}
```

### `continue`

Salta la iteración actual y continúa con la siguiente.

```php
<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . "\n";
}
```

---

## 7. Cuándo usar cada bucle

### Usa `for` cuando:
- sabes cuántas veces se repetirá
- necesitas controlar un contador

### Usa `while` cuando:
- la repetición depende de una condición
- no sabes cuántas veces se repetirá

### Usa `do while` cuando:
- quieres ejecutar al menos una vez

### Usa `foreach` cuando:
- recorres arreglos o listas

---

## 8. Ejercicio mental

¿Qué imprime este código?

```php
<?php

for ($i = 1; $i <= 4; $i++) {
    echo "Iteración $i\n";
}
```

Respuesta:

```text
Iteración 1
Iteración 2
Iteración 3
Iteración 4
```

---

## 9. Reto final

Crear un programa que:

- muestre los números del 1 al 10
- sume todos esos números
- muestre el resultado final

Este ejercicio te ayudará a entender mejor cómo funcionan los bucles en la práctica.

---

## Resumen

Los bucles permiten repetir tareas automáticamente.

- `for` = cuando sabes cuántas veces
- `while` = mientras se cumpla una condición
- `do while` = al menos una vez
- `foreach` = recorrer arreglos

El siguiente paso es practicar con ejercicios reales.
