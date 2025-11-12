<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>@yield('title', 'Dashboard') - Cura</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-teal-50/30">

    <nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-10">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-teal-700">Cura</h1>

            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('app.service.index') }}" class="text-teal-700 hover:text-teal-900 font-medium transition-colors">Serviços</a>
                <a href="{{ route('app.review.index') }}" class="text-teal-700 hover:text-teal-900 font-medium transition-colors">Avaliações</a>

                <div class="relative">
                    <button id="profileBtn" class="w-10 h-10 rounded-full overflow-hidden border-2 border-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <img src="{{ Auth::user()->profile_photo_url ?? asset('images/default-avatar.png') }}" alt="Foto de perfil" class="w-full h-full object-cover">
                    </button>

                    <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2">
                        <a href="{{ route('app.profile.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-teal-50 hover:text-teal-700">Ver Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-teal-50 hover:text-teal-700">Terminar Sessão</button>
                        </form>
                    </div>
                </div>
            </div>

            <button id="menuBtn" class="lg:hidden p-2 text-teal-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden z-20"></div>

    <div id="mobileSidebar" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-30">
        <div class="flex justify-between items-center px-4 py-3 border-b">
            <h2 class="text-xl font-semibold text-teal-700">Menu</h2>
            <button id="closeSidebar" class="text-gray-600 hover:text-teal-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('app.service.index') }}" class="block text-gray-700 hover:text-teal-700 font-medium">Serviços</a>
            <a href="{{ route('app.review.index') }}" class="block text-gray-700 hover:text-teal-700 font-medium">Avaliações</a>
            <a href="{{ route('app.profile.index') }}" class="block text-gray-700 hover:text-teal-700 font-medium">Perfil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block text-left w-full text-gray-700 hover:text-teal-700 font-medium">Terminar Sessão</button>
            </form>
        </div>
    </div>

    <main class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <script>
        // Espera que o DOM esteja totalmente carregado
        document.addEventListener('DOMContentLoaded', () => {

            // --- Dropdown do perfil (desktop) ---
            const profileBtn = document.getElementById('profileBtn');
            const profileMenu = document.getElementById('profileMenu');
            
            // Só executa se os elementos existirem
            if (profileBtn && profileMenu) {
                profileBtn.addEventListener('click', () => {
                    // Alterna a classe 'hidden' para mostrar/esconder o menu
                    profileMenu.classList.toggle('hidden');
                });

                // Fecha o dropdown se o utilizador clicar fora dele
                window.addEventListener('click', (e) => {
                    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                        profileMenu.classList.add('hidden');
                    }
                });
            }

            // --- Sidebar (mobile) ---
            const menuBtn = document.getElementById('menuBtn');
            const mobileSidebar = document.getElementById('mobileSidebar');
            const overlay = document.getElementById('overlay');
            const closeSidebar = document.getElementById('closeSidebar');

            // Só executa se todos os elementos existirem
            if (menuBtn && mobileSidebar && overlay && closeSidebar) {
                
                function openSidebar() {
                    mobileSidebar.classList.remove('translate-x-full'); // Mostra a sidebar
                    overlay.classList.remove('hidden'); // Mostra o fundo escuro
                }

                function closeMenu() {
                    mobileSidebar.classList.add('translate-x-full'); // Esconde a sidebar
                    overlay.classList.add('hidden'); // Esconde o fundo escuro
                }

                // Eventos
                menuBtn.addEventListener('click', openSidebar);
                closeSidebar.addEventListener('click', closeMenu);
                overlay.addEventListener('click', closeMenu);
            }
        });
    </script>
    </body>
</html>