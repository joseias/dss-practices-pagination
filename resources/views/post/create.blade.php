<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/styles.post.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <!-- Ejercicio: incluya código para mostrar errores -->

    
    <!-- Ejercicio: defina la ruta para "action" usando Blade -->
    <form id="form_post"  method="POST" enctype="multipart/form-data">
      <div class="container">
        <h1>Nuevo post</h1>
        <hr>
        <label for="title">
          <b>Título:</b>
        </label>
        <!-- Ejercicio: realice las modificaciones para mostrar valor anterior -->
        <input  type="text" placeholder="Título" name="title" id="title">
        <label for="content">
          <b>Contenido:</b>
        </label>
        <!-- Ejercicio: realice las modificaciones para mostrar valor anterior -->
        <textarea id="Contenido" form="form_post" name="content" placeholder="..." style="height:200px"></textarea>
        <input type="submit" value="Enviar">
      </div>
    </form>
    </div>
  </body>
</html>