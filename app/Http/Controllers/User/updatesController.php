<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class updatesController extends Controller
{
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->fill($request->only(['fullname', 'username', 'email', 'diamonds_totals', 'avatars_id']));
        
        $user->save();

        return new UserResource(true, 'User Berhasil Diubah!', $user);
    }
}
