<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    public function AddDiamond(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount'     => 'required',
            'price'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $posts = posts::create([
            'amount'  => $request->amount,
            'price'   => $request->price,
        ]);

        return new PostResource(true, 'Diamond Berhasil Ditambahkan!', $posts);
    }
}
