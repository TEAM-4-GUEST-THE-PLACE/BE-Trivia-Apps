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
    ];
    
    public function users() {
        return $this->hasMany(User::class, 'foreign_key')->orWhereNull('foreign_key');
    }

}
