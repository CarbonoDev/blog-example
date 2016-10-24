# Correr proyecto
php artisan serve


# Instrucciones:

Queremos construir una plataforma de microbloging tipo Twitter, para esto se te han asignado las siguientes tareas

1.  Crea una tabla "posts" con al menos los campos:
    *   Título
    *   Slug
    *   Contenido
    *   Fecha
2.  En resources/posts/form encontrarás el esqueleto HTML de un formulario para la creación de un Post, completa la funcionalidad, de tal manera que permirta la creación de un nuevo Post.
3.  Escribe el código necesario para Validar que:
    1.  Todos los campos se encuentren presentes
    2.  Título no sea mayor de 150 caracteres
    3.  Contenido sea de al menos 40 caracteres
    4.  Slug sea único y en formato [Slug](https://en.wikipedia.org/wiki/Semantic_URL#Slug)
4.  Guardar el post en la base de datos
5.  Retornar (redirección) al listado de Posts que se encuentra en [/blog]({{ url('blog') }})
6.  Muestra el listado de Posts en la url [/blog]({{ url('blog') }})

----
# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
