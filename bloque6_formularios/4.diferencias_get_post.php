<?php

/*

TEMA 4 — Diferencias entre GET y POST (Nivel Profesional)

🎯 Objetivo del tema

Dominar cuándo usar GET y cuándo usar POST en escenarios reales de desarrollo web profesional.

Muchos principiantes aprenden la sintaxis, pero no la decisión técnica correcta.

🧠 Concepto Base

GET y POST son métodos HTTP usados para enviar información del navegador al servidor.

No son “iguales con nombres distintos”.
Cada uno tiene propósito técnico diferente.

🔥 Regla Profesional Rápida

Usa GET cuando quieras:

Consultar información
Buscar datos
Filtrar resultados
Navegar páginas
Compartir enlaces
Parámetros visibles

Usa POST cuando quieras:

Registrar datos
Modificar datos
Iniciar sesión
Enviar información privada
Procesar formularios reales

✅ Ejemplo GET Real

<form method="GET">
    <input type="text" name="buscar">
    <button type="submit">Buscar</button>
</form>

URL generada:

productos.php?buscar=laptop

Perfecto porque el usuario puede compartir la búsqueda.

✅ Ejemplo POST Real

<form method="POST">
    <input type="email" name="correo">
    <input type="password" name="clave">
    <button type="submit">Ingresar</button>
</form>

Ideal para login.

📊 Comparación Técnica Profesional

Criterio	                GET	            POST
Visible en URL	            Sí	            No
Ideal para búsquedas	    Sí	            No
Ideal para login	        No	            Sí
Compartir enlace	        Sí	            No
Modifica datos	            No recomendado	Sí
Marcadores del navegador	Sí	            No
SEO / indexable	            Sí, según caso	No

🧠 Casos Reales de Empresa

🛒 Ecommerce

Buscar productos
tienda.com/productos?categoria=zapatos

→ GET

Comprar producto
checkout

→ POST

🔐 Sistema de usuarios
Login

→ POST

Recuperar usuario por código en enlace
reset.php?token=abc123

→ GET para acceder al recurso

📈 Panel administrativo
Filtrar ventas por fecha

→ GET

Crear nueva venta

→ POST

⚠️ Error clásico de principiantes
❌ Usar GET para acciones críticas

eliminar.php?id=5

Eso puede ser peligroso si no se protege.

Mejor usar POST + validaciones + token CSRF.

🔍 Cómo decidir correctamente

Hazte esta pregunta:

¿Estoy consultando o cambiando algo?

Si consulto:

GET

Si cambio / guardo / envío:

POST

✅ Buenas Prácticas Profesionales

✔ GET para URLs limpias y filtros
?pagina=2&orden=precio

✔ POST para acciones sensibles

Registro, pagos, edición.

✔ Combinar ambos cuando conviene

Ejemplo:

GET para filtros
POST para guardar formulario

❌ Errores Comunes
❌ “POST es más seguro que GET”

No exactamente.

POST solo oculta de la URL. Seguridad real = HTTPS + validación + backend seguro.

❌ Todo hacerlo POST

Pierdes URLs compartibles y navegación limpia.

❌ Todo hacerlo GET

Expones datos y malas prácticas.

🧠 Ejemplo Mental Correcto

Buscar → GET
Login → POST
Filtrar → GET
Registrar → POST
Editar perfil → POST
Paginación → GET

📌 Lo que aprendiste hoy

✔ Diferencia real entre GET y POST
✔ Casos empresariales reales
✔ Cómo decidir técnicamente
✔ Errores comunes de juniors
✔ Buenas prácticas senior

*/