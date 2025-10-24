<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo - Saúde Domiciliar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#0f766e">
</head>
<!-- Updated to gradient background and added py-12 for spacing -->
<body class="bg-gradient-to-br from-teal-400 to-teal-900 min-h-screen py-12 px-4">
    <div class="max-w-3xl mx-auto">

        <!-- Updated card styling -->
        <div class="bg-white rounded-2xl shadow-md p-8">
            <!-- Updated header with link to home -->
        <div class="text-center mb-8">
            <a href="index.html" class="inline-flex items-center justify-center w-14 h-14 bg-teal-600 rounded-xl mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-bold text-teal-900 mb-2">Criar Conta</h1>
            <p class="text-teal-600">Junte-se à nossa plataforma</p>
        </div>
            <form id="registerForm" class="space-y-8">
                <!-- Added user type selection -->
                <div>
                    <label class="block text-sm font-medium text-teal-900 mb-3">Tipo de Utilizador</label>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                        <button type="button" class="user-type-btn py-3 px-4 rounded-xl font-medium transition-all bg-teal-600 text-white shadow-md" data-type="utente">Utente</button>
                        <button type="button" class="user-type-btn py-3 px-4 rounded-xl font-medium transition-all bg-teal-50 text-teal-700 hover:bg-teal-100" data-type="acompanhante">Acompanhante</button>
                        <button type="button" class="user-type-btn py-3 px-4 rounded-xl font-medium transition-all bg-teal-50 text-teal-700 hover:bg-teal-100" data-type="auxiliar">Auxiliar</button>
                        <button type="button" class="user-type-btn py-3 px-4 rounded-xl font-medium transition-all bg-teal-50 text-teal-700 hover:bg-teal-100" data-type="enfermeiro">Enfermeiro</button>
                        <button type="button" class="user-type-btn py-3 px-4 rounded-xl font-medium transition-all bg-teal-50 text-teal-700 hover:bg-teal-100" data-type="medico">Médico</button>
                    </div>
                    <input type="hidden" id="userType" value="utente" required>
                </div>

                <!-- Added section header and improved layout -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-teal-900">Dados Pessoais</h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-teal-900 mb-2">Nome Completo</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <input type="text" id="name" required placeholder="João Silva"
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>

                        <div>
                            <label for="birthDate" class="block text-sm font-medium text-teal-900 mb-2">Data de Nascimento</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <input type="date" id="birthDate" required
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-teal-900 mb-2">Email</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <input type="email" id="email" required placeholder="joao@email.com"
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-teal-900 mb-2">Telemóvel</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <input type="tel" id="phone" required placeholder="+351 912 345 678"
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-teal-900 mb-2">Morada</label>
                        <div class="relative">
                            <svg class="absolute left-3 top-3 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <textarea id="address" required rows="2" placeholder="Rua, Número, Código Postal, Cidade"
                                class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent resize-none transition-all"></textarea>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="nif" class="block text-sm font-medium text-teal-900 mb-2">NIF</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                <input type="text" id="nif" required placeholder="123456789"
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Added professional documents section (hidden by default) -->
                <div id="professionalDocs" class="space-y-4 hidden">
                    <h3 class="text-lg font-semibold text-teal-900">Documentos Profissionais</h3>
                    <div class="border-2 border-dashed border-teal-200 rounded-xl p-6 text-center hover:border-teal-400 transition-colors cursor-pointer">
                        <svg class="w-8 h-8 text-teal-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <p class="text-sm text-teal-700 font-medium mb-1">Carregar licenças e comprovativos</p>
                        <p class="text-xs text-teal-500">PDF, JPG ou PNG até 10MB</p>
                        <input type="file" multiple accept=".pdf,.jpg,.jpeg,.png" class="hidden">
                    </div>
                </div>

                <!-- Added security section header -->
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-teal-900">Segurança</h3>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-sm font-medium text-teal-900 mb-2">Palavra-passe</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <input type="password" id="password" required placeholder="••••••••"
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>

                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-teal-900 mb-2">Confirmar Palavra-passe</label>
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                <input type="password" id="confirmPassword" required placeholder="••••••••"
                                    class="w-full pl-11 pr-4 py-3 border border-teal-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Updated button layout -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button type="submit" id="registerBtn"
                        class="flex-1 bg-teal-600 hover:bg-teal-700 focus:bg-teal-700 text-white font-semibold py-3 rounded-xl transition-colors focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 disabled:opacity-50">
                        Registar
                    </button>
                    <a href="{{ route('landing') }}"
                        class="flex-1 bg-teal-50 hover:bg-teal-100 text-teal-700 font-semibold py-3 rounded-xl transition-colors text-center">
                        Cancelar
                    </a>
                </div>
            </form>

            <!-- Updated footer text -->
            <div class="mt-6 text-center">
                <p class="text-sm text-teal-600">
                    Já tem conta?
                    <a href="{{ route('login') }}" class="font-semibold text-teal-700 hover:text-teal-800 transition-colors">
                        Entrar
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // User type selection
        document.querySelectorAll('.user-type-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.user-type-btn').forEach(b => {
                    b.classList.remove('bg-teal-600', 'text-white', 'shadow-md');
                    b.classList.add('bg-teal-50', 'text-teal-700');
                });
                this.classList.remove('bg-teal-50', 'text-teal-700');
                this.classList.add('bg-teal-600', 'text-white', 'shadow-md');
                document.getElementById('userType').value = this.dataset.type;
                
                // Show/hide professional documents section
                const isProfessional = ['auxiliar', 'enfermeiro', 'medico'].includes(this.dataset.type);
                document.getElementById('professionalDocs').classList.toggle('hidden', !isProfessional);
            });
        });

        // Handle registration with loading state
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = document.getElementById('registerBtn');
            btn.disabled = true;
            btn.textContent = 'A registar...';
            
            setTimeout(() => {
                window.location.href = 'dashboard.html';
            }, 2000);
        });
    </script>
</body>
</html>
