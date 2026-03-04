<?php

// namespace: solo para aprender se esta utilizando en un solo archivo , pero en la vida real no se utiliza asi

// 🧠 ¿Qué cambió?

// Antes estabas usando:

// namespace App\Admin;

// Eso se llama namespace simple
// Y solo puedes usar UNO por archivo en ese formato.

// Cuando necesitas más de uno, debes usar:

// namespace App\Admin { ... }

// Eso se llama namespace con bloque.

// 📌 Regla Profesional

// En un archivo PHP:

// Forma	¿Permite múltiples namespaces?
// namespace X;	❌ No
// namespace X {}	✅ Sí
// 🚀 En la vida real

// Nunca se hace esto en un solo archivo.

// Cada clase va en su archivo:

// Admin/Usuario.php
// Cliente/Usuario.php

// Y el index solo instancia.

namespace App\Admin {

    class Usuario
    {
        public function obtenerTipo()
        {
            return "Soy un administrador";
        }
    }
}

namespace App\Cliente {

    class Usuario
    {
        public function obtenerTipo()
        {
            return "Soy un cliente";
        }
    }
}

namespace {

    $admin = new \App\Admin\Usuario();
    $cliente = new \App\Cliente\Usuario();

    echo $admin->obtenerTipo();
    echo "<br>";
    echo $cliente->obtenerTipo();
}