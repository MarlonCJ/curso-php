<?php


// 1. Qué es parent::

// parent:: permite llamar un método de la clase padre desde la clase hija.

// Se usa cuando:

// sobrescribes un método (overriding)

// pero quieres reutilizar parte de la lógica del padre

// Es decir:

// No reemplazas todo el método, solo lo amplías.

// Ejemplo completo

declare(strict_types=1);

class Usuario
{
    protected string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function mostrarInfo(): string
    {
        return "Usuario: {$this->nombre}";
    }
}

class UsuarioAdmin extends Usuario
{
    public function mostrarInfo(): string
    {
        return parent::mostrarInfo() . " | Rol: Administrador";
    }
}

$usuario = new Usuario("Carlos");
$admin = new UsuarioAdmin("Marlon");

echo $usuario->mostrarInfo() . PHP_EOL;
echo $admin->mostrarInfo() . PHP_EOL;


// Resultado
// Usuario: Carlos
// Usuario: Marlon | Rol: Administrador

// 2. Qué ocurre internamente

// Clase padre:

// Usuario
//  └ mostrarInfo()

// Clase hija:

// UsuarioAdmin
//  └ mostrarInfo()
//       ↓
//   llama a parent::mostrarInfo()

// Flujo:

// UsuarioAdmin::mostrarInfo()
//        ↓
// parent::mostrarInfo()
//        ↓
// se ejecuta método del padre

// Luego el hijo agrega más información.

// 3. Sin parent::

// Si no usaras parent::, tendrías que duplicar código:

// public function mostrarInfo(): string
// {
//     return "Usuario: {$this->nombre} | Rol: Administrador";
// }

// Eso es mala práctica, porque:

// duplicas lógica

// si el método del padre cambia, debes modificar muchos lugares

// 4. Visualización clara
// Usuario
//  └ mostrarInfo()
//       ↓
// UsuarioAdmin
//  └ mostrarInfo()
//       ↓
//  parent::mostrarInfo()
// 5. Cuándo usar parent::

// Se usa cuando:

// el padre ya hace parte del trabajo

// la clase hija solo agrega comportamiento

// Ejemplo real:

// Vehiculo
//  └ encender()

// Carro
//  └ encender()
//       ↓
//  parent::encender()
//       ↓
//  activar aire acondicionado
// 6. Ejemplo un poco más realista
// 
class Vehiculo
{
    public function encender(): string
    {
        return "El vehículo se encendió";
    }
}

class Carro extends Vehiculo
{
    public function encender(): string
    {
        return parent::encender() . " y el carro está listo para conducir";
    }
}


// Ejercicio rápido (importante)

// Crea este sistema:

// Clase padre
// Persona

// Propiedad:

// nombre

// Método:

// presentarse()

// Debe devolver:

// Hola soy Carlos
// Clase hija
// Estudiante

// Sobrescribir método:

// presentarse()

// Debe usar parent:: y devolver:

// Hola soy Carlos y soy estudiante


class Persona {

    protected string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function presentarse():string{
        return "Hola soy {$this->nombre}";
    }

}


class Estudiante extends Persona {

    public function presentarse(): string
    {
        return parent::presentarse() . " y soy estudiante";
    }

}

$estudiante = new Estudiante('Carlos');
echo $estudiante->presentarse().PHP_EOL;