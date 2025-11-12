<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'active',
    ];

    /**
     * Define os casts para atributos específicos.
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Uma configuração de Notificação pertence a um Utilizador (User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}