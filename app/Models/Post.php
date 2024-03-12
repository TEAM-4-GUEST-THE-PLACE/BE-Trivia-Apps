<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'amount',
        'price',
    ];

    /**
     * image
     *
     * @return Attribute
     */

     public function post() {
        return $this->belongsTo(Post::class);
    }
}
