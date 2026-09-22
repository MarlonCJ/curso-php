# Tema 2: Operadores aritméticos y comparación en PHP

## Objetivo de aprendizaje

Al finalizar este tema podrás realizar cálculos con variables y comparar valores para tomar decisiones básicas dentro de un programa PHP.

## Conceptos fundamentales

Un **operador** es un símbolo que indica a PHP qué operación debe realizar con uno o más valores.

Los valores sobre los que actúa un operador se llaman **operandos**. Por ejemplo, en `$precio * $cantidad`, el operador es `*` y los operandos son `$precio` y `$cantidad`.

En este tema estudiaremos dos grupos:

- **Operadores aritméticos:** permiten hacer cálculos.
- **Operadores de comparación:** permiten comprobar la relación entre dos valores y producen un resultado lógico.

## Explicación paso a paso

### 1. Operadores aritméticos

| Operador | Operación | Ejemplo | Resultado |
| --- | --- | --- | --- |
| `+` | Suma | `10 + 5` | `15` |
| `-` | Resta | `10 - 5` | `5` |
| `*` | Multiplicación | `10 * 5` | `50` |
| `/` | División | `10 / 5` | `2` |
| `%` | Módulo o residuo | `10 % 3` | `1` |

El operador `%` devuelve el residuo de una división. Es especialmente útil para saber si un número es par: un número es par si el residuo de dividirlo entre `2` es `0`.

### 2. Guardar resultados en variables

Normalmente no mostramos una operación directamente. Primero guardamos el resultado en una variable para poder reutilizarlo, revisarlo y hacer el código más fácil de entender.

```php
$precio = 25000;
$cantidad = 3;
$subtotal = $precio * $cantidad;
```

### 3. Orden de las operaciones

PHP sigue el orden matemático habitual: primero multiplicaciones y divisiones; luego sumas y restas. Usa paréntesis cuando quieras indicar un orden específico.

```php
$promedio = ($nota1 + $nota2 + $nota3) / 3;
```

Sin los paréntesis, solo la última nota se dividiría entre `3`, y el promedio sería incorrecto.

### 4. Operadores de comparación

Una comparación siempre devuelve un valor booleano:

- `true`: verdadero.
- `false`: falso.

| Operador | Significado | Ejemplo |
| --- | --- | --- |
| `==` | Igual en valor | `$edad == 18` |
| `===` | Igual en valor y tipo | `$edad === 18` |
| `!=` | Diferente en valor | `$edad != 18` |
| `>` | Mayor que | `$edad > 18` |
| `<` | Menor que | `$edad < 18` |
| `>=` | Mayor o igual que | `$edad >= 18` |
| `<=` | Menor o igual que | `$edad <= 18` |

Para empezar, recuerda una diferencia importante: `=` asigna un valor a una variable; `==` y `===` comparan valores.

## Código explicado

### Sintaxis

```php
<?php

$resultadoSuma = $numero1 + $numero2;
$resultadoResta = $numero1 - $numero2;
$esMayorDeEdad = $edad >= 18;
```

### Ejemplo básico: calcular una suma

```php
<?php

$numero1 = 10;
$numero2 = 5;

$suma = $numero1 + $numero2;

echo "La suma es: " . $suma;
```

En este ejemplo, PHP suma los valores de `$numero1` y `$numero2`, guarda el resultado en `$suma` y finalmente lo muestra.

### Ejemplo intermedio: calcular un promedio

```php
<?php

$nota1 = 4.0;
$nota2 = 3.5;
$nota3 = 4.5;

$sumaNotas = $nota1 + $nota2 + $nota3;
$promedio = $sumaNotas / 3;

echo "El promedio es: " . $promedio;
```

Separar el cálculo en `$sumaNotas` y `$promedio` mejora la legibilidad: cada variable tiene una responsabilidad clara.

### Ejemplo aplicado a un proyecto real: tienda virtual

```php
<?php

$nombreProducto = "Teclado mecánico";
$precioProducto = 85000;
$cantidad = 2;
$porcentajeDescuento = 10;

$subtotal = $precioProducto * $cantidad;
$valorDescuento = $subtotal * $porcentajeDescuento / 100;
$totalPagar = $subtotal - $valorDescuento;

echo "Producto: " . $nombreProducto . "<br>";
echo "Subtotal: $" . $subtotal . "<br>";
echo "Descuento: $" . $valorDescuento . "<br>";
echo "Total a pagar: $" . $totalPagar;
```

Este mismo patrón se usa en sistemas de comercio electrónico, facturación y puntos de venta: calcular subtotal, descuentos, impuestos y total final.

### Ejemplo de comparación

```php
<?php

$edad = 20;
$esMayorDeEdad = $edad >= 18;

echo $esMayorDeEdad;
```

Como el resultado de la comparación es `true`, PHP mostrará `1`. Más adelante utilizaremos condicionales para mostrar mensajes claros como “Sí” o “No”.

## Resultado esperado

Para el ejemplo de la tienda virtual, el resultado será similar a este:

```text
Producto: Teclado mecánico
Subtotal: $170000
Descuento: $17000
Total a pagar: $153000
```

## Buenas prácticas

- Usa nombres descriptivos, como `$totalPagar`, en lugar de nombres genéricos como `$x`.
- Guarda los resultados intermedios, por ejemplo `$subtotal` y `$valorDescuento`.
- Usa paréntesis para hacer claras las fórmulas complejas.
- Mantén el porcentaje como número entero, por ejemplo `10`, y divídelo entre `100` durante el cálculo.
- No compares valores usando solo `=`; ese operador asigna y puede causar errores lógicos.

## Errores comunes

- Confundir `=` con `==` o `===`.
- Calcular un descuento sin dividir el porcentaje entre `100`.
- Olvidar los paréntesis al calcular promedios.
- Dividir entre cero.
- Usar una variable antes de asignarle un valor.
- Concatenar texto y números sin usar el operador `.` dentro de `echo`.

## Ejercicio

Crea el archivo `lecciones/operadores.php` y resuelve los siguientes ejercicios. Escribe comentarios para separar cada ejercicio.

### Ejercicio 1: Operaciones básicas

1. Declara dos variables numéricas: `$numero1` y `$numero2`.
2. Calcula suma, resta, multiplicación, división y residuo.
3. Muestra cada resultado con una etiqueta clara.

### Ejercicio 2: Compra con descuento

1. Declara `$precioProducto`, `$cantidad` y `$porcentajeDescuento`.
2. Calcula el subtotal.
3. Calcula el valor del descuento.
4. Calcula el total a pagar.
5. Muestra todos los valores en pantalla.

### Ejercicio 3: Promedio académico

1. Declara tres notas entre `0.0` y `5.0`.
2. Calcula la suma de las notas.
3. Calcula el promedio.
4. Muestra el promedio con un mensaje descriptivo.

### Ejercicio 4: Comparaciones

1. Declara una variable `$edad`.
2. Guarda en `$esMayorDeEdad` el resultado de comprobar si la edad es mayor o igual a `18`.
3. Declara una variable `$numero`.
4. Guarda en `$esPar` el resultado de comprobar si su residuo al dividir entre `2` es igual a `0`.
5. Muestra ambos resultados.

### Reto avanzado: cálculo de factura

Simula una factura de una tienda. Declara el precio, la cantidad, el porcentaje de descuento y el porcentaje de IVA. Calcula, en este orden:

1. Subtotal.
2. Descuento.
3. Subtotal con descuento aplicado.
4. IVA sobre el subtotal con descuento.
5. Total final a pagar.

Usa variables separadas para cada resultado. No necesitas resolverlo ahora si aún no te sientes listo.

## Solución (solo cuando la solicites)

Cuando termines los ejercicios, compárteme el contenido de `operadores.php` o escribe “listo para revisar”. Evaluaré tu código, explicaré cada corrección y te daré una calificación sobre 10.
