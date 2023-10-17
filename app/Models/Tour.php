<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'car',
        'session_number',
    ];

    public function user(): BelongsTo

    {

        return $this->belongsTo(User::class);

    }
}
