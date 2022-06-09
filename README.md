# gac-travel-tecnical-interview
Proyecto CRUD realizado con el framework Symfony en su versión 5.3.
La versión utilizada de PHP es la 8.1.4.
Basado en una pequeña api con la que realizaremos las operaciones básicas de inserción, modificación, y eliminación de registros en una base de datos mysql.
Contiene un pequeño sistema de autenticación de usuarios con hash de passwords y gestión de la sesión del usuario.
Utiliza el motor de plantillas twig, el ORM Doctrine y Bootstrap para framerowk CSS.
Tiene un pequeño firewall en el que se habilita cierto contenido de páginas sólo a usuarios que posean el rol ROLE_ADMIN.

Para arrancar el proyecto simplemente ejecute la instrucción symfony server:start dentro del directorio raíz y a continuación escriba en el navegador localhost:8000/login para acceder al formulario de login y poder crear usuarios para acceder.
