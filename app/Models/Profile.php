<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'profile_photo',
        'user_type',
        'birth_date',
        'address',
        'tax_id',
        'social_security_number',
    ];

    /**
     * Define os casts para atributos específicos.
     */
    protected $casts = [
        'birth_date' => 'date',
    ];

    /**
     * Um Perfil pertence a um Utilizador (User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}