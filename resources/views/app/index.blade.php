<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Cura</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="min-h-screen bg-teal-50/30">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-10">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logotipo -->
            <h1 class="text-2xl font-bold text-teal-700">Cura</h1>

            <!-- Secção direita: links + perfil -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('app.service.index') }}" class="text-teal-700 hover:text-teal-900 font-medium transition-colors">Serviços</a>
                <a href="{{ route('app.review.index') }}" class="text-teal-700 hover:text-teal-900 font-medium transition-colors">Avaliações</a>

                <!-- Perfil dropdown (apenas desktop) -->
                <div class="relative">
                    <button id="profileBtn" class="w-10 h-10 rounded-full overflow-hidden border-2 border-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <img src="{{ Auth::user()->profile_photo_url ?? asset('images/default-avatar.png') }}" alt="Foto de perfil" class="w-full h-full object-cover">
                    </button>

                    <!-- Dropdown -->
                    <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2">
                        <a href="{{ route('app.profile.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-teal-50 hover:text-teal-700">Ver Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-teal-50 hover:text-teal-700">Terminar Sessão</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Botão hamburguer (apenas mobile) -->
            <button id="menuBtn" class="lg:hidden p-2 text-teal-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Overlay (fundo escurecido) -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden z-20"></div>

    <!-- Sidebar móvel -->
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

    <!-- Script dropdown e menu móvel -->
    <script>
        // Dropdown do perfil (desktop)
        const profileBtn = document.getElementById('profileBtn');
        const profileMenu = document.getElementById('profileMenu');
        if (profileBtn) {
            profileBtn.addEventListener('click', () => profileMenu.classList.toggle('hidden'));
            window.addEventListener('click', e => {
                if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                    profileMenu.classList.add('hidden');
                }
            });
        }

        // Sidebar (mobile)
        const menuBtn = document.getElementById('menuBtn');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const overlay = document.getElementById('overlay');
        const closeSidebar = document.getElementById('closeSidebar');

        function openSidebar() {
            mobileSidebar.classList.remove('translate-x-full');
            overlay.classList.remove('hidden');
        }

        function closeMenu() {
            mobileSidebar.classList.add('translate-x-full');
            overlay.classList.add('hidden');
        }

        menuBtn.addEventListener('click', openSidebar);
        closeSidebar.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);
    </script>


    <!-- Script dropdown e menu móvel -->
    <script>
        // Dropdown do perfil
        const profileBtn = document.getElementById('profileBtn');
        const profileMenu = document.getElementById('profileMenu');
        profileBtn.addEventListener('click', () => profileMenu.classList.toggle('hidden'));

        // Fecha dropdown se clicar fora
        window.addEventListener('click', e => {
            if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });

        // Menu móvel (hamburguer)
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    </script>



    <!-- Conteúdo Principal -->
    <main class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto">

        <!-- Cabeçalho -->
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-teal-900 mb-2">Dashboard</h1>
          <p class="text-teal-600">Bem-vindo de volta! Aqui está o resumo dos seus serviços.</p>
        </div>

        <!-- Estatísticas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="p-3 rounded-xl bg-teal-50 mb-4 inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <p class="text-3xl font-bold text-teal-900 mb-1">3</p>
            <p class="text-sm text-teal-600">Serviços Pendentes</p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="p-3 rounded-xl bg-teal-100 mb-4 inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            </div>
            <p class="text-3xl font-bold text-teal-900 mb-1">2</p>
            <p class="text-sm text-teal-600">Serviços Ativos</p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="p-3 rounded-xl bg-teal-200 mb-4 inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"/></svg>
            </div>
            <p class="text-3xl font-bold text-teal-900 mb-1">24</p>
            <p class="text-sm text-teal-600">Serviços Completados</p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="p-3 rounded-xl bg-teal-300 mb-4 inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-900" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 17l6-6 4 4 8-8"/></svg>
            </div>
            <p class="text-3xl font-bold text-teal-900 mb-1">4.8</p>
            <p class="text-sm text-teal-600">Avaliação Média</p>
          </div>
        </div>

        <!-- Ações Rápidas -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
          <h2 class="text-xl font-semibold text-teal-900 mb-4">Ações Rápidas</h2>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <a href="/agendar" class="flex items-center gap-3 p-4 bg-teal-50 hover:bg-teal-100 rounded-xl transition-colors group">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600 group-hover:text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <div>
                <p class="font-semibold text-teal-900">Agendar Serviço</p>
                <p class="text-sm text-teal-600">Novo agendamento</p>
              </div>
            </a>

            <a href="/servicos" class="flex items-center gap-3 p-4 bg-teal-50 hover:bg-teal-100 rounded-xl transition-colors group">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600 group-hover:text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              <div>
                <p class="font-semibold text-teal-900">Meus Serviços</p>
                <p class="text-sm text-teal-600">Ver todos</p>
              </div>
            </a>

            <a href="/perfil" class="flex items-center gap-3 p-4 bg-teal-50 hover:bg-teal-100 rounded-xl transition-colors group">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600 group-hover:text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="8" r="4"/><path d="M6 20c0-3 3-6 6-6s6 3 6 6"/></svg>
              <div>
                <p class="font-semibold text-teal-900">Meu Perfil</p>
                <p class="text-sm text-teal-600">Editar dados</p>
              </div>
            </a>
          </div>
        </div>

        <!-- Histórico de Serviços -->
        <div class="bg-white rounded-xl shadow-md p-6">
          <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-teal-900">Histórico de Serviços</h2>
            <a href="/servicos" class="text-sm font-medium text-teal-600 hover:text-teal-700">Ver todos →</a>
          </div>

          <!-- Mobile Cards -->
          <div class="lg:hidden space-y-4">
            <!-- Card 1 -->
            <div class="border border-teal-100 rounded-xl p-4 space-y-3">
              <div class="flex items-center justify-between">
                <span class="font-semibold text-teal-900">Enfermagem</span>
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pendente</span>
              </div>
              <div class="space-y-2 text-sm text-teal-600">
                <p><strong>Data:</strong> 2025-01-25</p>
                <p><strong>Hora:</strong> 14:00</p>
                <p><strong>Profissional:</strong> Ana Costa</p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="border border-teal-100 rounded-xl p-4 space-y-3">
              <div class="flex items-center justify-between">
                <span class="font-semibold text-teal-900">Auxiliar</span>
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700">Ativo</span>
              </div>
              <div class="space-y-2 text-sm text-teal-600">
                <p><strong>Data:</strong> 2025-01-23</p>
                <p><strong>Hora:</strong> 10:00</p>
                <p><strong>Profissional:</strong> João Silva</p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="border border-teal-100 rounded-xl p-4 space-y-3">
              <div class="flex items-center justify-between">
                <span class="font-semibold text-teal-900">Médico</span>
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Completado</span>
              </div>
              <div class="space-y-2 text-sm text-teal-600">
                <p><strong>Data:</strong> 2025-01-20</p>
                <p><strong>Hora:</strong> 16:30</p>
                <p><strong>Profissional:</strong> Dr. Pedro Santos</p>
              </div>
            </div>
          </div>

          <!-- Desktop Table -->
          <div class="hidden lg:block overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="border-b border-teal-100">
                  <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Tipo</th>
                  <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Data</th>
                  <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Hora</th>
                  <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Profissional</th>
                  <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-teal-50 hover:bg-teal-50/50 transition-colors">
                  <td class="py-4 px-4 text-teal-900 font-medium">Enfermagem</td>
                  <td class="py-4 px-4 text-teal-600">2025-01-25</td>
                  <td class="py-4 px-4 text-teal-600">14:00</td>
                  <td class="py-4 px-4 text-teal-600">Ana Costa</td>
                  <td class="py-4 px-4"><span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pendente</span></td>
                </tr>
                <tr class="border-b border-teal-50 hover:bg-teal-50/50 transition-colors">
                  <td class="py-4 px-4 text-teal-900 font-medium">Auxiliar</td>
                  <td class="py-4 px-4 text-teal-600">2025-01-23</td>
                  <td class="py-4 px-4 text-teal-600">10:00</td>
                  <td class="py-4 px-4 text-teal-600">João Silva</td>
                  <td class="py-4 px-4"><span class="px-3 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700">Ativo</span></td>
                </tr>
                <tr class="border-b border-teal-50 hover:bg-teal-50/50 transition-colors">
                  <td class="py-4 px-4 text-teal-900 font-medium">Médico</td>
                  <td class="py-4 px-4 text-teal-600">2025-01-20</td>
                  <td class="py-4 px-4 text-teal-600">16:30</td>
                  <td class="py-4 px-4 text-teal-600">Dr. Pedro Santos</td>
                  <td class="py-4 px-4"><span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Completado</span></td>
                </tr>
                <tr class="border-b border-teal-50 hover:bg-teal-50/50 transition-colors">
                  <td class="py-4 px-4 text-teal-900 font-medium">Enfermagem</td>
                  <td class="py-4 px-4 text-teal-600">2025-01-18</td>
                  <td class="py-4 px-4 text-teal-600">09:00</td>
                  <td class="py-4 px-4 text-teal-600">Maria Oliveira</td>
                  <td class="py-4 px-4"><span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Completado</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
