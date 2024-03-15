<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    use HasFactory;

    protected $fillable = [
        'question',
        'options',
        'answer',
        'image'
    ];

    protected $casts = [
        'answer' => 'array'
    ];

    public function question() {
        return $this->belongsTo(Question::class);
    }
}


