# Tema 7: Formularios en PHP

## Objetivo

Aprender a crear formularios HTML y procesar en PHP los datos que una persona envía mediante los métodos `GET` y `POST`.

Un formulario permite que el usuario envíe información a una página: por ejemplo, un nombre para mostrar un saludo o varios datos para hacer un cálculo.

---

## 1. Crear un formulario HTML

La etiqueta `<form>` agrupa los campos que se enviarán. Cada campo necesita un atributo `name`: ese nombre identifica el dato cuando PHP lo recibe.

```html
<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <button type="submit">Enviar</button>
</form>
```

El atributo `method` indica cómo se envían los datos. Si no especificas `action`, el formulario se envía a la misma página.

---

## 2. Recibir datos con `GET`

Con el método `GET`, los datos se agregan a la dirección de la página como parámetros. En PHP se leen desde el arreglo superglobal `$_GET`.

```php
<?php

if (isset($_GET["buscar"]) && is_string($_GET["buscar"])) {
    $busqueda = trim($_GET["buscar"]);
    echo "Buscaste: " . htmlspecialchars($busqueda, ENT_QUOTES, "UTF-8");
}
?>

<form method="get">
    <label for="buscar">Buscar:</label>
    <input type="text" id="buscar" name="buscar">
    <button type="submit">Buscar</button>
</form>
```

`isset()` permite comprobar si se recibió el parámetro, y `trim()` quita espacios al principio y al final del texto. `GET` es apropiado para búsquedas o filtros que se pueden compartir mediante una URL. No lo uses para enviar contraseñas ni información privada: los valores aparecen en la dirección.

---

## 3. Recibir datos con `POST`

Con `POST`, los datos no aparecen en la dirección de la misma forma. En PHP se leen desde el arreglo superglobal `$_POST`.

```php
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreRecibido = $_POST["nombre"] ?? "";
    $nombre = is_string($nombreRecibido) ? trim($nombreRecibido) : "";

    if ($nombre === "") {
        echo "Escribe tu nombre.";
    } else {
        echo "Hola, " . htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
    }
}
?>

<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <button type="submit">Saludar</button>
</form>
```

`$_SERVER["REQUEST_METHOD"]` indica el método usado para acceder a la página. El operador `??` proporciona un valor alternativo si la clave no existe; así se puede leer el dato sin provocar un aviso cuando la página se abre por primera vez.

`POST` es útil para enviar formularios con varios datos o información que no se quiere mostrar en la URL. No cifra los datos: para proteger la transmisión se necesita HTTPS.

---

## 4. Validar los datos recibidos

Los datos de un formulario deben comprobarse en el servidor. La validación hecha solo en HTML puede omitirse o modificarse.

```php
<?php

$edad = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($edad === false || $edad === null || $edad < 0) {
        echo "Escribe una edad válida.";
    } else {
        echo "Edad recibida: " . $edad;
    }
}
?>
```

Para campos de texto, puedes quitar espacios con `trim()` y comprobar si el resultado está vacío. Para números, valida que realmente sean del tipo esperado antes de usarlos en cálculos.

---

## 5. Mostrar texto de forma segura

Cuando muestres texto que viene del usuario dentro de una página HTML, pásalo por `htmlspecialchars()`:

```php
<?php

$comentario = $_POST["comentario"] ?? "";
if (is_string($comentario)) {
    echo htmlspecialchars($comentario, ENT_QUOTES, "UTF-8");
}
```

Esto evita que el texto se interprete como etiquetas o código HTML. La validación comprueba si un dato cumple las reglas de tu aplicación; `htmlspecialchars()` escapa el texto para mostrarlo dentro de HTML. Son tareas distintas.

---

## 6. Ejecutar una página con formularios

Los formularios con PHP deben probarse a través de un servidor web, no abriendo el archivo directamente ni ejecutándolo con `php archivo.php` en la terminal.

Si usas XAMPP:

1. Inicia Apache desde el panel de XAMPP.
2. Guarda el proyecto dentro de la carpeta `htdocs`.
3. Abre en el navegador la dirección local del archivo, por ejemplo: `http://localhost/curso-php/lecciones/7.%20Formularios%20en%20PHP/ejemplos-formularios.php`.
4. Envía el formulario y observa el resultado.

---

## 7. Buenas prácticas y errores comunes

- Asegúrate de que cada campo tenga un atributo `name`.
- Usa `$_GET` cuando el dato deba formar parte de una URL, como una búsqueda.
- Usa `$_POST` para los datos enviados en el cuerpo de una solicitud.
- Comprueba que los datos existan antes de utilizarlos.
- Valida los datos en PHP, aunque también uses atributos HTML como `required`.
- Escapa con `htmlspecialchars()` el texto recibido antes de mostrarlo en HTML.
- Recuerda que `POST` no cifra la información; usa HTTPS cuando corresponda.

---

## Resumen

- `<form>` agrupa los campos y el botón de envío.
- `name` identifica cada campo enviado.
- `GET` envía datos que se pueden leer en `$_GET` y aparecen en la URL.
- `POST` envía datos que se leen en `$_POST`.
- `isset()`, `??`, `trim()` y los filtros ayudan a comprobar y preparar los datos.
- Valida los datos en el servidor y escapa el texto con `htmlspecialchars()` antes de incluirlo en HTML.
- Para probar formularios PHP necesitas un servidor web como Apache en XAMPP.

Revisa `ejemplos-formularios.php` y completa `ejercicios-formularios.php` desde el navegador.
