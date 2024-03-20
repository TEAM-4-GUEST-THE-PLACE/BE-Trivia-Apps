<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use App\Http\Resources\AvatarResource;
use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class insertController extends Controller
{
    public function insertDataController(Request $request) {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }

        $uploadedFileUrl = $request->file('image')->storeOnCloudinary('avatarImage');

        $avatar = Avatar::create([
            'image' => $uploadedFileUrl->getSecurePath(),
            'price' => $request->price,
        ]);
        return new AvatarResource(true, 'Success insert Avatar', $avatar);
    }
}
