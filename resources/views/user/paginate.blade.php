<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <!-- Use Vite ! -->
  </head>
  <body> 
    <div class="container">
      <h1>List of Users</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
          </tr>
        </thead>
        <tbody> @foreach ($users as $user) <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td> + {{ $user->phone->country}} {{$user->phone->number }}</td>
          </tr> @endforeach 
        </tbody>
      </table>
      <!-- Pagination Links -->
      <div>
        {{ $users->links() }}
      </div>
    </div>
  </body>
</html>