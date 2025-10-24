<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cura — Plataforma de Cuidados Domiciliários</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-6 py-4 shadow-sm">
    <div class="flex items-center space-x-2">
      <div class="bg-teal-600 text-white font-bold rounded-lg px-3 py-2">Cura</div>
      <span class="text-teal-700 font-semibold hidden sm:block">Plataforma de Cuidados</span>
    </div>
    <div>
      <a href="/login" class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition">
        Login
      </a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="flex flex-col items-center text-center px-6 py-20 bg-teal-50">
    <h1 class="text-4xl sm:text-5xl font-bold text-teal-700 mb-4">
      Cuidar de quem precisa, nunca foi tão simples.
    </h1>
    <p class="text-lg text-gray-600 max-w-2xl mb-8">
      A <strong>Cura</strong> é a plataforma que conecta utentes, acompanhantes e profissionais de saúde, 
      promovendo cuidados domiciliários mais humanos, organizados e eficientes.
    </p>
    <a href="/register" class="bg-teal-600 text-white px-6 py-3 rounded-lg text-lg hover:bg-teal-700 transition">
      Criar Conta
    </a>
  </section>

  <!-- Features Section -->
  <section class="px-6 py-16 max-w-6xl mx-auto grid md:grid-cols-3 gap-10">
    <div class="bg-white shadow-sm rounded-2xl p-6 text-center hover:shadow-md transition">
      <div class="text-teal-600 text-4xl mb-3">👩‍⚕️</div>
      <h3 class="font-semibold text-xl mb-2">Ligação com Profissionais</h3>
      <p class="text-gray-600">
        Encontre cuidadores e profissionais de saúde verificados para cada necessidade de forma rápida e segura.
      </p>
    </div>

    <div class="bg-white shadow-sm rounded-2xl p-6 text-center hover:shadow-md transition">
      <div class="text-teal-600 text-4xl mb-3">🏠</div>
      <h3 class="font-semibold text-xl mb-2">Cuidados em Casa</h3>
      <p class="text-gray-600">
        Organize visitas, tarefas e tratamentos sem sair de casa — tudo na mesma plataforma.
      </p>
    </div>

    <div class="bg-white shadow-sm rounded-2xl p-6 text-center hover:shadow-md transition">
      <div class="text-teal-600 text-4xl mb-3">📅</div>
      <h3 class="font-semibold text-xl mb-2">Gestão de Rotinas</h3>
      <p class="text-gray-600">
        Agende e acompanhe atividades diárias, com lembretes e partilha em tempo real com familiares.
      </p>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-teal-600 text-white py-16 text-center px-6">
    <h2 class="text-3xl font-semibold mb-4">Pronto para começar?</h2>
    <p class="text-teal-100 mb-8">Junte-se à Cura e simplifique os cuidados domiciliários.</p>
    <a href="/register" class="bg-white text-teal-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
      Criar Conta
    </a>
  </section>

  <!-- Footer -->
  <footer class="py-8 text-center text-gray-500 text-sm">
    © 2025 Cura — Plataforma de Cuidados Domiciliários. Todos os direitos reservados.
  </footer>

</body>
</html>
