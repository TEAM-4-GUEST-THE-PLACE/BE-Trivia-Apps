<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class deleteController extends Controller
{
    public function deleteDataController($id) {
        $questions = Question::find($id);

        Storage::delete('public/questionImage' .basename($questions->image));

        $questions -> delete($id);

        return new QuestionResource(true, 'delete Question', $questions);
    }
}
