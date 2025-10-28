<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detalhes do Serviço | Cura</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="min-h-screen bg-teal-50/30">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-10">
      <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-teal-700">Cura</h1>
        <div class="space-x-6 text-teal-700 font-medium">
          <a href="/servicos" class="hover:text-teal-900">Serviços</a>
          <a href="/perfil" class="hover:text-teal-900">Perfil</a>
        </div>
      </div>
    </nav>

    <!-- Conteúdo principal -->
    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-6 flex items-center justify-between">
          <div>
            <h1 class="text-3xl font-bold text-teal-900 mb-2">Detalhes do Serviço</h1>
            <p class="text-teal-600">Serviço #00123</p>
          </div>
          <span class="px-4 py-2 rounded-xl text-sm font-semibold border bg-yellow-100 text-yellow-700 border-yellow-200">
            Pendente
          </span>
        </div>

        <div class="grid lg:grid-cols-3 gap-6">
          <!-- Main Content -->
          <div class="lg:col-span-2 space-y-6">
            <!-- Service Details -->
            <div class="bg-white rounded-xl shadow-md p-6">
              <h2 class="text-xl font-semibold text-teal-900 mb-4">Informações do Serviço</h2>
              <div class="space-y-4">
                <div class="flex items-start gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600 mt-0.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12h6m-6 4h6M5 8h14M5 4h14a2 2 0 012 2v2H3V6a2 2 0 012-2zM3 10h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z" />
                  </svg>
                  <div>
                    <p class="text-sm font-medium text-teal-900">Tipo de Serviço</p>
                    <p class="text-teal-600">Enfermagem</p>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600 mt-0.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10m-11 8h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                  <div>
                    <p class="text-sm font-medium text-teal-900">Data</p>
                    <p class="text-teal-600">2025-01-25</p>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600 mt-0.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <div>
                    <p class="text-sm font-medium text-teal-900">Hora e Duração</p>
                    <p class="text-teal-600">14:00 • 2 horas</p>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600 mt-0.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 11c0 .552-.448 1-1 1s-1-.448-1-1a1 1 0 112 0zm0 0a9 9 0 11-6.364 2.636A9 9 0 0112 11z" />
                  </svg>
                  <div>
                    <p class="text-sm font-medium text-teal-900">Localização</p>
                    <p class="text-teal-600 whitespace-pre-line">
                      Rua das Flores, 123, 4º Andar
                      <br />
                      1200-123 Lisboa
                    </p>
                  </div>
                </div>

                <div class="pt-4 border-t border-teal-100">
                  <p class="text-sm font-medium text-teal-900 mb-2">Notas Adicionais</p>
                  <p class="text-teal-600">
                    Paciente com mobilidade reduzida. Necessário cuidados especiais com medicação.
                  </p>
                </div>
              </div>
            </div>

            <!-- Professional Info -->
            <div class="bg-white rounded-xl shadow-md p-6">
              <h2 class="text-xl font-semibold text-teal-900 mb-4">Profissional Atribuído</h2>
              <div class="space-y-4">
                <div class="flex items-center gap-4">
                  <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-teal-600" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <div class="flex-1">
                    <h3 class="font-semibold text-teal-900">Ana Costa</h3>
                    <p class="text-sm text-teal-600">Enfermagem Geriátrica</p>
                    <div class="flex items-center gap-1 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400 fill-yellow-400"
                        viewBox="0 0 24 24">
                        <path
                          d="M12 .587l3.668 7.429 8.2 1.192-5.934 5.782 1.402 8.178L12 18.896l-7.336 3.872 1.402-8.178L.132 9.208l8.2-1.192z" />
                      </svg>
                      <span class="text-sm font-medium text-teal-900">4.8</span>
                    </div>
                  </div>
                </div>

                <div class="space-y-3 pt-4 border-t border-teal-100">
                  <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5h2l3 7v5h8v-5l3-7h2" />
                    </svg>
                    <a href="tel:+351912345678" class="text-teal-600 hover:text-teal-700">+351 912 345 678</a>
                  </div>
                  <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-600" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 12H8m0 0l8 8m-8-8l8-8" />
                    </svg>
                    <a href="mailto:ana.costa@saude.pt" class="text-teal-600 hover:text-teal-700">ana.costa@saude.pt</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Sidebar -->
          <div class="space-y-6">
            <!-- Price Card -->
            <div class="bg-white rounded-xl shadow-md p-6">
              <h3 class="text-sm font-medium text-teal-900 mb-2">Valor Total</h3>
              <p class="text-3xl font-bold text-teal-700">€90</p>
              <p class="text-sm text-teal-600 mt-1">IVA incluído</p>
            </div>

            <!-- Actions -->
            <div class="bg-white rounded-xl shadow-md p-6 space-y-3">
              <h3 class="text-sm font-medium text-teal-900 mb-3">Ações</h3>
              <button
                class="w-full flex items-center justify-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-xl transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12l4-4m0 0l-4-4m4 4H9m13 8h-6m0 0l4-4m-4 4l4 4" />
                </svg>
                Editar
              </button>

              <button
                class="w-full flex items-center justify-center gap-2 bg-red-50 hover:bg-red-100 text-red-600 font-semibold py-3 rounded-xl transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3m-9 0h10" />
                </svg>
                Cancelar Serviço
              </button>

              <a href="/servicos"
                class="block w-full text-center bg-teal-50 hover:bg-teal-100 text-teal-700 font-semibold py-3 rounded-xl transition-colors">
                Voltar
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
