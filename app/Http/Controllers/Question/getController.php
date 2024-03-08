<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;

class getController extends Controller
{
    public function GetDataController() {
        $questions = Question::all();

        return new QuestionResource(true, 'List Question', $questions);
    }
}
