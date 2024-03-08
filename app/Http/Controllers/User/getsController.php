<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;

use Illuminate\Http\Request;

class getsController extends Controller
{
    public function getUsers()
    {
        //get all posts
        $Users = user::all();

        //return collection of posts as a resource
        return new UserResource(true, 'List user', $Users);
    }
}
