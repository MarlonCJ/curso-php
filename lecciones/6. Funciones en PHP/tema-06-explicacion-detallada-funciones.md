# Tema 6: Funciones en PHP

## Objetivo

Aprender a crear funciones para organizar el código, reutilizar instrucciones y obtener resultados.

Una función agrupa instrucciones bajo un nombre. Puedes ejecutarla cuando la necesites y, si hace falta, enviarle datos y recibir un resultado.

---

## 1. Crear y llamar una función

Se declara con la palabra `function`, un nombre y paréntesis. El código de la función se escribe entre llaves.

```php
<?php

function saludar()
{
    echo "Hola, bienvenido\n";
}

saludar();
```

La declaración define la función; la llamada, como `saludar();`, ejecuta su contenido. Puedes llamarla más de una vez.

---

## 2. Parámetros y argumentos

Los parámetros son variables que la función recibe. Los valores concretos que envías al llamarla se llaman argumentos.

```php
<?php

function saludarPersona($nombre)
{
    echo "Hola, $nombre\n";
}

saludarPersona("Ana");
saludarPersona("Luis");
```

Una función puede recibir varios parámetros:

```php
function mostrarSuma($numero1, $numero2)
{
    echo $numero1 + $numero2;
}

mostrarSuma(4, 6);
```

El orden de los argumentos corresponde al orden de los parámetros.

---

## 3. Devolver un valor con `return`

`return` entrega un resultado a quien llamó la función. No es lo mismo que `echo`: `echo` muestra texto; `return` permite guardar o utilizar el resultado.

```php
<?php

function sumar($numero1, $numero2)
{
    return $numero1 + $numero2;
}

$resultado = sumar(4, 6);
echo "La suma es: $resultado\n";
```

Después de ejecutar `return`, la función termina. Puedes usar el resultado directamente en una expresión:

```php
echo sumar(2, 3) . "\n";
```

---

## 4. Parámetros con valor predeterminado

Puedes asignar un valor predeterminado a un parámetro. Se utiliza cuando la llamada no proporciona un argumento para ese parámetro.

```php
<?php

function saludar($nombre = "invitado")
{
    echo "Hola, $nombre\n";
}

saludar();
saludar("Marta");
```

Los parámetros con valor predeterminado deben colocarse después de los parámetros obligatorios.

---

## 5. Tipos de parámetros y retorno

Puedes indicar qué tipo de valor espera un parámetro y qué tipo devuelve la función. Esto ayuda a expresar claramente cómo debe utilizarse.

```php
<?php

function duplicar(int $numero): int
{
    return $numero * 2;
}

echo duplicar(5) . "\n";
```

En este ejemplo, `int` indica que el parámetro y el resultado son enteros. Otros tipos comunes son `float`, `string` y `bool`.

---

## 6. Alcance de las variables

Una variable definida dentro de una función es local: solo existe dentro de esa función.

```php
<?php

function mostrarMensaje()
{
    $mensaje = "Este texto se creó dentro de la función";
    echo $mensaje . "\n";
}

mostrarMensaje();
```

Para compartir datos con una función, es preferible pasarlos como parámetros y devolver resultados con `return`, en vez de depender de variables globales.

---

## 7. Usar funciones con arreglos

Las funciones pueden recibir arreglos como argumentos y devolver valores calculados a partir de ellos.

```php
<?php

function contarProductos(array $productos): int
{
    return count($productos);
}

$productos = ["teclado", "mouse", "monitor"];
echo "Cantidad: " . contarProductos($productos) . "\n";
```

---

## 8. Buenas prácticas y errores comunes

- Elige nombres descriptivos, como `calcularTotal` o `mostrarProductos`.
- Haz que cada función tenga una responsabilidad clara.
- Usa parámetros para recibir los datos que necesita.
- Usa `return` cuando quieras que la función produzca un resultado.
- No olvides llamar la función después de declararla.
- Asegúrate de que todos los caminos de una función con tipo de retorno devuelvan un valor del tipo esperado.

---

## Resumen

- `function` declara una función.
- Los parámetros reciben datos y los argumentos son los valores que se envían al llamarla.
- `return` devuelve un resultado; `echo` muestra contenido.
- Los valores predeterminados permiten omitir algunos argumentos.
- Los tipos en parámetros y retorno documentan y restringen los datos esperados.
- Las variables creadas dentro de una función tienen alcance local.

Practica en el archivo `ejercicios-funciones.php` y compara tus resultados con los ejemplos de `ejemplos-funciones.php`.
