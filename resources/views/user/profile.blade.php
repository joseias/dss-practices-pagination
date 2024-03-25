<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/styles.user.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>

      <div class="container">
        <h1>Usuario creado</h1>
        <hr>
          <b>Nombre y apellidos:</b> {{$user->name}}
          <br>
          <b>Correo electrónico:</b> {{$user->email}}
          <br>
          <b>Teléfono:</b> {{$user->phone->country}} {{$user->phone->number}}
      </div>
  </body>
</html>