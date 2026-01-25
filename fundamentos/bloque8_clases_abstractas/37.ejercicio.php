<?php

abstract class Notificacion {

    protected $mensaje;

    public function __construct($mensaje) {
        $this->mensaje = $mensaje;
    }

    abstract public function enviar();

}

class NotificacionEmail extends Notificacion {

    public function enviar() {
        return 'Email: ' . $this->mensaje;
    }

}

$notificacion = new NotificacionEmail('Hola Marlon');
echo $notificacion->enviar();
