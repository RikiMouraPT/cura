<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/terms-of-service', function () {
    return view('legal.terms-of-service');
})->name('terms-of-service');
Route::get('/privacy-policy', function () {
    return view('legal.privacy-policy');
})->name('privacy-policy');
Route::get('/cookie-policy', function () {
    return view('legal.cookie-policy');
})->name('cookie-policy');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});


use Carbon\Carbon; // Importa a classe Carbon no topo do teu ficheiro de rotas

Route::get('/app', function () {

    $fakeServices = [
        (object) [
            'id' => 1,
            'type' => 'Enfermagem',
            'status' => 'pendente',
            'date' => Carbon::parse('2025-01-25 14:00'),
            'professional' => (object) [
                'name' => 'Ana Costa'
            ]
        ],
        (object) [
            'id' => 2,
            'type' => 'Auxiliar',
            'status' => 'ativo',
            'date' => Carbon::parse('2025-01-23 10:00'),
            'professional' => (object) [
                'name' => 'João Silva'
            ]
        ],
        (object) [
            'id' => 3,
            'type' => 'Médico',
            'status' => 'completado',
            'date' => Carbon::parse('2025-01-20 16:30'),
            'professional' => (object) [
                'name' => 'Dr. Pedro Santos'
            ]
        ],
    ];
    
    $user = auth()->user();

    $notifications = $user
        ? $user->notifications()->latest()->limit(10)->get()
        : collect();

    return view('app.index', [
        'recentServices' => $fakeServices,
        'notifications'  => $notifications,
    ]);

})->name('app.index');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('service', ServiceController::class)->names('app.service');
Route::resource('profile', ProfileController::class)->names('app.profile');
Route::resource('review', ReviewController::class)->names('app.review');


/*Route::middleware('auth')->prefix('app')->group(function () {
    Route::get('/app', fn() => view('app.index'))->name('app.index');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('service', ServiceController::class)->names('app.service');
    Route::resource('profile', ProfileController::class)->names('app.profile');
    Route::resource('review', ReviewController::class)->names('app.review');
});*/