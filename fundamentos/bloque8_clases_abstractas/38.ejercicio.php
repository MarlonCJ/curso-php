<?php


abstract class Mensajes {

    // $nombre; // esto no se peede hacer siempre tiene que tener una visibilidad en php en cualquier tipo clase

    abstract public function enviar();
}


class MensajeWhatsapp extends Mensajes {

    public function enviar(){
        return 'Enviando whatsapp';
    }

}

class MensajeSMS extends Mensajes {

    public function enviar(){
        return 'Enviando SMS';
    }

    public function enviar1() {
        return 'Enviando SMS';
    }
}


$mensajes = [
    new MensajeWhatsapp(),
    new MensajeSMS()
];


foreach ($mensajes as $mensaje){
    echo $mensaje -> enviar() . "\n";
}