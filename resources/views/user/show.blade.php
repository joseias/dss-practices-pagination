<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Web</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96 text-center">
        <h3 class="text-xl font-bold text-blue-600">
            Nombre: {{ $user->name }}
        </h3>
        <p class="text-gray-700 mt-2">
            Correo: {{ $user->email }}
        </p>
        <p class="text-gray-700 mt-2">
            Teléfono: {{ $user->phone->number }}
        </p>
    </div>
</body>

</html>
