# Tema 1: Introducción a PHP y variables

## Objetivo de aprendizaje

Comprender qué es PHP, cómo se ejecuta y cómo guardar información usando variables.

## 1. Explicación conceptual sencilla

PHP es un lenguaje de programación usado principalmente para crear la parte lógica de sitios y sistemas web. Con PHP podemos recibir datos de formularios, validar usuarios, guardar productos, calcular valores y consultar bases de datos.

Una variable es un espacio con nombre donde guardamos un dato que puede cambiar durante la ejecución de un programa.

## 2. Explicación técnica profesional

PHP se ejecuta en el servidor web, por ejemplo Apache incluido en XAMPP. El navegador solicita un archivo `.php`; el servidor ejecuta sus instrucciones y devuelve al navegador el resultado, normalmente HTML.

Las variables en PHP comienzan con el símbolo `$`. PHP es de tipado dinámico: el tipo de dato se determina según el valor asignado. Los tipos más frecuentes son:

- `string`: texto, por ejemplo `"Ana"`.
- `int`: número entero, por ejemplo `20`.
- `float`: número decimal, por ejemplo `19.99`.
- `bool`: valor lógico: `true` o `false`.

## 3. Analogía de la vida real

Imagina una biblioteca. Cada casillero tiene una etiqueta, como “nombre” o “edad”, y dentro guarda un dato. Una variable funciona igual: `$nombre` es la etiqueta y `"Ana"` es el dato guardado.

## 4. Sintaxis

```php
<?php

$nombre = "Ana";
$edad = 20;
$activo = true;9

echo $nombre;
```

- `<?php` indica dónde comienza el código PHP.
- `$nombre` es una variable.
- `=` asigna un valor a una variable.
- `;` finaliza una instrucción.
- `echo` envía contenido al navegador.

## 5. Ejemplo básico

```php
<?php

$nombre = "Ana";

echo "Hola, " . $nombre . ".";
```

El operador `.` concatena, es decir, une textos.

Resultado esperado:

```text
Hola, Ana.
```

## 6. Ejemplo intermedio

```php
<?php

$nombre = "Ana";
$edad = 20;
$ciudad = "Bogotá";

echo "Hola, soy " . $nombre . ", tengo " . $edad . " años y vivo en " . $ciudad . ".";
```

## 7. Ejemplo aplicado a un proyecto real

En un sistema de ventas, los datos de un producto pueden guardarse temporalmente en variables antes de mostrarse o almacenarse en una base de datos.

```php
<?php

$nombreProducto = "Teclado mecánico";
$precio = 180000;
$disponible = true;

echo "Producto: " . $nombreProducto . "<br>";
echo "Precio: $" . $precio . "<br>";
echo "Disponible: " . ($disponible ? "Sí" : "No");
```

La expresión `condición ? valorSiVerdadero : valorSiFalso` se llama operador ternario. La estudiaremos en detalle más adelante.

## 8. Errores comunes

- Olvidar el signo `$`: `nombre = "Ana";` es incorrecto.
- Omitir el punto y coma: `$edad = 20` es incorrecto.
- Escribir una variable con diferente mayúscula: `$nombre` y `$Nombre` son variables distintas.
- Abrir el archivo PHP con doble clic. Debe abrirse mediante Apache, por ejemplo: `http://localhost/curso-php/hola.php`.

## 9. Buenas prácticas

- Usa nombres descriptivos: `$nombreCliente` es mejor que `$nc`.
- Para variables de varias palabras usa camelCase: `$precioTotal`.
- Conserva una sola responsabilidad por variable.
- Usa comillas dobles o simples de forma consistente para textos sencillos.
- Indenta el código para que sea fácil de leer.

## 10. Ejercicio para resolver

Crea un archivo llamado `hola.php` en la raíz del proyecto. Declara estas variables:

- `$nombre`
- `$edad`
- `$ciudad`

Luego muestra una frase con este formato:

```text
Hola, soy Ana, tengo 20 años y vivo en Bogotá.
```

Usa tus propios datos. No copies una solución: escríbela y compártela para revisión.

## 11. Reto avanzado (opcional)

Declara una variable `$anioActual` y otra `$anioNacimiento`. Calcula y muestra una edad aproximada restando ambos valores.

Pista: usa el operador aritmético `-`.
