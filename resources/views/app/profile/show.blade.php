@extends('layouts.app')

@section('title', 'Perfil do Utilizador')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- Header -->
    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-teal-900 mb-2">Perfil do Utilizador</h1>
            <p class="text-teal-600">
                Visualize e gerencie as suas informações pessoais e médicas.
            </p>
        </div>
        <button
            class="flex items-center gap-2 bg-teal-600 hover:bg-teal-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors"
        >
            <i class="lucide lucide-edit w-5 h-5"></i>
            Editar Perfil
        </button>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">
        
        <!-- MAIN CONTENT -->
        <div class="lg:col-span-2 space-y-6">

            <!-- Informações Pessoais -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-teal-900 mb-6">
                    Informações Pessoais
                </h2>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-user text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Nome Completo</p>
                            <p class="text-teal-600">João Silva</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-mail text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Email</p>
                            <p class="text-teal-600">joao.silva@email.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-phone text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Telefone</p>
                            <p class="text-teal-600">+351 912 345 678</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-map-pin text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Morada</p>
                            <p class="text-teal-600">Rua das Flores, 123, Lisboa</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-calendar text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Data de Nascimento</p>
                            <p class="text-teal-600">1985-03-15</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-file-text text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">NIF</p>
                            <p class="text-teal-600">123456789</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informações Médicas -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-teal-900 mb-6">
                    Informações Médicas
                </h2>

                <div class="space-y-4">
                    <div>
                        <p class="text-sm font-medium text-teal-900">Tipo Sanguíneo</p>
                        <p class="text-teal-600">O+</p>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-teal-900">Alergias</p>
                        <p class="text-teal-600">Pólen, Amoxicilina</p>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-teal-900">Condições Médicas</p>
                        <p class="text-teal-600">Hipertensão</p>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-teal-900">Medicação Atual</p>
                        <p class="text-teal-600">Losartan 50mg</p>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-teal-900">Contacto de Emergência</p>
                        <p class="text-teal-600">Maria Silva - 915 222 333</p>
                    </div>
                </div>
            </div>

            <!-- Informações da Conta -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-teal-900 mb-6">
                    Informações da Conta
                </h2>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-shield text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Tipo de Utilizador</p>
                            <p class="text-teal-600">Patient</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <i class="lucide lucide-calendar text-teal-600 mt-0.5"></i>
                        <div>
                            <p class="text-sm font-medium text-teal-900">Membro desde</p>
                            <p class="text-teal-600">2024-01-15</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- SIDEBAR -->
        <div class="space-y-6">

            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <div
                    class="w-32 h-32 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i class="lucide lucide-user w-16 h-16 text-teal-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-teal-900 mb-1">João Silva</h3>
                <p class="text-sm text-teal-600 mb-4">Patient</p>
                <button class="text-sm text-teal-600 hover:text-teal-700 font-medium">
                    Alterar foto de perfil
                </button>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="text-lg font-semibold text-teal-900 mb-4">Estatísticas</h3>

                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-teal-600 mb-1">Serviços Totais</p>
                        <p class="text-2xl font-bold text-teal-900">24</p>
                    </div>
                    <div>
                        <p class="text-sm text-teal-600 mb-1">Avaliações Totais</p>
                        <p class="text-2xl font-bold text-teal-900">18</p>
                    </div>
                    <div class="flex items-center gap-2 mb-1">
                        <p class="text-sm text-teal-600">Avaliação Média</p>
                        <i class="lucide lucide-star w-4 h-4 text-yellow-400 fill-yellow-400"></i>
                    </div>
                    <p class="text-2xl font-bold text-teal-900">4.8</p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
