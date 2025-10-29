<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cura Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-teal-50/30">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 py-4 shadow-sm bg-white">
        <div class="flex items-center space-x-2">
            <div class="bg-teal-600 text-white font-bold rounded-lg px-3 py-2">Cura</div>
            <span class="text-teal-700 font-semibold hidden sm:block">Plataforma de Cuidados</span>
        </div>
        <div>
            <a href="{{ route('login') }}" class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition">
                Login
            </a>
        </div>
    </nav>

    <main class="pt-20 pb-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        @yield('content')
    </main>

</body>
</html>
