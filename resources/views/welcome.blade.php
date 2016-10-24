<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 300;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                text-align: center;
                font-size: 96px;
            }

            .instructions {
                text-align: left;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 <br>
                    <a href="{{ url('blog') }}">Ir al blog</a><br>
                    <a href="{{ url('blog/new') }}">Nuevo post</a>
                </div>
                <div class="instructions">
                    <h1>Instrucciones:</h1>
                    <p>Queremos construir una plataforma de microbloging tipo Twitter, para esto se te han asignado las siguientes tareas</p>
                    <ol>
                        <li>Crea una tabla "posts" con campos:
                            <ul>
                                <li>Título</li>
                                <li>Slug</li>
                                <li>Contenido</li>
                                <li>Fecha</li>
                            </ul>
                        </li>
                        <li>En resources/posts/form encontrarás un formulario con los campos necesarios para crear un Post.</li>
                        <li>Escribe el código necesario para Validar que:
                            <ol>
                                <li>Todos los campos se encuentren presentes</li>
                                <li>Título no sea mayor de 150 caracteres</li>
                                <li>Contenido sea de al menos 40 caracteres</li>
                                <li>Slug sea único y en formato <a href="https://en.wikipedia.org/wiki/Semantic_URL#Slug">Slug</a></li>
                            </ol>
                        </li>
                        <li>Guardar el post en la base de datos</li>
                        <li>Retornar al listado de Posts que se encuentra en <a href="{{ url('blog') }}">/blog</a></li>
                        <li>Muestra el listado de Posts en la url <a href="{{ url('blog') }}">/blog</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </body>
</html>
