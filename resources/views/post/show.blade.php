<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-96 text-center">
        <h1 class="text-2xl font-bold text-blue-600">{{ $post->title }}</h1>
        <p class="text-gray-700 mt-4">{{ $post->content }}</p>
    </div>
</body>

</html>
