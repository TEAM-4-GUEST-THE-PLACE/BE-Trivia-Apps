<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class usersAvatarController extends Controller
{
    public function updateAvatar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'avatars_id' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        $user = User::findOrFail($id);
    
        $user->update([
            'avatars_id' => $request->avatars_id,
        ]);
    
        Log::info('Updating avatar for user: ' . $user->id);
        Log::info('update avatar: ' . $request->avatars_id);
    
        return new UserResource(true, 'Diamond Berhasil Diubah!', $user);
    }
    
}
