<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use App\Http\Resources\AvatarResource;
use App\Models\Avatar;
use Illuminate\Http\Request;

class getDetailController extends Controller
{
    public function GetDataDetailController($id) {
        $questions = Avatar::find($id);
        return new AvatarResource(true, 'Success get detail Question', $questions);
    }
}
