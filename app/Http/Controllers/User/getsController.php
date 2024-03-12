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
        $Users = User::all();

        return new UserResource(true, 'List user', $Users);
    }
}
