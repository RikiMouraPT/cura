<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use App\Enums\UserType;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Diretiva para verificar se é Utente: @patient ... @endpatient
        Blade::if('patient', function () {
            $user = Auth::user();
            return $user && $user->profile && $user->profile->user_type === 'patient';
        });

        // Diretiva para verificar se é Acompanhante: @companion ... @endcompanion
        Blade::if('companion', function () {
            $user = Auth::user();
            return $user && $user->profile && $user->profile->user_type === UserType::COMPANION->value;
        });

        // Diretiva para verificar se é Utente ou Acompanhante: @patientOrCompanion ... @endpatientOrCompanion
        Blade::if('patientOrCompanion', function () {
            $user = Auth::user();
            $clients = ['patient', 'companion'];
            return $user && $user->profile && in_array($user->profile->user_type, $clients);
        });

        // Diretiva para verificar se é Profissional: @professional ... @endprofessional
        Blade::if('professional', function () {
            $user = Auth::user();
            $professions = [
                UserType::DOCTOR->value,
                UserType::NURSE->value,
                UserType::MEDICAL_ASSISTANT->value,
            ];

            return $user && $user->profile && in_array($user->profile->user_type, $professions);
        });

    }
}
