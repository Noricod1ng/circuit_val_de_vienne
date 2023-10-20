<?php

namespace App\Models;

use App\Events\TourCreated;
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
        'category_id',
    ];

    protected $dispatchesEvents = [
        'created' => TourCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
