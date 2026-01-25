<?php


class Notificacion {

    public function enviar() {
        return 'Enviando notificacion generica';
    }
}


class NotificacionEmail extends Notificacion {

    public function enviar() {
        return 'Enviando Email';
    }
}

class NotificacionSMS extends Notificacion {

    public function enviar() {

        return 'Enviando SMS';
    }
}

$notificaciones = [
    new Notificacion(),
    new NotificacionEmail(),
    new NotificacionSMS()
];

foreach ($notificaciones as $notificacion) {
    echo $notificacion -> enviar() . '<br>';
}

/*
❓ QUÉ QUIERO QUE OBSERVES

    No hay if
    No preguntas “qué tipo es”
    Llamas siempre a enviar()

PHP elige solo el comportamiento

👉 Eso es el objetivo real.

*/