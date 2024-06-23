<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Appeal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'numberPhone', 'appl'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
