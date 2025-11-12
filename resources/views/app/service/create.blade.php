<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agendar Serviço - Cura</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-teal-50/30">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 bg-white shadow z-50">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-teal-700">Cura</h1>
        <div class="space-x-4">
          <a href="/" class="text-teal-700 hover:text-teal-900 font-medium">Início</a>
          <a href="/servicos" class="text-teal-700 hover:text-teal-900 font-medium">Serviços</a>
          <a href="/avaliacoes" class="text-teal-700 hover:text-teal-900 font-medium">Avaliações</a>
        </div>
      </div>
    </nav>

    <!-- Conteúdo -->
    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="mb-8 text-center">
          <h1 class="text-3xl font-bold text-teal-900 mb-2">Agendar Serviço</h1>
          <p class="text-teal-600">
            Preencha os dados para agendar um novo serviço de saúde domiciliar.
          </p>
        </div>

        <!-- Formulário -->
        <div class="bg-white rounded-xl shadow-md p-8">
          <form class="space-y-6">
            <!-- Tipo de Serviço -->
            <div>
              <label class="block text-sm font-medium text-teal-900 mb-2">Tipo de Serviço</label>
              <select
                required
                class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
              >
                <option value="">Selecione o tipo de serviço</option>
                <option>Auxiliar de Saúde - €25/hora</option>
                <option>Enfermagem - €45/hora</option>
                <option>Consulta Médica - €80/hora</option>
                <option>Fisioterapia - €50/hora</option>
              </select>
            </div>

            <!-- Data e Hora -->
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Data</label>
                <div class="relative">
                  <input
                    type="date"
                    required
                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                  />
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                </div>
              </div>

              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Hora</label>
                <div class="relative">
                  <input
                    type="time"
                    required
                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                  />
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4l3 3m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </div>
            </div>

            <!-- Localização -->
            <div>
              <label class="block text-sm font-medium text-teal-900 mb-2">Localização</label>
              <div class="relative">
                <textarea
                  rows="3"
                  placeholder="Morada completa onde o serviço será prestado"
                  required
                  class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none"
                ></textarea>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="absolute left-3 top-3 w-5 h-5 text-teal-400"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 11c1.656 0 3-1.343 3-3s-1.344-3-3-3-3 1.343-3 3 1.344 3 3 3zM12 22s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z" />
                </svg>
              </div>
            </div>

            <!-- Notas Adicionais -->
            <div>
              <label class="block text-sm font-medium text-teal-900 mb-2">Notas Adicionais (opcional)</label>
              <div class="relative">
                <textarea
                  rows="4"
                  placeholder="Informações adicionais relevantes para o profissional de saúde"
                  class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none"
                ></textarea>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="absolute left-3 top-3 w-5 h-5 text-teal-400"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6M5 8h14M5 4h14M5 16h14M5 20h14" />
                </svg>
              </div>
            </div>

            <!-- Preço Estimado -->
            <div class="bg-teal-50 border border-teal-200 rounded-xl p-6">
              <div class="flex items-center gap-3 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-4.418 0-8 1.79-8 4v4h16v-4c0-2.21-3.582-4-8-4zm0-4c1.104 0 2 .896 2 2s-.896 2-2 2-2-.896-2-2 .896-2 2-2z" />
                </svg>
                <h3 class="text-lg font-semibold text-teal-900">Preço Estimado</h3>
              </div>
              <p class="text-3xl font-bold text-teal-700">
                €45<span class="text-lg font-normal text-teal-600">/hora</span>
              </p>
              <p class="text-sm text-teal-600 mt-2">
                O preço final pode variar consoante a duração e complexidade do serviço.
              </p>
            </div>

            <!-- Botões -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
              <button
                type="submit"
                class="flex-1 bg-teal-600 hover:bg-teal-700 focus:bg-teal-700 text-white font-semibold py-3 rounded-xl transition-colors focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2"
              >
                Confirmar Agendamento
              </button>
              <button
                type="button"
                class="flex-1 bg-teal-50 hover:bg-teal-100 text-teal-700 font-semibold py-3 rounded-xl transition-colors"
              >
                Cancelar
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
