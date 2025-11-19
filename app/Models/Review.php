<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'user_id',
        'rating',
        'comment',
    ];

    /**
     * Define os casts para atributos específicos.
     */
    protected $casts = [
        'rating' => 'integer',
    ];

    /**
     * Uma Avaliação (Review) pertence a um Serviço (Service).
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Uma Avaliação (Review) pertence a um Utilizador.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}