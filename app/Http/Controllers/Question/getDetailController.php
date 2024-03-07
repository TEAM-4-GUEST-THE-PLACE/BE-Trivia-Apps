<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;

class getDetailController extends Controller
{
    public function GetDataDetailController($id) {
        $questions = Question::find($id);
        return new QuestionResource(true, 'Success get detail Question', $questions);
    }
}
