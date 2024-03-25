<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Diamond;
use App\Models\Diamonds;
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
        $validator = Validator::make($request->all(), [
            'amount'     => 'required',
            'price'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = Diamonds::find($id);

        $post->update([
            'amount'     => $request->amount,
            'price'   => $request->price,
        ]);

        return new PostResource(true, 'Diamond Berhasil Diubah!', $post);
    }
}
