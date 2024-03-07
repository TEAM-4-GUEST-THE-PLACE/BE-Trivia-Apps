<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class insertController extends Controller
{
    public function insertDataController(Request $request) {
        $validator = Validator::make($request->all(), [
        'question' => 'required',
        'answer' => 'required | array',
        'answerTrue' => 'required',
        'answerFalse' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(),401);
        }

        $image = $request->file('image');
        $image->storeAs('public/questionImage', $image->hashName());

        $createQuestion = Question::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'answerTrue' => $request->answerTrue,
            'answerFalse' => $request->answerFalse,
            'image' => $image->hashName(),
        ]);
        return new QuestionResource(true, 'Succes Insert Data', $createQuestion);
    }
}
