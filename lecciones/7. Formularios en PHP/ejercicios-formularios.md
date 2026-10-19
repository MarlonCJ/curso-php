# Capítulo 1: Ejercicios de formularios HTML

Estos son enunciados para resolver, no una plantilla con respuestas. Este archivo
no contiene soluciones ni bloques de código. Responde en tus propias notas o crea
después tus documentos HTML cuando te lo indique; por ahora concéntrate en decidir
qué necesita cada formulario y por qué.

No uses PHP en este capítulo. Los ejercicios se revisarán antes de avanzar al
capítulo 2, donde aprenderás a recibir y procesar los datos con PHP.


---

## Ejercicio 1: Reconocer las partes de un formulario

Explica con tus palabras qué función cumplen estas partes: el formulario, la
etiqueta visible de un campo, la identificación del campo, el nombre del dato
enviado y el botón de envío.

Después explica por qué el texto de una etiqueta debe estar relacionado con el
campo que describe y qué diferencia hay entre una etiqueta visible y un texto de
ayuda dentro de un campo.


respuesta

el formulario es la etiqueta padre que encierra todos los input para poder enviar informacion.

label: esta etiqueta es descriptiva para el campo o input a utilizar, esto mejora la experiencia del usuario

id: es el identificador del campo , mediante este id podermo seleccionar ubicar rápidamente el campo, ademas de otras ventajes ejemplo, agregarle logica con javascript o estilos con css.

name: este atributo es importante, nos permite identificar la informacion que se esta enviado desde ese preciso campo, si el input no tiene name , la informacion o datos que se envien directamente desde el input no llegara a su destino


## Ejercicio 2: Elegir los controles apropiados

Para cada dato, elige qué control HTML sería más apropiado y explica tu elección:

1. Nombre y apellido.
2. Dirección de correo electrónico.
3. Contraseña.
4. Cantidad de productos, que debe ser un número entero entre 1 y 20.
5. Fecha de nacimiento.
6. Una descripción que puede ocupar varias líneas.
7. Una opción entre tres métodos de envío, de los que solo se puede elegir uno.
8. Varios idiomas que una persona puede seleccionar a la vez.
9. Un país elegido de una lista.

No escribas código: indica el tipo de control y la razón de cada decisión.

## Ejercicio 3: Diseñar un formulario de inscripción

Diseña en papel o como lista la estructura de un formulario para inscribirse a un
taller. Debe solicitar nombre, correo, fecha de nacimiento, modalidad (presencial
o virtual), temas de interés (se pueden elegir varios) y aceptación de las
condiciones.

Entrega una lista de campos que indique para cada uno:

- El texto que verá la persona.
- El tipo de control que usarías.
- Un nombre único para identificar el dato enviado.
- Si debería ser obligatorio y por qué.
- Las opciones o restricciones que tendría, si corresponde.

## Ejercicio 4: GET o POST

Indica qué método elegirías para cada situación y justifica brevemente tu respuesta:

1. Buscar productos por nombre.
2. Filtrar una lista por categoría para poder compartir el resultado mediante un enlace.
3. Enviar un mensaje de contacto.
4. Crear una cuenta con una contraseña.

Explica también por qué POST no equivale a cifrado ni debe considerarse una
protección suficiente para enviar información sensible.

## Ejercicio 5: Encontrar problemas de diseño

Un formulario de registro tiene cuatro campos, pero sus textos no indican cuál
campo corresponde a cada dato. Dos campos tienen el mismo nombre de envío, el
botón dice «Hacer clic» y una lista desplegable no tiene una opción inicial que
oriente a la persona.

Identifica al menos cuatro problemas y describe cómo mejorarías cada uno sin
escribir código.

## Ejercicio 6: Validación en el navegador

Propón qué campos deberían ser obligatorios en el formulario de inscripción del
ejercicio 3. Para los campos numéricos o de fecha, define límites razonables.
Explica qué ayuda aporta la validación del navegador y por qué no se debe asumir
que esas restricciones bastan para confiar en los datos recibidos.

## Reto final: Formulario de reserva

Planifica un formulario para reservar una cita que solicite datos de contacto,
servicio, fecha, horario preferido, modalidad y comentarios opcionales.

Presenta una tabla o lista con cada campo, su control, etiqueta, nombre de envío,
obligatoriedad y restricciones. Incluye una breve explicación del método de envío
que elegirías y de los datos que no deberían exponerse en la dirección.

---

## Lista de autoevaluación

Antes de entregar tus respuestas, comprueba que puedes:

- Diferenciar `id` y `name` y explicar para qué se usan.
- Relacionar cada control con una etiqueta clara.
- Elegir entre texto, correo, número, fecha, área de texto, casillas, botones de
  opción y lista desplegable.
- Distinguir cuándo tiene sentido GET y cuándo POST.
- Explicar qué aportan `required`, `min`, `max` y `step`, y cuáles son sus límites.
- Diseñar formularios comprensibles y utilizables con teclado.

Cuando tengas resueltos los ejercicios, comparte tus respuestas para que pueda
calificarlas y señalarte qué repasar. Después continuaremos con el capítulo 2:
procesamiento de formularios con PHP.
