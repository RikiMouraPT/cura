<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cura - Minhas Avaliações</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="min-h-screen bg-teal-50/30">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
      <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
        <a href="#" class="text-xl font-bold text-teal-800">Cura</a>
        <ul class="flex items-center gap-6 text-teal-700 font-medium">
          <li><a href="#" class="hover:text-teal-900">Início</a></li>
          <li><a href="#" class="hover:text-teal-900">Serviços</a></li>
          <li><a href="#" class="hover:text-teal-900">Profissionais</a></li>
          <li><a href="#" class="text-teal-900 font-semibold">Minhas Avaliações</a></li>
        </ul>
      </div>
    </nav>

    <!-- Conteúdo -->
    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-teal-900 mb-2">Minhas Avaliações</h1>
          <p class="text-teal-600">Veja todas as avaliações que fez aos serviços.</p>
        </div>

        <!-- Stats -->
        <div class="grid sm:grid-cols-3 gap-6 mb-8">
          <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center gap-3 mb-2">
              <svg class="w-6 h-6 text-yellow-400 fill-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27l6.18 3.73-1.64-7.03L21 9.24l-7.19-.61L12 2 10.19 8.63 3 9.24l4.46 4.73L5.82 21z"/></svg>
              <h3 class="text-sm font-medium text-teal-900">Avaliação Média</h3>
            </div>
            <p class="text-3xl font-bold text-teal-900">4.3</p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center gap-3 mb-2">
              <svg class="w-6 h-6 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v11a2 2 0 002 2z"/></svg>
              <h3 class="text-sm font-medium text-teal-900">Total de Avaliações</h3>
            </div>
            <p class="text-3xl font-bold text-teal-900">4</p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center gap-3 mb-2">
              <svg class="w-6 h-6 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.507 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <h3 class="text-sm font-medium text-teal-900">Profissionais Avaliados</h3>
            </div>
            <p class="text-3xl font-bold text-teal-900">4</p>
          </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
          <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex-1">
              <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/></svg>
                <input
                  type="text"
                  placeholder="Pesquisar por profissional ou serviço..."
                  class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                />
              </div>
            </div>

            <div class="sm:w-48">
              <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 12.414V19a1 1 0 01-1.447.894l-4-2A1 1 0 019 17V12.414L3.293 6.707A1 1 0 013 6V4z"/></svg>
                <select
                  class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent appearance-none"
                >
                  <option>Todas as estrelas</option>
                  <option>5 estrelas</option>
                  <option>4 estrelas</option>
                  <option>3 estrelas</option>
                  <option>2 estrelas</option>
                  <option>1 estrela</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Reviews List -->
        <div class="space-y-4">
          <!-- Review Card -->
          <a href="#" class="block bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-start justify-between mb-4">
              <div class="flex-1">
                <h3 class="text-lg font-semibold text-teal-900 mb-1">Enfermagem</h3>
                <p class="text-sm text-teal-600">Ana Costa</p>
              </div>
              <div class="flex items-center gap-1">
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
              </div>
            </div>

            <p class="text-teal-700 mb-3">
              Excelente profissional! Muito atenciosa e cuidadosa. Recomendo.
            </p>

            <div class="flex items-center justify-between text-sm text-teal-600">
              <span>2025-01-20</span>
              <span class="text-teal-700 font-medium hover:text-teal-800">Ver detalhes →</span>
            </div>
          </a>

          <!-- Outro exemplo -->
          <a href="#" class="block bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex items-start justify-between mb-4">
              <div class="flex-1">
                <h3 class="text-lg font-semibold text-teal-900 mb-1">Fisioterapia</h3>
                <p class="text-sm text-teal-600">Maria Oliveira</p>
              </div>
              <div class="flex items-center gap-1">
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
                <svg class="w-5 h-5 fill-yellow-400 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2z"/></svg>
              </div>
            </div>

            <p class="text-teal-700 mb-3">
              Serviço adequado, mas esperava mais atenção aos detalhes.
            </p>

            <div class="flex items-center justify-between text-sm text-teal-600">
              <span>2025-01-10</span>
              <span class="text-teal-700 font-medium hover:text-teal-800">Ver detalhes →</span>
            </div>
          </a>
        </div>
      </div>
    </main>
  </body>
</html>
