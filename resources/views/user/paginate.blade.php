<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User List</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">List of Users</h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white shadow-lg rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="p-3 text-left">Nombre</th>
                        <th class="p-3 text-left">Correo</th>
                        <th class="p-3 text-left">Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-3">{{ $user->name }}</td>
                        <td class="p-3">{{ $user->email }}</td>
                        <td class="p-3">+ {{ $user->phone->country }} {{ $user->phone->number }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination Links -->
        <div class="mt-4 flex justify-center">
            {{ $users->links() }}
        </div>
    </div>
</body>
</html>
