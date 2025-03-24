<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-blue-600 text-center mb-4">Lista de Posts</h1>
        
        @foreach ($posts as $post)
            <div class="border-b pb-4 mb-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h2>
                <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('post.show', $post->id) }}" 
                   class="text-blue-500 hover:underline text-sm">Leer más</a>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="mt-4 flex justify-center">
            {{ $posts->links() }}
        </div>
    </div>
</body>

</html>
