<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

class deletesController extends Controller
{
     /**
     * destroy
     *
     * @param  mixed $User
     * @return void
     */
    public function removeUser($id)
    {

        //find User by ID
        $User = User::find($id);

        //delete User
        $User->delete();

        //return response
        return new UserResource(true, 'User Berhasil Dikurangi !', null);
    }
}
