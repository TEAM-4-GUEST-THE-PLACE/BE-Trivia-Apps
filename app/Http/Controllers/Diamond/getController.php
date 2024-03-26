<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Diamond;
use App\Models\Diamonds;

class getController extends Controller
{
    public function getDiamond()
    {
        //get all posts
        $posts = Diamonds::all();

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }
}
