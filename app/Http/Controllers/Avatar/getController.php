<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use App\Http\Resources\AvatarResource;
use App\Models\Avatar;
use Illuminate\Http\Request;

class getController extends Controller
{
    public function GetDataController() {
        $questions = Avatar::all();

        return new AvatarResource(true, 'List Question', $questions);
    }
}
