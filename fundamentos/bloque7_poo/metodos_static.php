<?php


// METODOS STATIC

// 1️⃣ Concepto fundamental
// 2️⃣ Cómo funcionan internamente
// 3️⃣ Diferencia entre método normal y static
// 4️⃣ Cuándo usarlos profesionalmente
// 5️⃣ Ejemplo real aplicado a validaciones
// 6️⃣ Buenas prácticas
// 7️⃣ Errores comunes
// 8️⃣ Ejercicios para practicar

// 1. Concepto fundamental de métodos static

// Un método estático pertenece a la clase y no a un objeto.

// En POO normalmente haces esto:

// $producto = new Producto();
// $producto->mostrar();

// Aquí necesitas crear una instancia del objeto.

// Con un método static no necesitas crear objeto.

// Se llama directamente desde la clase:

// Validador::nombre("Laptop");

// La llamada usa el operador:

// ::

// Este operador se llama:

// Scope Resolution Operator

// 2. Ejemplo básico de método static

// Primero veamos el código completo.

// <?php

// class Matematica {

//     public static function sumar(int $a, int $b): int {
//         return $a + $b;
//     }

// }

// $resultado = Matematica::sumar(10, 5);

// echo $resultado;

// Salida:

// 15
// 3. Explicación paso a paso
// La clase
// class Matematica

// Es simplemente un contenedor de lógica.

// El método static
// public static function sumar(int $a, int $b)

// La palabra clave static significa:

// Este método pertenece a la clase y no necesita instancia.

// La llamada
// Matematica::sumar(10,5);

// Aquí estamos llamando el método directamente desde la clase.

// No hicimos esto:

// $mat = new Matematica();
// 4. Diferencia entre método normal y static
// Método normal
// class Usuario {

//     public function saludar() {
//         return "Hola";
//     }

// }

// Uso:

// $usuario = new Usuario();
// echo $usuario->saludar();
// Método static
// class Utilidades {

//     public static function saludar() {
//         return "Hola";
//     }

// }

// Uso:

// echo Utilidades::saludar();
// 5. Regla profesional para usar static

// Un método debe ser static cuando:

// ✔ No usa $this
// ✔ No depende del estado del objeto
// ✔ Es reutilizable
// ✔ Es lógica utilitaria

// Ejemplos reales:

// validaciones
// formateo de strings
// cálculos
// helpers
// 6. Ejemplo profesional: clase Validador

// Código completo.

// <?php

// class Validador {

//     public static function nombre(string $nombre): string {

//         if(trim($nombre) === ''){
//             throw new Exception("Nombre inválido");
//         }

//         return $nombre;
//     }

//     public static function precio(float $precio): float {

//         if($precio <= 0){
//             throw new Exception("Precio inválido");
//         }

//         return $precio;
//     }

// }

// Uso en una clase:

// class Producto {

//     private string $nombre;
//     private float $precio;

//     public function __construct(string $nombre, float $precio)
//     {
//         $this->nombre = Validador::nombre($nombre);
//         $this->precio = Validador::precio($precio);
//     }

// }
// 7. Por qué esto es una buena arquitectura

// Sin clase Validador terminarías repitiendo:

// validarNombre
// validarPrecio

// en muchas clases:

// Producto
// Usuario
// Empleado
// Pedido
// Factura

// Con static centralizas todo:

// Validador::nombre()
// Validador::precio()
// Validador::email()
// Validador::telefono()

// Esto evita duplicación de código.

// 8. Limitación importante de métodos static

// Dentro de un método static no puedes usar $this.

// Esto es incorrecto:

// public static function ejemplo(){

//    $this->nombre;
// }

// Porque $this representa el objeto actual.

// Y en métodos static no existe objeto.

// 9. Propiedades static

// También existen propiedades static.

// Ejemplo:

// class Config {

//     public static string $app = "Sistema ERP";

// }

// Uso:

// echo Config::$app;

// Observa la diferencia:

// ->   acceso a objeto
// ::   acceso a clase
// 10. Ejemplos reales en frameworks

// Frameworks modernos usan mucho esto.

// Laravel:

// Str::slug()
// Str::uuid()
// Validator::make()
// Carbon::now()

// Esto es exactamente el mismo concepto.

// 11. Buenas prácticas con static

// ✔ Usar static para utilidades
// ✔ No abusar de static en lógica compleja
// ✔ Usarlo para validaciones
// ✔ Mantener métodos pequeños

// 12. Error común de principiantes

// Usar static cuando el método necesita estado del objeto.

// Ejemplo incorrecto:

// public static function mostrar(){

//    return $this->nombre;
// }

// Esto rompe la lógica de POO.

// 13. Ejercicio práctico (importante)

// Quiero que hagas este ejercicio.

// Crea una clase:

// UtilidadesTexto

// Con tres métodos static:

// Método 1
// limpiarEspacios()

// Debe usar trim().

// Método 2
// contarCaracteres()

// Debe usar strlen().

// Método 3
// esEmailValido()

// Debe usar filter_var().

// Luego úsalo así:

// UtilidadesTexto::limpiarEspacios("   hola   ");
// UtilidadesTexto::contarCaracteres("PHP");
// UtilidadesTexto::esEmailValido("correo@test.com");


declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',1);


class UtilidadesTexto {

    public static function limpiarEspacios($texto):string{
        return trim($texto);
    }   

    public static function contarCaracteres($contar):int{
        return strlen($contar);
    }

    public static function esEmailValido($email):string{
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return "Email valido";
        }else{
            throw new Exception('Email invalido');
        }
    }
}

try{
    echo UtilidadesTexto::limpiarEspacios(" hola ").PHP_EOL;
    echo UtilidadesTexto::contarCaracteres("PHP").PHP_EOL;
    echo UtilidadesTexto::esEmailValido("marlon.edinsoncj@gmail.com").PHP_EOL;
}catch(Exception $e){
    echo "Error: ". $e->getMessage();
}