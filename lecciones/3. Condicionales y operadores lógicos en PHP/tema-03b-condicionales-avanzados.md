# Tema 3B: Condicionales avanzados en PHP

## Objetivo de aprendizaje

Ampliar la lógica de decisiones con estructuras más complejas, validaciones empresariales y uso combinado de condiciones para resolver problemas reales.

## 1. Reforzando lo básico

Antes de entrar a temas más avanzados, es importante recordar esto:

- `=` sirve para asignar valores.
- `==` compara si dos valores son iguales.
- `===` compara si son iguales y del mismo tipo.

```php
$edad = 18;

if ($edad === 18) {
    echo "La edad es exactamente 18";
}
```

Esto es útil cuando quieres evitar errores por tipos de datos.

---

## 2. Condiciones compuestas

En la práctica no siempre se evalúa una sola condición. Muchas veces necesitas combinar varias reglas.

### Operador `&&` (AND)

```php
$edad = 22;
$esEstudiante = true;

if ($edad >= 18 && $esEstudiante) {
    echo "Puede aplicar a un descuento estudiantil";
}
```

Aquí ambas condiciones deben cumplirse.

### Operador `||` (OR)

```php
$esEmpleado = false;
$esInvitado = true;

if ($esEmpleado || $esInvitado) {
    echo "Tiene acceso";
}
```

Aquí basta con que una de las condiciones sea verdadera.

### Operador `!` (NOT)

```php
$activo = false;

if (!$activo) {
    echo "El sistema está inactivo";
}
```

`!` invierte el valor booleano.

---

## 3. Condiciones anidadas

A veces una decisión depende de otra decisión previa.

```php
$edad = 25;
$esSocio = true;

if ($edad >= 18) {
    if ($esSocio) {
        echo "Puede acceder a la membresía premium";
    } else {
        echo "Puede acceder como usuario normal";
    }
} else {
    echo "Debes ser mayor de edad";
}
```

Esto se conoce como condicional anidado. Es correcto, pero cuando se vuelve más complejo, conviene usar `elseif` para mantener el código más claro.

---

## 4. `elseif` para decisiones múltiples

Cuando hay varias posibilidades, `elseif` mejora la claridad.

```php
$nota = 3.8;

if ($nota >= 4.5) {
    echo "Excelente";
} elseif ($nota >= 3.0) {
    echo "Aprobado";
} elseif ($nota >= 2.0) {
    echo "Debe recuperar";
} else {
    echo "Reprobado";
}
```

La estructura se evalúa en orden. Cuando una condición es verdadera, PHP sale de esa cadena y no revisa las siguientes.

---

## 5. Validaciones con datos reales

Estos patrones se usan mucho en formularios, compras, accesos y reportes.

### Ejemplo: restricción de acceso

```php
$usuario = "admin";
$password = "1234";

if ($usuario === "admin" && $password === "1234") {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}
```

### Ejemplo: descuento según compra

```php
$cantidad = 7;
$precio = 50000;

$subtotal = $cantidad * $precio;

if ($cantidad >= 5) {
    $descuento = $subtotal * 0.20;
    echo "Tienes 20% de descuento";
} elseif ($cantidad >= 3) {
    $descuento = $subtotal * 0.10;
    echo "Tienes 10% de descuento";
} else {
    $descuento = 0;
    echo "Sin descuento";
}

$total = $subtotal - $descuento;
echo "Total a pagar: $" . $total;
```

---

## 6. Uso de comparaciones en casos reales

Los comparadores son la base para tomar decisiones.

### Ejemplo: buscar si un valor está dentro de un rango

```php
$edad = 18;

if ($edad >= 18 && $edad <= 65) {
    echo "Puede participar en la promoción";
}
```

### Ejemplo: validar si un número es positivo

```php
$numero = -5;

if ($numero > 0) {
    echo "Es positivo";
} elseif ($numero < 0) {
    echo "Es negativo";
} else {
    echo "Es cero";
}
```

---

## 7. Importancia de la lógica y la legibilidad

Cuando escribes condiciones más complejas, lo más importante es que el código sea fácil de leer.

### Buenas prácticas

- Usa nombres descriptivos: `$esMayorDeEdad`, `$tieneEntrada`.
- Mantén una sola lógica por bloque.
- Evita condiciones demasiado largas.
- Divide la problematica en pasos simples.
- Usa `elseif` si hay varias decisiones.

---

## 8. Errores frecuentes en lógica condicional

### 1. Usar `=` en vez de `==`

```php
if ($edad = 18) {
    echo "Esto es incorrecto";
}
```

Esto asigna `18` a `$edad` y la condición se evalúa como verdadera siempre.

### 2. Confundir `&&` con `||`

- `&&` exige que todo sea verdadero.
- `||` exige solo que una condición se cumpla.

### 3. Olvidar la prioridad de las condiciones

Cuando combinan varias condiciones, conviene dividirlas o usar paréntesis para dar claridad.

```php
if (($edad >= 18 && $tieneEntrada) || $esInvitado) {
    echo "Puede entrar";
}
```

---

## 9. Ejercicios avanzados

### Ejercicio 1: Validación de acceso

1. Declara `$usuario`, `$password` y `$rol`.
2. Si el usuario es `admin` y la contraseña es `1234`, muestra "Acceso total".
3. Si el usuario es `editor` y la contraseña es `abcd`, muestra "Acceso parcial".
4. En cualquier otro caso, muestra "Acceso denegado".

### Ejercicio 2: Compras con reglas

1. Declara `$cantidad`, `$precioUnitario`, `$esClienteVip`.
2. Calcula el subtotal.
3. Si el cliente es VIP, aplica 15% de descuento.
4. Si compra más de 4 unidades, aplica 10% adicional.
5. Muestra el total final.

### Ejercicio 3: Evaluación y clasificación

1. Declara `$nota`.
2. Si la nota es mayor o igual a `4.8`, muestra "Excelente".
3. Si es mayor o igual a `4.0`, muestra "Muy bien".
4. Si es mayor o igual a `3.0`, muestra "Aprobado".
5. Si es menor, muestra "Necesita reforzar".

### Ejercicio 4: Rango de edad

1. Declara `$edad`.
2. Si la edad está entre `18` y `25`, muestra "Joven".
3. Si está entre `26` y `60`, muestra "Adulto".
4. Si es mayor a `60`, muestra "Adulto mayor".
5. Si es menor a `18`, muestra "Menor de edad".

### Ejercicio 5: Descuento según tipo de pago

1. Declara `$monto`, `$tipoPago`.
2. Si el pago es `efectivo`, aplica 5% de descuento.
3. Si es `tarjeta`, aplica 2% de descuento.
4. Si es `transferencia`, aplica 8% de descuento.
5. Muestra el total final.

---

## 10. Reto final

Crea una pequeña lógica para una tienda online que:

- pida el total de compra,
- determine si el cliente tiene tarjeta VIP,
- determine si compra más de 3 productos,
- aplique descuento del 15% si tiene VIP,
- aplique 10% adicional si compra más de 3 productos,
- muestre el total final.

---

## 11. Resultado esperado

Al finalizar este tema avanzado deberías ser capaz de:

- combinar varias condiciones correctamente,
- usar `elseif` para decisiones complejas,
- aplicar lógica realista a compras, accesos y validaciones,
- escribir código más claro y mejor estructurado.

## 12. Siguiente paso

Cuando termines estos ejercicios, el siguiente paso natural será introducirte a los bucles (`for`, `while`) y a la repetición de tareas en PHP.
