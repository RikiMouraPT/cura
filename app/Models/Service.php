<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'professional_id',
        'service_type',
        'report',
        'date',
        'time',
        'location',
        'price',
        'status',
    ];

    /**
     * Define os casts para atributos específicos.
     */
    protected $casts = [
        'date' => 'date',
        'time' => 'datetime:H:i', // Cast para string - "14:35"
        'price' => 'decimal:2',
    ];

    /**
     * Um Serviço pertence a um Paciente (User).
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    /**
     * Um Serviço pertence a um Profissional (User).
     * Esta relação pode ser nula.
     */
    public function professional(): BelongsTo
    {
        return $this->belongsTo(User::class, 'professional_id');
    }

    /**
     * Um Serviço pode ter várias Avaliações (Reviews).
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}