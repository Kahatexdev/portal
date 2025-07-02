<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function setGambarAttribute($value)
    {
        // kalau sudah full URL, langsung simpan
        if (str_starts_with($value, 'http')) {
            $this->attributes['images'] = $value;
        } else {
            // Storage::url → "/storage/xxx.png"
            // URL::to       → "http://host/…/storage/xxx.png"
            $this->attributes['images'] = URL::to(Storage::url($value));
        }
    }
}
