@extends('app.layout.app')

@section('title', 'Dashboard')

@section('content')

    <div class="max-w-7xl mx-auto">

        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-teal-900">Dashboard</h1>
                    <p class="text-teal-600 mt-1">Bem-vindo de volta! Aqui está o resumo dos seus serviços.</p>
                </div>
                <a href="{{ route('app.service.create') }}" class="w-full sm:w-auto px-5 py-2.5 bg-teal-600 text-white font-medium rounded-lg shadow-md hover:bg-teal-700 transition-colors text-center">
                    Agendar Novo Serviço
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="p-3 rounded-xl bg-teal-50 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                </div>
                <p class="text-3xl font-bold text-teal-900 mb-1">3</p>
                <p class="text-sm text-teal-600">Serviços Pendentes</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="p-3 rounded-xl bg-teal-100 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <p class="text-3xl font-bold text-teal-900 mb-1">2</p>
                <p class="text-sm text-teal-600">Serviços Ativos</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="p-3 rounded-xl bg-teal-200 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 13l4 4L19 7"/></svg>
                </div>
                <p class="text-3xl font-bold text-teal-900 mb-1">24</p>
                <p class="text-sm text-teal-600">Serviços Completados</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="p-3 rounded-xl bg-teal-300 mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-900" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 17l6-6 4 4 8-8"/></svg>
                </div>
                <p class="text-3xl font-bold text-teal-900 mb-1">4.8</p>
                <p class="text-sm text-teal-600">Avaliação Média</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-teal-900">Histórico de Serviços</h2>
                <a href="/servicos" class="text-sm font-medium text-teal-600 hover:text-teal-700">Ver todos →</a>
            </div>

            {{-- 
                NOTA: Assumi que agora estás a passar uma variável $recentServices do teu controller.
                Ex: return view('dashboard', ['recentServices' => $services]);
            --}}
            
            <div class="lg:hidden space-y-4">
                @foreach($recentServices as $service)
                    <a href="{{ route('app.service.show', $service) }}" class="block border border-teal-100 rounded-xl p-4 space-y-3 hover:bg-teal-50/50 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-teal-900">{{ $service->type }}</span>
                            
                            @if($service->status === 'pendente')
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pendente</span>
                            @elseif($service->status === 'ativo')
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700">Ativo</span>
                            @elseif($service->status === 'completado')
                                <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Completado</span>
                            @endif
                        </div>
                        <div class="space-y-2 text-sm text-teal-600">
                            <p><strong>Data:</strong> {{ $service->date->format('Y-m-d') }}</p>
                            <p><strong>Hora:</strong> {{ $service->date->format('H:i') }}</p>
                            <p><strong>Profissional:</strong> {{ $service->professional->name }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="hidden lg:block overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-teal-100">
                            <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Tipo</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Data</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Hora</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Profissional</th>
                            <th class="text-left py-3 px-4 text-sm font-semibold text-teal-900">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentServices as $service)
                            <tr class="border-b border-teal-50 hover:bg-teal-50/50 transition-colors cursor-pointer"
                                onclick="window.location='{{ route('app.service.show', $service) }}'">
                                
                                <td class="py-4 px-4 text-teal-900 font-medium">{{ $service->type }}</td>
                                <td class="py-4 px-4 text-teal-600">{{ $service->date->format('Y-m-d') }}</td>
                                <td class="py-4 px-4 text-teal-600">{{ $service->date->format('H:i') }}</td>
                                <td class="py-4 px-4 text-teal-600">{{ $service->professional->name }}</td>
                                <td class="py-4 px-4">
                                    @if($service->status === 'pendente')
                                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pendente</span>
                                    @elseif($service->status === 'ativo')
                                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-teal-100 text-teal-700">Ativo</span>
                                    @elseif($service->status === 'completado')
                                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Completado</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection