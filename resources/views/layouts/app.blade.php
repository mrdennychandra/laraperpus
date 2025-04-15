<!-- filepath: /Users/dennychandra/Documents/Workspace/laravelproj/produk-api/resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Categories</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-lg font-bold">Perpustakaan App</h1>
            <ul class="flex space-x-4">
                <li><a href="{{ route('categories.index') }}" class="hover:underline">Categories</a></li>
                <li><a href="{{ route('books.index') }}" class="hover:underline">Books</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-8">
        @yield('content')
    </div>
</body>
</html>