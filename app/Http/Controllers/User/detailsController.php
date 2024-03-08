<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function detailUser($id)
    {
        //find post by ID
        $User = User::find($id);

        //return single User as a resource
        return new UserResource(true, 'Detail diamond!', $User);
    }
}
