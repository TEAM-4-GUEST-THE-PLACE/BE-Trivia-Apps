<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Diamond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class updateController extends Controller
{
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function updateDiamond(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'amount'     => 'required',
            'price'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $post = Diamond::find($id);

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.basename($post->image));

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'amount'     => $request->amount,
                'price'   => $request->price,
            ]);

        } else {

            //update post without image
            $post->update([
                'amount'     => $request->amount,
                'price'   => $request->price,
            ]);
        }

        //return response
        return new PostResource(true, 'Diamond Berhasil Diubah!', $post);
    }
}
