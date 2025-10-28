<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Novo Serviço - Cura</title>
  <script src="https://unpkg.com/lucide/dist/lucide.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', () => lucide.replace())
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-teal-50/30">
  <!-- Navbar Placeholder -->
  <nav class="bg-teal-600 text-white p-4">
    <h1 class="text-xl font-bold">Cura - Plataforma de Cuidados Domiciliários</h1>
  </nav>

  <main class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-teal-900 mb-2">Criar Novo Serviço</h1>
        <p class="text-teal-600">Preencha os dados para criar um novo serviço de saúde domiciliar.</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-8">
        <form class="space-y-6">
          <!-- Tipo de Serviço -->
          <div>
            <label class="block text-sm font-medium text-teal-900 mb-2">
              Tipo de Serviço <span class="text-red-500">*</span>
            </label>
            <select required class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
              <option value="">Selecione o tipo de serviço</option>
              <option value="auxiliar">Auxiliar de Saúde - €25/hora</option>
              <option value="enfermagem">Enfermagem - €45/hora</option>
              <option value="medico">Consulta Médica - €80/hora</option>
              <option value="fisioterapia">Fisioterapia - €50/hora</option>
              <option value="nutricao">Nutrição - €60/hora</option>
              <option value="psicologia">Psicologia - €70/hora</option>
            </select>
          </div>

          <!-- Data e Hora -->
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-teal-900 mb-2">
                Data <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <i data-lucide="calendar" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400"></i>
                <input type="date" required class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-teal-900 mb-2">
                Hora <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <i data-lucide="clock" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400"></i>
                <input type="time" required class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
              </div>
            </div>
          </div>

          <!-- Duração -->
          <div>
            <label class="block text-sm font-medium text-teal-900 mb-2">
              Duração Estimada <span class="text-red-500">*</span>
            </label>
            <select required class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
              <option value="">Selecione a duração</option>
              <option value="1">1 hora</option>
              <option value="2">2 horas</option>
              <option value="3">3 horas</option>
              <option value="4">4 horas</option>
              <option value="6">6 horas</option>
              <option value="8">8 horas</option>
            </select>
          </div>

          <!-- Localização -->
          <div>
            <label class="block text-sm font-medium text-teal-900 mb-2">
              Localização <span class="text-red-500">*</span>
            </label>
            <div class="relative">
              <i data-lucide="map-pin" class="absolute left-3 top-3 w-5 h-5 text-teal-400"></i>
              <textarea required rows="3" placeholder="Morada completa onde o serviço será prestado" class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none"></textarea>
            </div>
          </div>

          <!-- Notas Adicionais -->
          <div>
            <label class="block text-sm font-medium text-teal-900 mb-2">Notas Adicionais</label>
            <div class="relative">
              <i data-lucide="file-text" class="absolute left-3 top-3 w-5 h-5 text-teal-400"></i>
              <textarea rows="4" placeholder="Informações adicionais relevantes para o profissional de saúde" class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none"></textarea>
            </div>
          </div>

          <!-- Preço Estimado -->
          <div class="bg-teal-50 border border-teal-200 rounded-xl p-6">
            <div class="flex items-center gap-3 mb-2">
              <i data-lucide="dollar-sign" class="w-6 h-6 text-teal-600"></i>
              <h3 class="text-lg font-semibold text-teal-900">Preço Estimado</h3>
            </div>
            <p class="text-3xl font-bold text-teal-700">€0<span class="text-lg font-normal text-teal-600">/hora</span></p>
            <p class="text-sm text-teal-600 mt-2">O preço final pode variar consoante a duração e complexidade do serviço.</p>
          </div>

          <!-- Botões -->
          <div class="flex flex-col sm:flex-row gap-4 pt-4">
            <button type="submit" class="flex-1 flex items-center justify-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-xl transition-colors">
              <i data-lucide="plus" class="w-5 h-5"></i>
              Criar Serviço
            </button>
            <button type="button" class="flex-1 bg-teal-50 hover:bg-teal-100 text-teal-700 font-semibold py-3 rounded-xl transition-colors">
              Cancelar
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>
