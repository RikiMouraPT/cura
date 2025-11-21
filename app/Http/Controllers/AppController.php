<?php

namespace App\Http\Controllers;

use App\Enums\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Carrega a relação profile para evitar n+1 queries
        $user->load('profile');

        // Determina se é paciente ou profissional
        // Nota: Ajusta 'patient' conforme está gravado na tua BD (ex: 'Patient' ou 'patient')
        $isPatient = strtolower($user->profile->user_type) === 'patient';

        if ($isPatient) {
            // Se for paciente, quer ver os serviços onde é o paciente
            // E quer ver os dados do Profissional associado
            $query = $user->servicesAsPatient();
        } else {
            // Se for profissional, quer ver os serviços onde é o profissional
            // E quer ver os dados do Paciente associado
            $query = $user->servicesAsProfessional();
        }

        // 1. Calcular Estatísticas
        // Clonamos a query para não interferir na lista principal
        $stats = [
            'pending' => (clone $query)->where('status', 'Pending')->count(), // Ajusta 'Pending' conforme o teu Enum
            'active' => (clone $query)->where('status', 'Accepted')->count(),
            'completed' => (clone $query)->where('status', 'Completed')->count(),
            // Exemplo de média de avaliação (opcional, requer relação reviews)
            'rating' => 4.8, 
        ];

        // 2. Buscar Lista Recente
        // Ordena por data mais recente, limita a 5 e carrega as relações para performance
        $recentServices = $query->with(['patient', 'professional'])
                                ->latest('date')
                                ->take(5)
                                ->get();

        return view('app.index', compact('recentServices', 'stats', 'isPatient'));
    }
}
