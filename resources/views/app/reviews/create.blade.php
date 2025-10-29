<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Criar Avaliação - Cura</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-teal-50/30">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white shadow z-50">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-teal-700">Cura</h1>
        <div class="space-x-4">
          <a href="/" class="text-teal-700 hover:text-teal-900 font-medium">Início</a>
          <a href="/avaliacoes" class="text-teal-700 hover:text-teal-900 font-medium">Avaliações</a>
          <a href="/perfil" class="text-teal-700 hover:text-teal-900 font-medium">Perfil</a>
        </div>
      </div>
    </nav>

    <!-- Conteúdo -->
    <main class="pt-24 px-4 py-12">
      <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="mb-8 text-center">
          <h1 class="text-3xl font-bold text-teal-900 mb-2">Criar Avaliação</h1>
          <p class="text-teal-600">Partilhe a sua experiência e ajude outros utilizadores</p>
        </div>

        <!-- Formulário -->
        <form class="space-y-6">
          <!-- Serviço Avaliado -->
          <div class="bg-white rounded-2xl shadow-md p-6">
            <h2 class="text-xl font-semibold text-teal-900 mb-4">Serviço Avaliado</h2>

            <div class="space-y-4">
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Profissional</label>
                <div class="relative">
                  <select
                    required
                    class="w-full pl-10 pr-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                  >
                    <option value="">Selecione o profissional</option>
                    <option>Dr. João Silva - Enfermagem</option>
                    <option>Dra. Maria Santos - Fisioterapia</option>
                    <option>Dr. Pedro Costa - Cuidados Paliativos</option>
                  </select>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5.121 17.804A10.97 10.97 0 0112 15c2.39 0 4.602.746 6.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Tipo de Serviço</label>
                <div class="relative">
                  <select
                    required
                    class="w-full pl-10 pr-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                  >
                    <option value="">Selecione o tipo de serviço</option>
                    <option>Enfermagem</option>
                    <option>Fisioterapia</option>
                    <option>Cuidados Paliativos</option>
                    <option>Terapia Ocupacional</option>
                  </select>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12h6m2 8H7a2 2 0 01-2-2V6a2 2 0 012-2h4l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Avaliação -->
          <div class="bg-white rounded-2xl shadow-md p-6">
            <h2 class="text-xl font-semibold text-teal-900 mb-6">Avaliação</h2>

            <div class="space-y-6">
              <div class="space-y-2">
                <label class="block text-sm font-medium text-teal-900">Avaliação Geral</label>
                <div class="flex gap-1">
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                </div>
              </div>

              <div class="space-y-2">
                <label class="block text-sm font-medium text-teal-900">Profissionalismo</label>
                <div class="flex gap-1">
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                </div>
              </div>

              <div class="space-y-2">
                <label class="block text-sm font-medium text-teal-900">Pontualidade</label>
                <div class="flex gap-1">
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                </div>
              </div>

              <div class="space-y-2">
                <label class="block text-sm font-medium text-teal-900">Qualidade do Serviço</label>
                <div class="flex gap-1">
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-yellow-400 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                  <span class="text-gray-300 text-2xl">★</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Comentário -->
          <div class="bg-white rounded-2xl shadow-md p-6">
            <h2 class="text-xl font-semibold text-teal-900 mb-4">Comentário</h2>
            <label class="block text-sm font-medium text-teal-900 mb-2">Descreva a sua experiência</label>
            <textarea
              rows="6"
              placeholder="Partilhe detalhes sobre o serviço, o profissional e a sua experiência geral..."
              class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none"
            ></textarea>
            <p class="mt-2 text-sm text-teal-600">Mínimo de 50 caracteres</p>

            <div class="mt-4">
              <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" class="w-4 h-4 text-teal-600 border-teal-300 rounded focus:ring-teal-500" />
                <span class="text-sm text-teal-700">Publicar avaliação anonimamente</span>
              </label>
            </div>
          </div>

          <!-- Botões -->
          <div class="flex gap-4">
            <button
              type="button"
              class="flex-1 px-6 py-3 bg-teal-50 text-teal-700 rounded-xl font-medium hover:bg-teal-100 transition-colors"
            >
              Cancelar
            </button>
            <button
              type="submit"
              class="flex-1 px-6 py-3 bg-teal-600 text-white rounded-xl font-medium hover:bg-teal-700 transition-colors flex items-center justify-center gap-2"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              Publicar Avaliação
            </button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
