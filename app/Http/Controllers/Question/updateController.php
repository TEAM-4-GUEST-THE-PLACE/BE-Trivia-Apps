<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class updateController extends Controller
{
    public function updateDataController(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'options' => 'required | array',
            'correct_option' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $questions = Question::find($id);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/questionImage', $image->hashName());

            Storage::delete('public/questionImage' .basename($questions->image));

            $questions->update([
                'question' => $request->question,
                'options' => $request->answer,
                'correct_option' => $request->correct_option,
                'image' => $image->hashName(),
            ]);

        } else {

            $questions->update([
                'question' => $request->question,
                'options' => $request->answer,
                'correct_option' => $request->correct_option,
            ]);
        }

        return new QuestionResource(true, 'Update data success', $questions);

    }
}
