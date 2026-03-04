<?php

declare(strict_types=1);

class CuentaBancaria
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldoInicial)
    {
        if ($saldoInicial < 0) {
            throw new Exception("El saldo inicial no puede ser negativo.");
        }

        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $monto): void
    {
        if ($monto <= 0) {
            throw new Exception("El monto a depositar debe ser mayor a 0.");
        }

        $this->saldo += $monto;
    }

    public function retirar(float $monto): void
    {
        if ($monto <= 0) {
            throw new Exception("El monto a retirar debe ser mayor a 0.");
        }

        if ($monto > $this->saldo) {
            throw new Exception("Saldo insuficiente.");
        }

        $this->saldo -= $monto;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}


// ==============================
// USO CON TRY / CATCH
// ==============================

try {

    $cuenta = new CuentaBancaria("Marlonete", 1000);

    $cuenta->depositar(500);
    $cuenta->retirar(2000); // Esto provocará una excepción

    echo "Saldo actual: " . $cuenta->getSaldo();

} catch (Exception $e) {

    // echo "Error: " . $e->getMessage();
    error_log($e->getMessage());
    echo "Ocurrió un error. Intente nuevamente.";

}



// echo "\nEl programa continúa ejecutándose.";


// 🧠 Ahora sí: Explicación profesional
// 1️⃣ ¿Qué es throw?

// Cuando escribimos:

// throw new Exception("Saldo insuficiente.");

// Estamos diciendo:

// “Detén la ejecución normal y lanza un error controlado.”

// Sin try/catch, el programa se detendría y mostraría un error fatal.

// 2️⃣ ¿Qué hace try?

// El bloque try es donde colocamos el código que puede fallar.

// try {
//     // Código riesgoso
// }

// Aquí ponemos operaciones que podrían lanzar excepciones.

// 3️⃣ ¿Qué hace catch?

// El bloque catch captura la excepción y evita que el programa muera.

// catch (Exception $e) {
//     echo $e->getMessage();
// }

// $e es el objeto Exception que contiene:

// El mensaje

// El archivo

// La línea

// El stack trace

// 🔥 Flujo real del programa

// Se ejecuta retirar(2000)

// Se detecta saldo insuficiente

// Se ejecuta throw new Exception(...)

// PHP salta inmediatamente al catch

// Se muestra el mensaje

// El programa continúa

// ⚠️ ¿Qué pasa si NO usamos try/catch?

// El programa termina abruptamente.

// En producción eso es inaceptable.

// En sistemas reales:

// No puedes permitir que la app muera.

// Debes capturar errores y reaccionar.

// 🏗 Cuándo se usa try/catch en la vida real

// Se usa cuando trabajas con:

// Conexiones a base de datos (PDO)

// Archivos

// APIs externas

// Validaciones críticas

// Operaciones financieras

// Autenticación

// Procesos que no deben romper la aplicación

// 🎯 Buenas prácticas profesionales

// ✔ No usar try/catch para lógica normal
// ✔ Solo usarlo cuando realmente puede fallar algo crítico
// ✔ No ocultar errores silenciosamente
// ✔ Siempre mostrar mensaje controlado o registrar en logs

// Ejemplo profesional real:

// catch (Exception $e) {
//     error_log($e->getMessage());
//     echo "Ocurrió un error. Intente nuevamente.";
// }

// Así no expones información sensible.

// 🚨 Error común de juniors

// Hacer esto:

// catch (Exception $e) {
// }

// Eso es gravísimo.

// Estás ocultando errores.
// Es peligroso y dificulta depuración.

// 🧩 Relación con POO

// Las excepciones hacen que tus clases sean:

// Más limpias

// Más seguras

// Más profesionales

// Más predecibles

// Sin excepciones, tus métodos tendrían que devolver:

// true/false

// null

// strings de error

// Eso es diseño pobre comparado con lanzar excepciones.

// 🎓 Nivel actual tuyo

// Ya estás listo para:

// Crear excepciones personalizadas

// Manejar múltiples catch

// Entender finally

// Usar try/catch en PDO

// Pero primero quiero confirmar algo contigo: