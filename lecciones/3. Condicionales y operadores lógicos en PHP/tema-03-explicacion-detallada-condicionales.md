# Tema 3: Condicionales y operadores lógicos en PHP

## Objetivo

Aprender a tomar decisiones en un programa con PHP usando comparaciones, operadores lógicos y estructuras condicionales.

Cuando programamos, muchas veces necesitamos resolver preguntas como:

- ¿La persona es mayor de edad?
- ¿El número es par o impar?
- ¿El usuario y la contraseña son correctos?
- ¿La nota permite aprobar?

Todo eso se hace con condiciones.

---

## 1. ¿Qué es una condición?

Una condición es una expresión que PHP evalúa como verdadera o falsa. Según el resultado, ejecuta una parte del código u otra.

```php
<?php

$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}
```

### Explicación

- `$edad >= 18` es la condición
- si devuelve `true`, se ejecuta el bloque `if`
- si devuelve `false`, se ejecuta el bloque `else`

---

## 2. Diferencia entre asignación y comparación

Es muy importante no confundirse.

### Asignación

```php
$edad = 18;
```

El símbolo `=` asigna un valor a la variable.

### Comparación

```php
$edad == 18
```

El símbolo `==` compara si dos valores son iguales.

### Comparación estricta

```php
$edad === 18
```

El símbolo `===` compara si son iguales y además del mismo tipo.

### Ejemplo

```php
<?php

$valor1 = "18";
$valor2 = 18;

var_dump($valor1 == $valor2);   // true
var_dump($valor1 === $valor2);  // false
```

### ¿Por qué pasa esto?

Porque:

- `"18"` es un texto
- `18` es un número

`==` compara solo el valor, mientras que `===` compara también el tipo.

---

## 3. Operadores de comparación

| Operador | Significado |
| --- | --- |
| `==` | Igual en valor |
| `===` | Igual en valor y tipo |
| `!=` | Diferente |
| `!==` | Diferente en valor o tipo |
| `>` | Mayor que |
| `<` | Menor que |
| `>=` | Mayor o igual |
| `<=` | Menor o igual |

### Ejemplo

```php
<?php

$nota = 4.8;

if ($nota >= 4.5) {
    echo "Excelente";
} else {
    echo "No es excelente";
}
```

---

## 4. Valores booleanos

Las condiciones siempre devuelven valores booleanos:

- `true`
- `false`

```php
<?php

$esMayor = true;
$esMenor = false;

var_dump($esMayor);
var_dump($esMenor);
```

---

## 5. Operadores lógicos

Los operadores lógicos permiten combinar varias condiciones.

### 5.1 AND: `&&`

```php
<?php

$edad = 22;
$tieneEntrada = true;

if ($edad >= 18 && $tieneEntrada) {
    echo "Puede entrar al evento.";
} else {
    echo "No puede entrar al evento.";
}
```

Aquí se necesitan dos condiciones verdaderas al mismo tiempo.

### 5.2 OR: `||`

```php
<?php

$esEmpleado = false;
$esInvitado = true;

if ($esEmpleado || $esInvitado) {
    echo "Tiene acceso.";
} else {
    echo "No tiene acceso.";
}
```

Con `||`, basta con que una sea verdadera.

### 5.3 NOT: `!`

`!` niega un valor booleano.

```php
<?php

$estaActivo = false;

if (!$estaActivo) {
    echo "El sistema está inactivo.";
}
```

Cuando `$estaActivo` es `false`, `!$estaActivo` se vuelve `true`.

---

## 6. Estructuras condicionales

### 6.1 `if`

```php
<?php

$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad.";
}
```

### 6.2 `if ... else`

```php
<?php

$edad = 17;

if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}
```

### 6.3 `if ... elseif ... else`

```php
<?php

$nota = 4.2;

if ($nota >= 4.5) {
    echo "Excelente.";
} elseif ($nota >= 3.0) {
    echo "Aprobado.";
} else {
    echo "Reprobado.";
}
```

Esto sirve cuando hay más de dos posibilidades.

---

## 7. Ejemplo práctico 1: mayor de edad

```php
<?php

$edadUsuario = 17;

if ($edadUsuario >= 18) {
    echo "El usuario es mayor de edad.";
} else {
    echo "El usuario es menor de edad.";
}
```

---

## 8. Ejemplo práctico 2: número par o impar

```php
<?php

$numero = 13;

if ($numero % 2 == 0) {
    echo "El número es par.";
} else {
    echo "El número es impar.";
}
```

### ¿Qué hace `% 2`?

El operador `%` devuelve el residuo de la división.

- `10 % 2 = 0` → par
- `13 % 2 = 1` → impar

---

## 9. Ejemplo práctico 3: acceso a un evento

```php
<?php

$edadEvento = 21;
$tieneEntrada = true;

if ($edadEvento >= 18 && $tieneEntrada) {
    echo "Puede entrar al evento.";
} else {
    echo "No puede entrar al evento.";
}
```

---

## 10. Ejemplo práctico 4: login básico

```php
<?php

$usuario = "admin";
$password = "1234";

if ($usuario == "admin" && $password == "1234") {
    echo "Acceso correcto.";
} else {
    echo "Acceso incorrecto.";
}
```

---

## 11. Buenas prácticas

- Usa nombres de variables claros: `$edad`, `$nota`, `$usuario`
- Escribe condiciones fáciles de leer
- Usa `===` cuando quieres comparar valor y tipo
- No confundas `=` con `==` o `===`
- Prueba diferentes valores para ver cómo cambia el resultado

---

## 12. Errores comunes

### Error 1: usar `=` en lugar de `==`

```php
if ($edad = 18) {
    echo "Esto no compara, solo asigna.";
}
```

Esto asigna `18` a `$edad` y la condición se evalúa como `true`.

### Error 2: mezclar `&&` con `||`

```php
if ($edad >= 18 || $tieneEntrada) {
```

Esto significa que basta con que una sea verdadera.

### Error 3: no considerar el tipo de dato

```php
$numero = "18";

if ($numero == 18) {
    echo "Coinciden";
}
```

Aquí `==` devuelve `true`, pero `===` no lo haría.

---

## 13. Resumen

En PHP, los condicionales sirven para tomar decisiones.

### Estructura general

```php
if (condicion) {
    // código si es verdadero
} else {
    // código si es falso
}
```

### Operadores principales

- `==` compara valores
- `===` compara valor y tipo
- `&&` las dos condiciones deben ser verdaderas
- `||` al menos una debe ser verdadera
- `!` niega una condición

---

## 14. Idea clave del tema

Piensa en una condición como una pregunta:

- ¿Es mayor de edad?
- ¿El número es par?
- ¿Tiene entrada?
- ¿La nota aprueba?

Si la respuesta es sí, hace una acción. Si es no, hace otra.

Eso es la lógica condicional en programación.
