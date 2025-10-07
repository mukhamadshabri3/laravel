<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="{{ route('home') }}" class="text-xl font-bold"><h1>Brand</h1></a>
            <nav>
                <ul class="flex space-x-6">
                    <li><a class="hover:text-blue-500" href="{{ route('about') }}">About</a></li>
                    <li><a class="hover:text-blue-500" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="flex flex-col items-center justify-center min-h-[80vh] text-center">
        @yield('content')
    </main>

    <footer class="text-center py-4 bg-gray-800 text-white mt-8">
        &copy; {{ date('Y') }} All Rights Reserved.
    </footer>

</body>
</html>
