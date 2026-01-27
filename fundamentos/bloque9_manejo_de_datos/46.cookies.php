<?php

/*
🎯 ¿PARA QUÉ SIRVEN?

👉 Guardar datos en el navegador.

Ejemplos:

    - recordar usuario
    - preferencias
    - idioma

1️⃣ CREAR COOKIE

    setcookie('usuario', 'Marlon', time() + 3600);


📌 Dura 1 hora.

2️⃣ LEER COOKIE
    
    echo $_COOKIE['usuario'];

3️⃣ BORRAR COOKIE

    setcookie('usuario', '', time() - 3600);

🧠 SESSION vs COOKIE (CLAVE)

    Session	            Cookie

    Servidor	        Navegador
    Más segura	        Menos segura
    Login	            Preferencias

📌 Login = Session
📌 Recordar usuario = Cookie

*/
