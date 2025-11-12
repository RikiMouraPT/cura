<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cura - Meus Serviços</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="min-h-screen bg-teal-50/30">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white shadow z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-teal-700">Cura</h1>
        <ul class="flex items-center gap-6 text-teal-700 font-medium">
          <li><a href="#" class="hover:text-teal-900">Início</a></li>
          <li><a href="#" class="hover:text-teal-900">Serviços</a></li>
          <li><a href="#" class="hover:text-teal-900">Avaliações</a></li>
          <li><a href="#" class="hover:text-teal-900">Perfil</a></li>
        </ul>
      </div>
    </nav>

    <main class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
          <div>
            <h1 class="text-3xl font-bold text-teal-900 mb-2">Meus Serviços</h1>
            <p class="text-teal-600">Gerencie todos os seus serviços de saúde domiciliar.</p>
          </div>
          <button
            class="flex items-center justify-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors"
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Novo Serviço
          </button>
        </div>

        <!-- Estatísticas -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
          <div class="bg-white rounded-xl shadow-md p-4">
            <p class="text-sm text-teal-600 mb-1">Total</p>
            <p class="text-2xl font-bold text-teal-900">6</p>
          </div>
          <div class="bg-white rounded-xl shadow-md p-4">
            <p class="text-sm text-teal-600 mb-1">Pendentes</p>
            <p class="text-2xl font-bold text-yellow-600">2</p>
          </div>
          <div class="bg-white rounded-xl shadow-md p-4">
            <p class="text-sm text-teal-600 mb-1">Ativos</p>
            <p class="text-2xl font-bold text-teal-600">1</p>
          </div>
          <div class="bg-white rounded-xl shadow-md p-4">
            <p class="text-sm text-teal-600 mb-1">Completados</p>
            <p class="text-2xl font-bold text-green-600">2</p>
          </div>
        </div>

        <!-- Filtros -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
          <div class="flex items-center gap-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L14 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 018 21v-7.586L2.293 6.707A1 1 0 012 6V4z" />
            </svg>
            <h2 class="text-lg font-semibold text-teal-900">Filtros</h2>
          </div>

          <div class="grid md:grid-cols-3 gap-4">
            <div class="relative">
              <input
                type="text"
                placeholder="Pesquisar serviços..."
                class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
              />
              <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
              </svg>
            </div>

            <select
              class="px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
            >
              <option>Todos os Estados</option>
              <option>Pendente</option>
              <option>Ativo</option>
              <option>Completado</option>
              <option>Cancelado</option>
            </select>

            <select
              class="px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
            >
              <option>Todos os Tipos</option>
              <option>Auxiliar de Saúde</option>
              <option>Enfermagem</option>
              <option>Consulta Médica</option>
              <option>Fisioterapia</option>
              <option>Nutrição</option>
              <option>Psicologia</option>
            </select>
          </div>
        </div>

        <!-- Lista de Serviços -->
        <div class="space-y-4">
          <!-- Serviço 1 -->
          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
              <div class="flex-1 space-y-3">
                <div class="flex items-start justify-between gap-4">
                  <div>
                    <h3 class="text-lg font-semibold text-teal-900 mb-1">Enfermagem</h3>
                    <p class="text-sm text-teal-600">Profissional: Ana Costa</p>
                  </div>
                  <span
                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold border bg-yellow-100 text-yellow-700 border-yellow-200">
                    Pendente
                  </span>
                </div>
                <div class="flex flex-wrap gap-4 text-sm text-teal-600">
                  <div class="flex items-center gap-2">📅 2025-01-25</div>
                  <div class="flex items-center gap-2">⏰ 14:00</div>
                  <div class="flex items-center gap-2">📍 Lisboa</div>
                </div>
                <div class="pt-2"><span class="text-lg font-bold text-teal-700">€90</span></div>
              </div>

              <div class="flex lg:flex-col gap-2">
                <button
                  class="flex items-center justify-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold px-4 py-2 rounded-xl transition-colors">
                  👁 Ver
                </button>
                <button
                  class="flex items-center justify-center gap-2 bg-teal-50 hover:bg-teal-100 text-teal-700 font-semibold px-4 py-2 rounded-xl transition-colors">
                  ✏️ Editar
                </button>
              </div>
            </div>
          </div>

          <!-- Exemplo adicional -->
          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
              <div class="flex-1 space-y-3">
                <div class="flex items-start justify-between gap-4">
                  <div>
                    <h3 class="text-lg font-semibold text-teal-900 mb-1">Consulta Médica</h3>
                    <p class="text-sm text-teal-600">Profissional: Dr. Pedro Santos</p>
                  </div>
                  <span
                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-semibold border bg-green-100 text-green-700 border-green-200">
                    Completado
                  </span>
                </div>
                <div class="flex flex-wrap gap-4 text-sm text-teal-600">
                  <div class="flex items-center gap-2">📅 2025-01-20</div>
                  <div class="flex items-center gap-2">⏰ 16:30</div>
                  <div class="flex items-center gap-2">📍 Coimbra</div>
                </div>
                <div class="pt-2"><span class="text-lg font-bold text-teal-700">€160</span></div>
              </div>

              <div class="flex lg:flex-col gap-2">
                <button
                  class="flex items-center justify-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold px-4 py-2 rounded-xl transition-colors">
                  👁 Ver
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
