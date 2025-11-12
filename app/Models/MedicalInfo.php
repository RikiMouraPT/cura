<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blood_type',
        'allergies',
        'medical_conditions',
        'current_medications',
        'emergency_contact',
    ];

    /**
     * A informação médica pertence a um Utilizador (User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}