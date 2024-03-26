<?php

namespace App\Http\Controllers\Avatar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function deleteDataController($id)
    {
        $avatar = \App\Models\Avatar::find($id);
        $avatar->delete();
        return response()->json([
            'message' => 'Avatar successfully deleted'
        ]);
    }
}
