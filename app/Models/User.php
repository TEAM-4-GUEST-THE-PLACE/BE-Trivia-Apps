<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'username',
        'email',
        'diamonds_totals',
        'avatars_id'
    ];

    public function posts()
    {
        return $this->hasMany(Diamonds::class);
    }

    public function avatar()
    {
        return $this->hasMany(Avatar::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
