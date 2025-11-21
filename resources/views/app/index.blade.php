@extends('app.layout.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- Cabeçalho -->
    <div class="mb-8">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-teal-900">Dashboard</h1>
                <p class="text-teal-600 mt-1">Bem-vindo, {{ Auth::user()->name }}!</p>
            </div>
            
            {{-- Apenas Utentes costumam agendar, mas podes remover o IF se quiseres --}}
            @if($isPatient)
            <a href="{{ route('app.service.create') }}" class="w-full sm:w-auto px-5 py-2.5 bg-teal-600 text-white font-medium rounded-lg shadow-md hover:bg-teal-700 transition-colors text-center flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Agendar Serviço
            </a>
            @endif
        </div>
    </div>

    <!-- Estatísticas Dinâmicas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <!-- Pendentes -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-400">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 rounded-xl bg-yellow-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                </div>
                <span class="text-3xl font-bold text-teal-900">{{ $stats['pending'] }}</span>
            </div>
            <p class="text-sm font-medium text-gray-500">Serviços Pendentes</p>
        </div>

        <!-- Ativos -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-teal-500">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 rounded-xl bg-teal-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <span class="text-3xl font-bold text-teal-900">{{ $stats['active'] }}</span>
            </div>
            <p class="text-sm font-medium text-gray-500">Serviços Aceites/Ativos</p>
        </div>

        <!-- Completados -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 rounded-xl bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"/></svg>
                </div>
                <span class="text-3xl font-bold text-teal-900">{{ $stats['completed'] }}</span>
            </div>
            <p class="text-sm font-medium text-gray-500">Serviços Completados</p>
        </div>

        <!-- Avaliação (Exemplo) -->
        <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-400">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 rounded-xl bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                </div>
                <span class="text-3xl font-bold text-teal-900">4.8</span>
            </div>
            <p class="text-sm font-medium text-gray-500">Avaliação Média</p>
        </div>
    </div>

    <!-- Lista de Serviços -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="flex items-center justify-between p-6 border-b border-gray-100">
            <h2 class="text-xl font-semibold text-teal-900">Serviços Recentes</h2>
            <a href="/servicos" class="text-sm font-medium text-teal-600 hover:text-teal-700 flex items-center gap-1">
                Ver todos 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </a>
        </div>

        @if($recentServices->isEmpty())
            <div class="p-8 text-center text-gray-500">
                <p>Ainda não existem serviços registados.</p>
            </div>
        @else
            
            <!-- Layout Mobile (Cards) -->
            <div class="lg:hidden">
                @foreach($recentServices as $service)
                    <a href="{{ route('app.service.show', $service->id) }}" class="block p-4 border-b border-gray-100 hover:bg-teal-50 transition-colors">
                        <div class="flex justify-between items-start mb-2">
                            <span class="font-semibold text-teal-900">{{ $service->service_type }}</span>
                            @include('app.partials.status-badge', ['status' => $service->status])
                        </div>
                        <div class="text-sm text-gray-600 space-y-1">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $service->date ? $service->date->format('d/m/Y') : 'Data n/d' }} às {{ $service->time ? $service->time->format('H:i') : '--:--' }}
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                {{-- Se sou paciente, mostro o profissional. Se sou profissional, mostro o paciente --}}
                                @if($isPatient)
                                    {{ $service->professional ? $service->professional->name : 'A aguardar profissional' }}
                                @else
                                    {{ $service->patient ? $service->patient->name : 'Paciente Desconhecido' }}
                                @endif
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Layout Desktop (Tabela) -->
            <div class="hidden lg:block overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data & Hora</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ $isPatient ? 'Profissional' : 'Utente' }}
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                            <th class="px-6 py-3 text-right"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach($recentServices as $service)
                            <tr class="hover:bg-teal-50/30 transition-colors cursor-pointer" onclick="window.location='{{ route('app.service.show', $service->id) }}'">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $service->service_type }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    {{ $service->date ? $service->date->format('d/m/Y') : '' }} 
                                    <span class="text-gray-400 mx-1">|</span> 
                                    {{ $service->time ? $service->time->format('H:i') : '' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    {{-- Lógica condicional de nomes --}}
                                    @if($isPatient)
                                        {{ $service->professional ? $service->professional->name : '-' }}
                                    @else
                                        {{ $service->patient ? $service->patient->name : '-' }}
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($service->status === 'Pending')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pendente</span>
                                    @elseif($service->status === 'Accepted')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-teal-100 text-teal-800">Aceite</span>
                                    @elseif($service->status === 'Completed')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Concluído</span>
                                    @elseif($service->status === 'Cancelled')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Cancelado</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <span class="text-teal-600 hover:text-teal-900">Ver detalhes &rarr;</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>


@endsection