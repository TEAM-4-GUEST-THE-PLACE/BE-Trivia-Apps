<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'avatars_id');
    }
}