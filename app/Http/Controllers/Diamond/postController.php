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
            'amount'     => 'required',
            'price'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = Post::create([
            'amount'  => $request->amount,
            'price'   => $request->price,
        ]);
        
        $user = User::where('id', $id)->firstOrFail();

        $user->posts()->save($post);
    
        $user->increment('diamonds_totals', $request->amount);

        return new PostResource(true, 'Diamond Berhasil Ditambahkan!', $post);
    }
}
