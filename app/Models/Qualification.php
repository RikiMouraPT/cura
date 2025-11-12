<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'document',
    ];

    /**
     * Uma Qualificação pertence a um Utilizador (User).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}