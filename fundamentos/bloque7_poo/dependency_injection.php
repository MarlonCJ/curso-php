<?php

// 📚 CLASE — DEPENDENCY INJECTION (DI) EN PHP

// Este concepto es usado en:

// Laravel

// Symfony

// WordPress moderno

// NestJS

// Spring

// Arquitectura limpia

// Cuando entiendes Dependency Injection, empiezas a escribir código flexible, escalable y profesional.

// 1️⃣ Qué es Dependency Injection

// Dependency Injection significa:

// Una clase recibe sus dependencias desde afuera en lugar de crearlas dentro de ella.

// Es decir:

// ❌ Mala práctica

// class Pedido {

//     public function pagar(){
//         $paypal = new Paypal();
//         $paypal->procesar();
//     }

// }

// El problema es que Pedido depende directamente de Paypal.

// Problema de ese diseño

// Si mañana quieres usar:

// Stripe
// MercadoPago
// PayU

// tendrías que modificar la clase Pedido.

// Eso rompe el principio:

// Open / Closed Principle

// 2️⃣ Solución con Interfaces + Dependency Injection

// Primero creamos un contrato.

// interface MetodoPago {

//     public function pagar(float $monto): string;

// }

// Implementaciones

// class Paypal implements MetodoPago {

//     public function pagar(float $monto): string {
//         return "Pago de {$monto} realizado con Paypal";
//     }

// }

// class Stripe implements MetodoPago {

//     public function pagar(float $monto): string {
//         return "Pago de {$monto} realizado con Stripe";
//     }

// }

// 3️⃣ Aplicando Dependency Injection

// Ahora la clase NO crea el objeto.

// Lo recibe.

// class Pedido {

//     private MetodoPago $metodoPago;

//     public function __construct(MetodoPago $metodoPago)
//     {
//         $this->metodoPago = $metodoPago;
//     }

//     public function procesarPago(float $monto): string
//     {
//         return $this->metodoPago->pagar($monto);
//     }

// }

// 4️⃣ Uso del sistema
// $paypal = new Paypal();
// $pedido = new Pedido($paypal);

// echo $pedido->procesarPago(100);

// Resultado:

// Pago de 100 realizado con Paypal
// Si cambiamos el método de pago
// $stripe = new Stripe();
// $pedido = new Pedido($stripe);

// echo $pedido->procesarPago(100);

// Resultado:

// Pago de 100 realizado con Stripe

// 5️⃣ Qué pasó aquí

// La clase Pedido no sabe qué sistema de pago usa.

// Solo sabe que el objeto cumple la interface:

// MetodoPago

// Esto es desacoplamiento.

// Arquitectura visual
// Pedido
//   │
//   │ usa
//   ↓
// MetodoPago (interface)
//    ↑
//  ┌─────────┐
// Paypal   Stripe

// 6️⃣ Beneficios del Dependency Injection

// 1️⃣ Código desacoplado

// Las clases no dependen de implementaciones concretas.

// 2️⃣ Sistema extensible

// Puedes agregar nuevas clases sin modificar el sistema.

// Ejemplo:

// MercadoPago
// PayU
// ApplePay

// 3️⃣ Código testeable

// Puedes usar mocks para pruebas.

// 7️⃣ Regla de oro

// Los sistemas profesionales dependen de:

// Interfaces

// no de

// Clases concretas

// 8️⃣ Ejemplo real (framework)

// En Laravel ocurre algo así:

// CacheInterface
//      ↑
// RedisCache
// FileCache
// DatabaseCache

// El sistema recibe:

// function guardar(CacheInterface $cache)

// No importa qué implementación uses.

// 🧠 Ejercicio de entrenamiento

// Crea este sistema:

// Interface
// Notificacion

// Método:

// enviar(string $mensaje)
// Clase 1
// EmailNotificacion

// Salida:

// Email enviado: mensaje
// Clase 2
// SMSNotificacion

// Salida:

// SMS enviado: mensaje
// Clase principal
// Alerta

// Debe recibir la notificación por Dependency Injection.

// Uso esperado
// $notificacion = new EmailNotificacion();
// $alerta = new Alerta($notificacion);

// echo $alerta->notificar("Sistema activo");


interface Notificacion {
    public function enviar(string $mensaje):string;
}

class EmailNotificacion implements Notificacion{

    public function enviar(string $mensaje):string{
        return "Email enviado: {$mensaje}";
    }

}

class SMSNotificacion implements Notificacion{

    public function enviar(string $mensaje):string{
        return "SMS enviado: {$mensaje}";
    }

}


class Alerta {
    
    private Notificacion $notificacion; 

    public function __construct(Notificacion $notificacion){
        $this->notificacion = $notificacion;
    }

    public function notificar(string $mensaje):string{
        return $this->notificacion->enviar($mensaje);
    }

}

// UNA FORMA

// $emailNotificacion = new EmailNotificacion();
// $alerta = new Alerta($emailNotificacion);

// echo $alerta->notificar('Hola mama').PHP_EOL;

// $SMSNotificacion = new SMSNotificacion();
// $alerta2 = new Alerta($SMSNotificacion);

// echo $alerta2->notificar('Hola papa').PHP_EOL;

// SEGUNDA FORMA

// $alertaEmail = new Alerta(new EmailNotificacion());
// echo $alertaEmail->notificar("Hola mamá").PHP_EOL;

// $alertaSMS = new Alerta(new SMSNotificacion());
// echo $alertaSMS->notificar("Hola papá").PHP_EOL;

// TERCERA FORMA

$notificaciones = [
    new EmailNotificacion(),
    new SMSNotificacion()
];

foreach ($notificaciones as $notificacion) {

    $alerta = new Alerta($notificacion);

    echo $alerta->notificar("Sistema activo") . PHP_EOL;
}