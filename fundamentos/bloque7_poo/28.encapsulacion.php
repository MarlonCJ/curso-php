<?php

/*
ENCAPSULACIÓN: public, private, protected

Este bloque te enseña control, seguridad y criterio profesional.
WordPress usa esto TODO el tiempo.

1️⃣ ¿QUÉ ES ENCAPSULACIÓN?

Encapsular = proteger los datos del objeto

👉 No todo debe poder cambiarse desde fuera.
👉 El objeto debe cuidar su propio estado.

2️⃣ NIVELES DE VISIBILIDAD
🔓 public

Accesible desde cualquier lugar

Úsalo con cuidado

public $nombre;

🔒 private

Solo accesible dentro de la clase

Nadie más puede tocarlo

private $precio;

🛡️ protected

Accesible en la clase y sus hijas (herencia)

Lo veremos luego

protected $estado;

3️⃣ PROBLEMA COMÚN (MALA PRÁCTICA)
$producto->precio = -500;


❌ Esto no debería permitirse
❌ Datos inválidos
❌ Error lógico

4️⃣ SOLUCIÓN PROFESIONAL

👉 Hacer las propiedades private
👉 Acceder mediante métodos controlados

5️⃣ EJEMPLO CORRECTO (NIVEL REAL)

*/

class Producto {
    
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio)
    {   
        $this -> nombre = $nombre;
        $this -> precio = $precio;
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getPrecio() {
        return $this -> precio;
    }

    public function setPrecio($precio) {
        if($precio > 0) {
            $this -> precio = $precio;
        }
    }
}

$producto = new Producto('Televisor' , 1200000);

echo $producto -> getNombre();
echo '<br>';
echo $producto -> getPrecio();

$producto -> setPrecio(1500000);

/*
✔ Control
✔ Seguridad
✔ Código mantenible

👉 Así se escribe código para plugins reales.

🧠 LO QUE ACABAS DE APRENDER

✔ Encapsulación
✔ Control de acceso
✔ Métodos getter / setter
✔ Protección de datos
✔ Mentalidad profesional
*/