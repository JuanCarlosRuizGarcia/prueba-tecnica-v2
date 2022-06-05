# Ejecucion aplicativo

para poder hacer uso de la pagina realizada se debe tener los siguientes items

**Instalacion**
- Laragon

Descargar e instalar Laragon, dirijirse a la siguiente url para descargalo https://laragon.org/download/index.html

una vez instalado laragon traera un paquete de software necesario para su utilizacion y adicionalmente nos creara host virtuales, ubicar los proyectos en la carpeta www

**Carpeta**
- C:\laragon\www

descargar el repositorio dentro de la carpeta www, luego  abrir el panel de Laragon y dar click en Iniciar Todo esperar a que inicie los servidor

**Base de datos**
Abrir la base de datos en mysql y ejecutar el scripts base-de-datos-prueba-tecnica-dev.sql o importar el archivo sql en un gestor de base de datos heidiSQL o phpMyAdmin o el de su preferencia

revisar que se haya creado la base de datos prueba_tecnica_dev junto con las tablas, relaciones e insercion de datos una vez completado esa parte

abrir el proyecto en el IDE de su preferencia ya sea Sublime Text, Visual Studio Code, PhpStorm, etc

**IDE**
Una vez seleccionado el IDE de su preferencia ubicar el archivo .env, se encontrara con la siguiente seccion 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=root
DB_USERNAME=root
DB_PASSWORD=root

modificarlo de la siguiente manera 

**DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_tecnica_dev
DB_USERNAME=root
DB_PASSWORD=**

colocar password si lo tiene configurado con contraseña, si no lo tiene dejarlo en blanco

**Laragon**
abrir el panel de laragon, dar click en Terminal o presionar las teclas  (CTRL + ALT + T) se le presentara la siguiente interfaz **control de cuentas de Usuario** dar click en si, dirigir a la carpeta del proyecto y digitar el siguiente comando 

**Ejemplo**
Carpeta o proyecto **blog**
C:\laragon\www\blog


 **Comando** php artisan serve
 
 **Aplicacion**
 copiar la url en el navegador de su preferencia y pegarla, ahi otra forma de ver la pagina y es colocar el nombre del proyecto seguido de .test
 
 **Ejemplo**
C:\laragon\www\blog => en el navegador colocamos el blog.test haciendo referencia a blog como proyecto

C:\laragon\www\relaciones => relaciones.test

Realizado este punto ya puede hacer uso del proyecto realizado
