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

## Restaurar la base de datos

Si necesitas restaurar la base de datos de este proyecto, puedes usar el archivo `esquema.sql` que se encuentra en este repositorio.

### Pasos para restaurar el esquema de la base de datos:

1. **Crea una nueva base de datos en tu servidor MySQL**. Por ejemplo, puedes crear una base de datos llamada `example_app` (o el nombre que prefieras).

2. **Restaura el esquema** utilizando el archivo `esquema.sql` que se encuentra en el repositorio. Para hacerlo, abre una terminal y ejecuta el siguiente comando:

   ```bash
   mysql -u usuario -p nombre_de_tu_base_de_datos < esquema.sql

   Sustituye usuario por tu usuario de MySQL y nombre_de_tu_base_de_datos por el nombre de la base de datos que has creado.

3. Configura tu archivo .env en el proyecto Laravel con los parámetros correctos de conexión a la base de datos, por ejemplo:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
¡Y eso es todo! Ahora tu proyecto Laravel estará listo para funcionar con la base de datos restaurada.




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
