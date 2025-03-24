<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Usuario</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Nuevo Usuario</h1>
        <form id="form_user" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-semibold">Nombre y apellidos:</label>
                <input type="text" placeholder="Nombre y apellidos" name="name" id="name" required 
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block font-semibold">Correo electrónico:</label>
                <input type="email" placeholder="Correo electrónico" name="email" id="email" required 
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="phone" class="block font-semibold">Teléfono:</label>
                <input type="tel" placeholder="123456789" id="phone" name="phone" pattern="[0-9]{9}" required 
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="text-center">
                <input type="submit" value="Enviar" 
                    class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>
</html>
