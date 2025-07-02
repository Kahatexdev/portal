<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuggestionBox extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'message',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
