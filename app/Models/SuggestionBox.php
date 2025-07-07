<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuggestionBox extends Model
{
    protected $fillable = [
        'name',
        'bagian',
        'message',
        'reply',
        'status',
        'replied_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
