<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Lang;
use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $questions=Question::where('test_id', $id)->get();   
        return view('profile.teacher.test.questions', compact('questions', 'id'));//compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $question_count=Test::where("id", $id)->first()->question_count; 
        return view('profile.teacher.test.create_questions', compact('id', 'question_count'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $numberOfQuestions = Test::findOrFail($id)->question_count;
        
        for ($i = 0; $i < $numberOfQuestions; $i++) {
            // Сохраняем вопрос
            $question = new Question();
            $question->text = $request->input('q_name-' . $i);
            $question->test_id = $id;
            $question->save();

            // Сохраняем ответы
            for ($j = 0; $j < 3; $j++) {
                $answer = new Answer();
                $answer->text = $request->input('a_name-' . $j . '-' . $i);
                $answer->question_id = $question->id;
                $answer->points = $request->input('points-' . $j . '-' . $i);
                $answer->save();
            }
        }
        $tests=Test::findOrFail($id)->id;
        return redirect(route('question.index', compact('tests')));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
