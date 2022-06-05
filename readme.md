# Guia de ejecucion del aplicativo

Para poder hacer uso de la pagina realizada se debe tener los siguientes items

## **Instalacion**

Descargar e instalar Laragon (Instale la version Full), dirijirse a la siguiente url para descargalo https://laragon.org/download/index.html

Una vez instalado laragon traera un paquete de software necesario para su utilizacion y adicionalmente nos creara host virtuales, los proyectos seran almacenamos en la carpeta www y se encuentran en la ruta:

- C:\laragon\www

Para dirigirse a la carpeta ejecute el siguiente comando

```bash
cd C:\laragon\www
```

Descargar el repositorio dentro de la carpeta www:

```bash
git clone https://github.com/JuanCarlosRuizGarcia/prueba-tecnica-v2.git
```

# **Ejecucion de Laragon**


Al ejecutar laragon veras un panel con varios botones en la parte inferior, haz clic en iniciar todo y se mostrara la interfaz de **control de cuentas de Usuario** y da clic en Si, tambien se mostrara una interfaz de permisos de firewall de le los permisos necesarios, asegurate que en el panel de laragon se vean todos los servicios en ejecucion.


**Base de datos**

En el panel de laragon haga clic en el boton de base de datos y se ejecutara haidy,cree una nueva conexion a la base de datos y cargue el script base-de-datos-prueba-tecnica-dev.sql.

revisar que se haya creado la base de datos prueba_tecnica_dev junto con las tablas, relaciones e insercion de datos una vez completado esa parte

abrir el proyecto en el IDE de su preferencia ya sea Sublime Text, Visual Studio Code, PhpStorm, etc

**IDE**
Una vez seleccionado el IDE de su preferencia abra el archivo .env.example y copie su contenido y cree un archivo .env en la raiz del proyecto y pegue lo que copio del archivo .env.example

Dirijase a esta parte donde veras la configuracion de la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=root
DB_USERNAME=root
DB_PASSWORD=root
```


y reemplazela por esta

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_tecnica_dev
DB_USERNAME=root
DB_PASSWORD=
```

colocar password si lo tiene configurado con contraseña, si no lo tiene dejarlo en blanco

Luego dirijase al panel de laragon y de clic en terminal y dirijase dentro de la carpeta del proyecto y ejecute los siguientes comandos

```bash
cd C:\laragon\www\NOMBREPROYECTO
```

```bash
composer install
```

```bash
php artisan key:generate
```
Deberias ver el siguiente mensaje (Ejemplo):
```
Application key [base64:ntJfFGjBFw9+GB9ifU6oSCvuhVe54tDMNUquaJCoevo=] set successfully.php artisan serve
```

```bash
php artisan serve
```

Luego de haber ejecutado los comandos anteriores usted podra visuaizar en la consola este mensaje similar
```bash
Laravel development server started: <http://127.0.0.1:8000>
[Sun Jun  5 02:47:39 2022] PHP 7.4.19 Development Server (http://127.0.0.1:8000) started
```
 **Aplicacion**

Ahora  la url en el navegador de su preferencia y pegarla para comenzar a usar la aplicacion
