<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function AddDiamond(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
            'amount'     => 'required',
            'price'   => 'required',
        ]);



        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = Post::create([
            'image'    => $image->hashName(),
            'amount'  => $request->amount,
            'price'   => $request->price,
        ]);
        

        
        //return response
        return new PostResource(true, 'Diamond Berhasil Ditambahkan!', $post);
    }
}
