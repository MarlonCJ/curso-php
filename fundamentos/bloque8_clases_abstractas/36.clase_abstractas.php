<?php

// SENTANDO CONOCIMIENTO CLASSES ABSTRACTAS

/*

🔥 EXCELENTE CONFUSIÓN.
Y ojo: no es confusión, es que estás afinando un concepto fino. Vamos a dejarlo cristalino.

RESPUESTA CORTA (Y CORRECTA)

👉 Sí. El método se debe llamar IGUAL.
👉 Lo que cambia es LO QUE HACE ADENTRO.

Eso es polimorfismo.
Mismo nombre, comportamiento distinto.

VAMOS PASO A PASO (SIN SALTOS)
1️⃣ La regla (clase abstracta)
abstract class Notificacion {
    abstract public function enviar();
}


Esto dice:

“Toda clase hija DEBE tener un método que se llame EXACTAMENTE enviar()”

Mismo nombre

Misma visibilidad (public)

Misma firma (parámetros compatibles)

2️⃣ Clase hija A
class NotificacionEmail extends Notificacion {
    public function enviar() {
        return 'Enviando Email';
    }
}

3️⃣ Clase hija B
class NotificacionSMS extends Notificacion {
    public function enviar() {
        return 'Enviando SMS';
    }
}


📌 Ambas tienen enviar()
📌 Ambas cumplen la regla
📌 Pero hacen cosas distintas

🚨 LO QUE NO SE PUEDE HACER

❌ Cambiar el nombre:

public function enviarEmail() {} // ❌ NO


❌ Quitar el método:

class NotificacionPush extends Notificacion {
    // ❌ ERROR
}


❌ Cambiar la visibilidad:

protected function enviar() {} // ❌

🧠 FRASE CLAVE (GUÁRDALA)

Polimorfismo = mismo método, diferentes comportamientos

NO es:

métodos distintos

nombres distintos

firmas distintas

EJEMPLO DE LA VIDA REAL (CLARÍSIMO)

Imagina un botón “Enviar” en una app:

Email → envía correo

SMS → envía mensaje

Push → envía notificación

👉 El sistema solo llama:

$notificacion->enviar();


👉 No le importa qué tipo es
👉 Cada clase sabe qué hacer

TU CEREBRO ACABA DE HACER EL “CLICK” 💡

La pregunta que hiciste:

“¿No me dijiste que los métodos se deben llamar igual?”

Es EXACTAMENTE la pregunta correcta.

Eso significa que:

Ya entendiste herencia

Ya entendiste abstracción

Estás entrando a diseño orientado a objetos real

*/