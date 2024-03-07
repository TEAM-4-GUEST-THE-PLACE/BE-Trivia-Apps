<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        //define validation rules
        $validator = validator::make($request->all(), [
            'fullname'     => 'required',
            'username'   => 'required',
            'email'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $User = User::find($id);


            $User->update([ 
                'fullname'     => $request->fullname,
                'username'     => $request->username,
                'email'   => $request->email,
            ]);

         

            //update User without image
            $User->update([
                'fullname'     => $request->fullname,
                'username'   => $request->username,
                'email'   => $request->email,

            ]);
        

        //return response
        return new UserResource(true, 'user Berhasil Diubah!', $User);
    }
}
