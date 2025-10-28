<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cura - Editar Perfil</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="min-h-screen bg-teal-50/30">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm fixed w-full z-10 top-0 left-0">
      <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-teal-700">Cura</a>
        <div class="flex gap-6 text-teal-700 font-medium">
          <a href="/dashboard" class="hover:text-teal-900">Dashboard</a>
          <a href="/servicos" class="hover:text-teal-900">Serviços</a>
          <a href="/perfil" class="hover:text-teal-900">Perfil</a>
        </div>
      </div>
    </nav>

    <main class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-teal-900 mb-2">Editar Perfil</h1>
          <p class="text-teal-600">Atualize as suas informações pessoais e médicas.</p>
        </div>

        <form class="bg-white rounded-xl shadow-md p-8 space-y-8">
          <!-- Dados de Conta -->
          <section>
            <h2 class="text-xl font-semibold text-teal-900 mb-6 border-b border-teal-100 pb-2">
              Dados da Conta
            </h2>

            <div class="space-y-6">
              <!-- Nome -->
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2"
                  >Nome Completo <span class="text-red-500">*</span></label
                >
                <input
                  type="text"
                  value="João Silva"
                  required
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500"
                />
              </div>

              <!-- Email -->
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2"
                  >Email <span class="text-red-500">*</span></label
                >
                <input
                  type="email"
                  value="joao.silva@email.com"
                  required
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500"
                />
              </div>

              <!-- Telefone -->
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2"
                  >Telefone <span class="text-red-500">*</span></label
                >
                <input
                  type="tel"
                  value="+351 912 345 678"
                  required
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500"
                />
              </div>

              <!-- Tipo de Utilizador -->
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Tipo de Utilizador</label>
                <select
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500"
                >
                  <option>Utente</option>
                  <option>Acompanhante</option>
                  <option>Assistente Médico</option>
                  <option>Enfermeiro</option>
                  <option>Médico</option>
                </select>
              </div>
            </div>
          </section>

          <!-- Dados Pessoais -->
          <section>
            <h2 class="text-xl font-semibold text-teal-900 mb-6 border-b border-teal-100 pb-2">
              Dados Pessoais
            </h2>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Data de Nascimento</label>
                <input
                  type="date"
                  value="1985-03-15"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>

              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">NIF</label>
                <input
                  type="text"
                  maxlength="9"
                  value="123456789"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>
            </div>

            <div class="mt-6">
              <label class="block text-sm font-medium text-teal-900 mb-2">Morada</label>
              <textarea
                rows="3"
                class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 resize-none"
              >
Rua das Flores, 123, 4º Andar
1200-123 Lisboa</textarea
              >
            </div>
          </section>

          <!-- Informações Médicas -->
          <section>
            <h2 class="text-xl font-semibold text-teal-900 mb-6 border-b border-teal-100 pb-2">
              Informações Médicas
            </h2>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Tipo Sanguíneo</label>
                <input
                  type="text"
                  placeholder="Ex: O+"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>

              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Contacto de Emergência</label>
                <input
                  type="tel"
                  placeholder="+351 912 345 678"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>
            </div>

            <div class="mt-6 space-y-4">
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Alergias</label>
                <textarea
                  rows="2"
                  placeholder="Ex: Penicilina, frutos secos..."
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 resize-none"
                ></textarea>
              </div>

              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Condições Médicas</label>
                <textarea
                  rows="2"
                  placeholder="Ex: Diabetes, hipertensão..."
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 resize-none"
                ></textarea>
              </div>

              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Medicação Atual</label>
                <textarea
                  rows="2"
                  placeholder="Ex: Metformina, Ibuprofeno..."
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500 resize-none"
                ></textarea>
              </div>
            </div>
          </section>

          <!-- Palavra-passe -->
          <section>
            <h2 class="text-xl font-semibold text-teal-900 mb-6 border-b border-teal-100 pb-2">
              Alterar Palavra-passe
            </h2>
            <p class="text-sm text-teal-600 mb-4">
              Deixe os campos em branco se não pretender alterar a palavra-passe.
            </p>

            <div class="grid md:grid-cols-3 gap-4">
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Atual</label>
                <input
                  type="password"
                  placeholder="••••••••"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Nova</label>
                <input
                  type="password"
                  placeholder="••••••••"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>
              <div>
                <label class="block text-sm font-medium text-teal-900 mb-2">Confirmar</label>
                <input
                  type="password"
                  placeholder="••••••••"
                  class="w-full px-4 py-3 border border-teal-200 rounded-xl focus:ring-2 focus:ring-teal-500"
                />
              </div>
            </div>
          </section>

          <!-- Botões -->
          <div class="flex flex-col sm:flex-row gap-4 pt-4">
            <button
              type="submit"
              class="flex-1 bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 rounded-xl transition-colors"
            >
              Guardar Alterações
            </button>
            <button
              type="button"
              onclick="history.back()"
              class="flex-1 bg-teal-50 hover:bg-teal-100 text-teal-700 font-semibold py-3 rounded-xl transition-colors"
            >
              Cancelar
            </button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
