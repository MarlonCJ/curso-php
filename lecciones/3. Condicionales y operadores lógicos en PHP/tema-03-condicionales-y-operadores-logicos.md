# Tema 3: Condicionales y operadores lógicos en PHP

## Objetivo de aprendizaje

Aprender a tomar decisiones dentro de un programa usando comparaciones, valores booleanos y estructuras condicionales como `if`, `else` y `elseif`.

## 1. ¿Qué es una condición?

Una condición permite evaluar si algo es verdadero o falso y, según el resultado, ejecutar una parte del código u otra.

Por ejemplo:

```php
$edad = 20;

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}
```

Cuando una comparación se evalúa, PHP devuelve un valor booleano:

- `true` → verdadero
- `false` → falso

---

## 2. Diferencia entre asignación y comparación

Este detalle es muy importante y suele confundirse al inicio.

### Asignación

```php
$edad = 18;
```

`=` significa: "guardar este valor en la variable".

### Comparación

```php
$edad == 18
```

`==` significa: "comparar si el valor es igual a 18".

### Comparación estricta

```php
$edad === 18
```

`===` significa: "comparar si el valor es igual a 18 y además el tipo de dato coincide".

### Ejemplo

```php
$edad = "18";

var_dump($edad == 18);    // true
var_dump($edad === 18);   // false
```

Esto ocurre porque `"18"` es un texto y `18` es un número.

---

## 3. Operadores de comparación

| Operador | Significado |
| --- | --- |
| `==` | Igual en valor |
| `===` | Igual en valor y tipo |
| `!=` | Diferente en valor |
| `!==` | Diferente en valor o tipo |
| `>` | Mayor que |
| `<` | Menor que |
| `>=` | Mayor o igual que |
| `<=` | Menor o igual que |

### Ejemplo

```php
$nota = 4.5;

if ($nota >= 3.0) {
    echo "Aprobaste";
} else {
    echo "Reprobaste";
}
```

---

## 4. Operadores lógicos

Los operadores lógicos permiten combinar varias condiciones.

| Operador | Nombre | Significado |
| --- | --- | --- |
| `&&` | AND | Las dos condiciones deben ser verdaderas |
| `||` | OR | Al menos una debe ser verdadera |
| `!` | NOT | Invierte el valor booleano |

### Ejemplo con `&&`

```php
$edad = 20;
$esEstudiante = true;

if ($edad >= 18 && $esEstudiante) {
    echo "Puede acceder al descuento";
}
```

### Ejemplo con `||`

```php
$esEmpleado = false;
$esInvitado = true;

if ($esEmpleado || $esInvitado) {
    echo "Tiene acceso";
}
```

### Ejemplo con `!`

```php
$estaActivo = false;

if (!$estaActivo) {
    echo "El sistema está inactivo";
}
```

---

## 5. Estructuras condicionales

### `if`

```php
if ($edad >= 18) {
    echo "Mayor de edad";
}
```

### `if ... else`

```php
if ($edad >= 18) {
    echo "Mayor de edad";
} else {
    echo "Menor de edad";
}
```

### `if ... elseif ... else`

```php
if ($nota >= 4.5) {
    echo "Excelente";
} elseif ($nota >= 3.0) {
    echo "Aprobado";
} else {
    echo "Reprobado";
}
```

---

## 6. Valores booleanos

En PHP, los valores booleanos son:

```php
true
false
```

También es importante saber que algunos valores se consideran verdaderos o falsos en condiciones.

```php
if (1) {
    echo "Esto se ejecuta";
}

if (0) {
    echo "Esto no se ejecuta";
}
```

Sin embargo, para mantener el código claro, es mejor escribir condiciones comparando valores explícitamente.

---

## 7. Buenas prácticas

- Usa `===` cuando compares un valor con un número o un texto y quieres evitar errores de tipo.
- Escribe condiciones legibles: `if ($edad >= 18)` es más claro que `if ($edad > 17)`.
- Guarda resultados de comparación en variables descriptivas.
- Usa comentarios para explicar cada regla de negocio.

---

## 8. Errores comunes

- Usar `=` en vez de `==` o `===`.
- Confundir `&&` con `||`.
- Olvidar los paréntesis en condiciones complejas.
- Escribir comparaciones sin pensar en el tipo de dato.
- Usar demasiadas condiciones sin separar la lógica en pasos claros.

---

## 9. Ejercicio práctico

Crea un archivo llamado `condicionales.php` y resuelve los siguientes ejercicios. Escribe comentarios para separar cada bloque.

### Ejercicio 1: Mayor de edad

1. Declara `$edad`.
2. Comprueba si la persona es mayor o igual a `18`.
3. Muestra un mensaje según el resultado.

### Ejercicio 2: Número par o impar

1. Declara `$numero`.
2. Comprueba si el número es par.
3. Muestra el resultado con un mensaje claro.

### Ejercicio 3: Acceso a un evento

1. Declara `$edad` y `$tieneEntrada`.
2. Comprueba si la persona puede entrar.
3. La persona puede entrar si es mayor o igual a `18` y tiene entrada.

### Ejercicio 4: Evaluación académica

1. Declara `$nota`.
2. Muestra si el estudiante:
   - está excelente si la nota es `>= 4.5`
   - aprobado si la nota es `>= 3.0`
   - reprobado si es menor a `3.0`

### Ejercicio 5: Login básico

1. Declara `$usuario` y `$password`.
2. Verifica si el usuario es `admin` y la contraseña es `1234`.
3. Muestra un mensaje de acceso correcto o incorrecto.

### Reto avanzado

Crea una pequeña regla de negocio para una tienda:

- Si compra más de `3` productos, aplica descuento del `10%`.
- Si compra más de `5`, aplica descuento del `20%`.
- Muestra el total final a pagar.

---

## 10. Resultado esperado

Al terminar este tema deberías poder:

- comprender qué devuelve una comparación,
- usar `if`, `else` y `elseif` correctamente,
- combinar condiciones con `&&`, `||` y `!`,
- evitar errores comunes entre `=` y `==`.

## 11. Siguiente paso

Cuando termines los ejercicios, compárteme tu archivo `condicionales.php` para revisarlo y darte una calificación del tema.
