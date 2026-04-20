<?php

/*

📘 BLOQUE 4 — TEMA 15: CASOS REALES EMPRESARIALES CON FUNCIONES

🎯 Definición Profesional

En empresas, las funciones no se usan para ejemplos simples como “sumar 2 números”.

Se usan para resolver procesos reales:

Ventas
Usuarios
Seguridad
Reportes
Facturación
Integraciones
Automatización

Una aplicación profesional está compuesta por cientos o miles de funciones.

🏢 CASO 1: Login de Usuario

<?php

function validarLogin(string $correo, string $clave): bool {
    return $correo === "admin@mail.com" && $clave === "1234";
}

if (validarLogin("admin@mail.com", "1234")) {
    echo "Acceso permitido";
} else {
    echo "Acceso denegado";
}

Resultado:

Acceso permitido

🏢 CASO 2: Calcular Total de Compra

<?php

function calcularTotal(float $precio, int $cantidad): float {
    return $precio * $cantidad;
}

echo calcularTotal(25000, 3);

Resultado:
75000

🏢 CASO 3: Aplicar Descuento

<?php

function aplicarDescuento(float $total): float {
    return $total * 0.9;
}

echo aplicarDescuento(100000);

Resultado:

90000

🏢 CASO 4: Validar Edad

<?php

function esMayorDeEdad(int $edad): bool {
    return $edad >= 18;
}

echo esMayorDeEdad(20) ? "Sí" : "No";

Resultado:

Sí

🏢 CASO 5: Generar Nombre Completo
<?php

function nombreCompleto(string $nombre, string $apellido): string {
    return $nombre . " " . $apellido;
}

echo nombreCompleto("Carlos", "Gómez");

Resultado:
Carlos Gómez

🏢 CASO 6: Formatear Precio
<?php

function formatoCOP(float $valor): string {
    return "$ " . number_format($valor, 0, ',', '.');
}

echo formatoCOP(1500000);
Resultado:
$ 1.500.000

🏢 CASO 7: Verificar Stock

<?php

function hayStock(int $cantidad): bool {
    return $cantidad > 0;
}

echo hayStock(3) ? "Disponible" : "Agotado";

🏢 CASO 8: Enviar Mensaje Reutilizable
<?php

function alerta(string $mensaje): string {
    return "[ALERTA] " . $mensaje;
}

echo alerta("Pago rechazado");

📌 Lo que hacen las empresas bien

Separan cada proceso en funciones pequeñas:

validarUsuario();
calcularTotal();
guardarPedido();
enviarCorreo();
generarFactura();

Eso permite escalar sistemas enormes.

❌ Lo que hacen mal muchos juniors

function procesarTodo() {
   // 500 líneas mezcladas
}

Difícil mantener, probar y corregir.

✅ Buenas Prácticas Reales

Funciones orientadas al negocio.

Nombres claros.
Tipado.
Retornos útiles.
Reutilización.

🧠 Mentalidad Senior

No pienses “funciones para ejercicios”.

Piensa:

“¿Qué procesos del negocio puedo encapsular?”

Ahí comienza el nivel profesional.


*/