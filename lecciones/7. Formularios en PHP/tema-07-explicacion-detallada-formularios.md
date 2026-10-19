# Tema 7 — Capítulo 1: Formularios HTML (sin PHP)

## Objetivo del capítulo

Aprender a planificar, crear y probar formularios usando HTML, sin escribir PHP.
Al terminar podrás elegir controles adecuados para distintos datos, asociar
etiquetas correctamente, entender cómo el navegador envía los campos y reconocer
las limitaciones de la validación que ocurre en el navegador.

El tema se dividirá en dos capítulos:

1. **Capítulo 1 (este capítulo):** estructura y comportamiento de formularios HTML.
2. **Capítulo 2 (después de revisar tus ejercicios):** cómo recibe PHP los datos,
   cómo validarlos y cómo responder de forma segura.

Por ahora no necesitas XAMPP, Apache ni PHP: puedes abrir
[`ejemplos-formularios.html`](./ejemplos-formularios.html) en un navegador. El
archivo solo permite observar el comportamiento de los controles; no almacena ni
procesa los datos en un servidor.

---

## 1. ¿Qué es un formulario?

Un formulario es una parte de una página web que permite a una persona introducir
o seleccionar datos y enviarlos. Se usa para búsquedas, registros, reservas,
encuestas y mensajes de contacto.

El navegador presenta los controles y, al enviar el formulario, reúne los valores
que correspondan y los manda a un destino. El navegador no decide qué hará ese
destino con los datos: para procesarlos, guardarlos o usarlos se necesita una
aplicación o servicio en el servidor. Eso lo estudiaremos en el capítulo 2.

---

## 2. Estructura y atributos esenciales

El elemento `form` agrupa los controles que pertenecen a un mismo envío. Sus
atributos más importantes son:

- **`action`:** indica a qué dirección se envían los datos. Si se deja vacío o se
  omite, normalmente se envían a la dirección de la página actual.
- **`method`:** indica cómo se envían. Los valores habituales son `get` y `post`.
- **`name`:** se coloca en cada control que debe aportar un dato al envío. Es el
  nombre con el que el servidor podrá identificar ese dato.

Los atributos `id` y `name` no son lo mismo:

- `id` identifica un elemento en la página y permite asociarlo con su etiqueta.
- `name` identifica el dato al enviarlo. Sin `name`, normalmente el valor de un
  control no se incluye en el envío.

Los nombres deben ser claros y los valores de `id` deben ser únicos en la página.
Si un campo tiene `id` pero no `name`, puede verse y utilizarse en la página,
pero su valor no se envía como campo del formulario. Si dos controles comparten
un nombre, sus valores pueden llegar agrupados o resultar ambiguos para quien
procese los datos; usa nombres adecuados al caso.

---

## 3. Etiquetas y accesibilidad

Cada campo debe tener una etiqueta visible que explique qué dato se espera. Una
etiqueta asociada permite que las tecnologías de asistencia identifiquen el
control y, al pulsar el texto, suele activar o enfocar el campo correspondiente.

Hay dos formas habituales de asociarla:

1. La etiqueta hace referencia al `id` del control mediante `for`.
2. El control está contenido dentro de su etiqueta.

En ambos casos, el texto de la etiqueta debe describir el dato, por ejemplo,
«Correo electrónico». No uses el `placeholder` como única etiqueta: puede
desaparecer al escribir, tener poco contraste y no siempre se anuncia de forma
clara.

Buenas prácticas:

- Escribe instrucciones directas y etiquetas comprensibles.
- Agrupa preguntas relacionadas con `fieldset` y describe el grupo con `legend`.
- No comuniques que un campo es obligatorio únicamente mediante un color.
- Mantén un orden de lectura y navegación lógico para quienes usan teclado.

---

## 4. Controles más comunes

### Texto corto

`input` con `type="text"` sirve para nombres, ciudades y otros textos breves.
Usa `type="email"` para direcciones de correo y `type="password"` para una
contraseña que no deba mostrarse mientras se escribe. El control de contraseña
solo oculta visualmente los caracteres: no cifra ni protege por sí mismo el dato.

### Número y fecha

`type="number"` es apropiado para cantidades numéricas. `type="date"` permite
seleccionar una fecha con la interfaz que ofrece el navegador. Para números
puedes definir límites con `min` y `max`, y el incremento permitido con `step`.
El formato y la presentación pueden variar entre navegadores y dispositivos.

No elijas un campo numérico solo porque un dato contenga dígitos: teléfonos,
códigos postales y números de cuenta suelen ser identificadores, no cantidades
para calcular. Un campo de texto puede ser más apropiado.

### Texto de varias líneas

`textarea` sirve para comentarios, mensajes y descripciones extensas. Puede
tener un tamaño inicial visible, pero quien escribe puede necesitar más espacio.

### Opciones

- **`select`** presenta una lista desplegable. Cada opción debe tener un valor
  entendible para la aplicación. Una opción inicial como «Selecciona un tema»
  ayuda a evitar una elección accidental.
- **Botones de opción (`radio`)** sirven cuando se elige una sola opción de un
  grupo. Comparten el mismo `name` y cada opción tiene un `value` distinto.
- **Casillas (`checkbox`)** sirven para aceptar algo o seleccionar varias
  opciones. Para opciones distintas, cada dato debe poder identificarse. Una
  casilla desmarcada normalmente no se envía como un dato marcado.

### Botones

- **Enviar (`submit`):** envía el formulario.
- **Restablecer (`reset`):** devuelve los controles a sus valores iniciales; úsalo
  con cuidado, porque puede borrar lo que la persona ya completó.
- **Botón normal (`button`):** no envía el formulario por sí solo; normalmente se
  combina con JavaScript, que no forma parte de este capítulo.

Declara explícitamente el tipo de botón. Así evitas que un botón pensado para otra
acción envíe accidentalmente el formulario.

---

## 5. Valores, instrucciones y campos obligatorios

Estos atributos afectan lo que una persona ve o cómo interactúa con un control:

- **`value`:** define el valor inicial o el valor asociado a una opción.
- **`placeholder`:** muestra una sugerencia breve dentro de algunos controles;
  no reemplaza una etiqueta ni un valor enviado.
- **`required`:** indica al navegador que el campo debe completarse antes del envío.
- **`min`, `max` y `step`:** describen límites e incrementos para ciertos tipos.
- **`minlength` y `maxlength`:** permiten establecer longitudes para algunos textos.
- **`checked` o `selected`:** marcan una opción inicialmente.
- **`disabled`:** desactiva un control; los controles deshabilitados generalmente
  no se envían.
- **`readonly`:** impide editar ciertos valores, pero no equivale a seguridad: el
  navegador y los datos enviados pueden manipularse.

Una sugerencia inicial solo debe aparecer cuando tenga sentido. Evita precargar
datos que la persona podría enviar sin revisar.

---

## 6. Qué información se envía

Al enviarse un formulario, el navegador incluye los controles que tienen un
nombre y están habilitados, junto con sus valores. Los controles vacíos pueden
enviarse con un valor vacío; las casillas desmarcadas normalmente no se incluyen.
Los botones también pueden aportar su valor según cuál se haya usado para enviar.

Por esta razón, pensar los nombres y valores es parte del diseño, aunque la
persona que completa el formulario no siempre los vea. Los nombres deben
describir el dato y los valores de opciones deben distinguir una selección de otra.

---

## 7. Métodos GET y POST

### GET

GET suele colocar los valores enviados en la dirección como parámetros. Es
conveniente para consultas que no cambian datos, como búsquedas y filtros:
pueden guardarse en favoritos y compartirse mediante un enlace. La dirección
puede quedar visible en el historial, registros y otros lugares.

No uses GET para contraseñas ni datos privados. Además, las direcciones tienen
límite práctico de longitud y pueden ser compartidas accidentalmente.

### POST

POST envía los valores en el cuerpo de la solicitud en lugar de agregarlos como
parámetros a la dirección. Se usa habitualmente para registros, mensajes y
operaciones que envían datos más extensos.

POST **no cifra** ni vuelve privados los datos por sí solo. Para protegerlos
durante el tránsito se necesita HTTPS, y la aplicación del servidor debe
validarlos y manejarlos correctamente.

Elegir un método no implementa el procesamiento: el destino indicado por `action`
debe ser capaz de recibir la solicitud. Sin ese destino, un formulario solo
demuestra la interacción del navegador.

---

## 8. Validación del navegador y sus límites

El navegador puede ayudar a evitar errores comunes antes del envío. Por ejemplo,
`required` puede impedir el envío de un campo vacío, `type="email"` puede advertir
sobre un formato de correo que parece incorrecto, y los límites numéricos pueden
restringir los valores introducidos desde la interfaz.

Esta validación mejora la experiencia, pero no es una barrera de seguridad ni
una garantía. Una solicitud puede enviarse sin usar el formulario, y un cliente
puede modificar los controles. Por eso, el servidor también debe validar los
datos. Aprenderemos esa parte en el capítulo 2 con PHP.

---

## 9. Errores frecuentes

- Olvidar `name` y preguntarse por qué el dato no se envía.
- Confundir `id` con `name`.
- Reutilizar un mismo `id` para varios controles.
- Dejar campos sin etiquetas claras o usar solo `placeholder`.
- Usar radio cuando se deben elegir varias opciones, o casillas cuando solo se
  debe elegir una.
- Considerar que `required` o cualquier otra validación HTML impide que lleguen
  datos incorrectos al servidor.
- Pensar que POST cifra los datos.
- Esperar que el navegador guarde o procese los datos sin un destino que lo haga.

---

## 10. Cómo estudiar y probar

1. Lee [`ejemplos-formularios.html`](./ejemplos-formularios.html) en el navegador.
2. Prueba los controles y observa la diferencia entre campos requeridos y opcionales.
3. Envía los formularios GET de ejemplo con datos inventados y observa la dirección.
4. Abre el archivo en un editor y relaciona cada elemento con las explicaciones
   de este capítulo.
5. Responde los enunciados de [`ejercicios-formularios.md`](./ejercicios-formularios.md)
   sin escribir PHP.

No introduzcas contraseñas ni datos personales en los ejemplos. Al terminar,
comparte tus respuestas a los ejercicios para recibir una calificación y
comentarios antes de avanzar.

---

## Resumen

- `form` agrupa los controles y define destino y método.
- `label` explica el campo; `id` lo identifica en la página y `name` identifica
  el dato enviado.
- Cada tipo de control responde a una necesidad diferente.
- GET suele servir para búsquedas compartibles; POST suele servir para enviar
  datos en el cuerpo de la solicitud, pero no cifra.
- La validación del navegador ayuda a la persona que completa el formulario,
  pero el servidor debe volver a validar.
- En el siguiente capítulo veremos cómo PHP recibe y procesa los datos.
