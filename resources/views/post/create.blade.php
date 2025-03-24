<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Post</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Nuevo Post</h1>
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="form_post" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            <div>
                <label for="title" class="block font-semibold">Título:</label>
                <input value="{{ old('title') }}" type="text" placeholder="Título" name="title" id="title"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="content" class="block font-semibold">Contenido:</label>
                <textarea id="content" name="content" placeholder="Escribe aquí..." style="height:200px"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('content') }}</textarea>
            </div>
            <div class="text-center">
                <input type="submit" value="Publicar"
                    class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 cursor-pointer">
            </div>
        </form>
    </div>
</body>

</html>