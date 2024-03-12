<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
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
    public function AddDiamond(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
            'amount'     => 'required',
            'price'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $uploadedFileUrl = $request->file('image')->storeOnCloudinary('questionImage');

        $post = Post::create([
            'image'    => $uploadedFileUrl->getSecurePath(),
            'amount'  => $request->amount,
            'price'   => $request->price,
        ]);
        
        $user = User::where('id', $id)->firstOrFail();

        $user->posts()->save($post);
    
        $user->increment('diamond_totals', $request->amount);

        return new PostResource(true, 'Diamond Berhasil Ditambahkan!', $post);
    }
}
