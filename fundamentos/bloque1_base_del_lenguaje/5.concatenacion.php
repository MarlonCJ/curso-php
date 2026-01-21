<?php

// 5. Concatenacion

$nombre = "Carlos";

echo "Hola" . $nombre;

// ❌ Error común:

// echo "Hola $nombre"; // funciona, pero mala práctica

// 📌 En plugins siempre concatenar explícitamente.