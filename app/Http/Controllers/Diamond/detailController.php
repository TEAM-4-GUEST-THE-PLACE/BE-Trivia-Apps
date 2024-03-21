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
    
    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function detailDiamond($id)
    {
        //find post by ID
        $post = Diamonds::find($id);

        //return single post as a resource
        return new PostResource(true, 'Detail diamond!', $post);
    }
}
