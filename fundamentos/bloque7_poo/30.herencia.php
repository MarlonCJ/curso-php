<?php

/*
HERENCIA (EL SIGUIENTE NIVEL DE POO)

Aquí empiezas a reutilizar código de forma inteligente, exactamente como lo hace WordPress.

1️⃣ ¿QUÉ ES HERENCIA?

👉 Una clase puede heredar propiedades y métodos de otra

Ejemplo mental:

Clase padre: Usuario

Clase hija: Admin

El Admin ES un Usuario, pero con más capacidades.

2️⃣ CLASE PADRE

*/

class Usuario {

    protected $nombre;
    protected $rol;

    public function __construct($nombre, $rol) {
        
        $this -> nombre = $nombre;
        $this -> rol = $rol;
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getRol() {
        return $this -> rol;
    }

}

/*
📌 Observa:

Usamos protected → pensado para herencia

Constructor base

Métodos reutilizables

3️⃣ CLASE HIJA (extends)

*/

class Admin extends Usuario {

    public function tieneAccesoTotal() {
        return true;
    }
}

// 👉 extends = hereda todo lo del padre

$admin = new Admin('Marlon', 'admin');

echo $admin -> getNombre();
echo '<br>';

if ($admin -> tieneAccesoTotal()){
    echo 'Acceso Total';
}

/*
✔ No repetiste código
✔ Reutilizaste lógica
✔ Diseño limpio

👉 Esto es arquitectura, no solo código.

5️⃣ ¿POR QUÉ protected Y NO private?

private ❌ → solo la clase

protected ✅ → clase + hijas

📌 WordPress usa esto MUCHO.

6️⃣ ERROR COMÚN (EVÍTALO)

❌ Duplicar clases
❌ Copiar y pegar código
❌ No usar herencia cuando corresponde

Un buen diseño reduce código, no lo aumenta.

🧠 LO QUE ACABAS DE APRENDER

✔ Herencia
✔ extends
✔ Clases padre / hijas
✔ Uso correcto de protected
✔ Diseño escalable
*/