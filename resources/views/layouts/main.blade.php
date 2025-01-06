<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Manager | @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen text-gray-900 bg-gray-100">
    <header class="py-4 text-white bg-blue-500 shadow">
        <div class="container flex items-center justify-between mx-auto">
            <h1 class="text-lg font-bold">Health Manager</h1>
            @auth
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 font-semibold text-white bg-red-500 rounded shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                    Salir
                </button>
            </form>
            @endauth
        </div>
    </header>
    @yield('content')
</body>
</html>
