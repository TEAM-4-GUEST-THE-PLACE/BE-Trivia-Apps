<?php

namespace App\Http\Controllers\Diamond;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Diamonds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class insertController extends Controller
{
    public function insertController(Request $request) {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'price' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(),401);
        }

        $createDiamond = Diamonds::create([
            'amount' => $request->amount,
            'price' => $request->price
        ]);

        return new PostResource(true, 'Success insert diamond', $createDiamond);
    }

}
