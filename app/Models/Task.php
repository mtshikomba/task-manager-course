<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'completed'
    ];

    /**
     * A task can belong to one User only
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
