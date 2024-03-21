<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'diamond_id',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function diamond()
    {
        return $this->hasMany(Diamonds::class);
    }
}
