# Proyecto Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
---

## Primeros pasos

Una vez que hayas descargado el proyecto desde GitHub, sigue estos pasos para configurarlo y hacerlo funcionar correctamente en tu máquina local:

1. **Descargar el proyecto:**
   Si aún no has clonado el repositorio, hazlo usando el siguiente comando en tu terminal (en la carpeta donde quieras guardar el proyecto):
   
   ```bash
   git clone https://github.com/isaaccg96/Practica_Laravel.git

2. **Instalar las dependencias de Composer:** Laravel usa Composer para manejar las dependencias del proyecto. Ve a la carpeta del proyecto y ejecuta el siguiente comando:

   ```bash
   cd nombre-del-repositorio
   composer install
   
  Esto instalará todas las dependencias necesarias que están definidas en el archivo composer.json.

3. Configurar el archivo .env: Laravel utiliza el archivo .env para configurar parámetros importantes del entorno, como la base de datos, el correo electrónico, etc. Si no tienes el archivo .env en el proyecto, crea uno a partir del archivo .env.example que viene incluido en el proyecto.
   
    ```bash
    cp .env.example .env
    
  Luego, abre el archivo .env y asegúrate de configurar correctamente los parámetros de tu base de datos, como se mostró en el paso anterior. Por ejemplo:
  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=example_app
    DB_USERNAME=root
    DB_PASSWORD=
    
4. Generar la clave de aplicación de Laravel: Laravel necesita una clave de aplicación única para funcionar correctamente. Ejecuta el siguiente comando para generar esa clave:

   ```bash
    php artisan migrate
    
5. Restaurar la base de datos (si es necesario): Si el proyecto usa una base de datos, asegúrate de haber restaurado el esquema de la base de datos utilizando el archivo esquema.sql, como se explicará en el apartado "Restaurar la base de datos".

6. Ejecutar las migraciones y las semillas (si es necesario): Si el proyecto tiene migraciones para crear las tablas en la base de datos, puedes ejecutarlas con el siguiente comando:

   ```bash
    cp .env.example .env
   
  Si también hay datos de ejemplo o predeterminados que se deben insertar en las tablas, puedes ejecutar las semillas con:
    
    php artisan db:seed
    
7. Iniciar el servidor de desarrollo: Finalmente, para ver el proyecto en tu navegador, puedes iniciar el servidor de desarrollo integrado de Laravel con uno de los siguientes comandos:
   
   ```bash
    php artisan serve
    php -S 127.0.0.1:8000 -t public


## Restaurar la base de datos

Si necesitas restaurar la base de datos de este proyecto, puedes usar el archivo `esquema.sql` que se encuentra en este repositorio.

### Pasos para restaurar el esquema de la base de datos:

1. **Crea una nueva base de datos en tu servidor MySQL**. Por ejemplo, puedes crear una base de datos llamada `example_app` (o el nombre que prefieras).

2. **Restaura el esquema** utilizando el archivo `esquema.sql` que se encuentra en el repositorio. Para hacerlo, abre una terminal y ejecuta el siguiente comando:

   ```bash
   mysql -u usuario -p nombre_de_tu_base_de_datos < esquema.sql

   Sustituye usuario por tu usuario de MySQL y nombre_de_tu_base_de_datos por el nombre de la base de datos que has creado.

3. Configura tu archivo .env en el proyecto Laravel con los parámetros correctos de conexión a la base de datos, por ejemplo:

      ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=example_app
    DB_USERNAME=root
    DB_PASSWORD=
   
¡Y eso es todo! Ahora tu proyecto Laravel estará listo para funcionar con la base de datos restaurada.




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
