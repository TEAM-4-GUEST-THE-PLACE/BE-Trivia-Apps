<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\posts;
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
    public function AddDiamond(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount'     => 'required',
            'price'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = posts::create([
            'amount'  => $request->amount,
            'price'   => $request->price,
        ]);
        
       

        return new PostResource(true, 'Diamond Berhasil Ditambahkan!', $post);
    }
}
