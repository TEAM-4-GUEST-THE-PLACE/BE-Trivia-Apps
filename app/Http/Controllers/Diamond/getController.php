<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class getController extends Controller
{
    public function getDiamond()
    {
        //get all posts
        $posts = Post::all();

        //return collection of posts as a resource
        return new PostResource(true, 'List Data Posts', $posts);
    }
}
