<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Diamond;
use App\Models\Diamonds;
use Illuminate\Support\Facades\Storage;

class deleteController extends Controller
{
     /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function removeDiamond($id)
    {

        //find post by ID
        $post = Diamonds::find($id);

        //delete image
        Storage::delete('public/posts/'.basename($post->image));

        //delete post
        $post->delete();

        //return response
        return new PostResource(true, 'Diamond Berhasil Dikurangi !', null);
    }
}
