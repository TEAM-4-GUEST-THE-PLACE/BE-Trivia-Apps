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
        'answer',
        'answerTrue',
        'answerFalse',
        'image'
    ];

    protected $casts = [
        'answer' => 'array'
    ];


    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/questionImage/' . $image),
        );
    }
}


