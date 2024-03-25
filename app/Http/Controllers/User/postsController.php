<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class postsController extends Controller
{
     /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function AddUser(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'fullname'     => 'required' ,
            'username'     => 'required',
            'email'        => 'required',
        ]);



        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $user = User::create([
            'fullname'    => $request->fullname,
            'username'  => $request->username,
            'email'   => $request->email,
            'diamonds_totals' => 0,
        ]);
        

        
        //return response
        return new UserResource(true, 'User Berhasil Ditambahkan!', $user);
    }
}
