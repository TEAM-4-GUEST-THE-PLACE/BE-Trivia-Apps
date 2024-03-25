<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Diamond;
use App\Models\Diamonds;
use App\Models\Post;
use Illuminate\Http\Request;

class detailController extends Controller
{
    public function detailDiamond($id)
    {
        $post = Diamonds::find($id);
        return new PostResource(true, 'Detail diamond!', $post);
    }
}
