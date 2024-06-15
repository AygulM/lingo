<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Lang;
use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\TestType;
use App\Models\Course;
use App\Models\Hometask;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Teacher $teacher, User $user, Test $test, Lang $langs, Question $question, Answer $answer)
    {
        $teacher = $user::find(Auth::id())->teacher->id;
        //$tests =$test::where('teacher_id', $teacher)->get();


        $tasks = Hometask::where('teacher_id', $teacher)
        ->get();
        return view('profile.teacher.hometasks.tasks', compact('teacher', 'tasks'));
    
    }
    
    /**
     * Show the form for creating a new resource.
     */
   
    public function create()
    {   
        $teacher = User::find(Auth::id())->teacher;

        $students=$teacher->students;
        
        // $groups=Course::where('teacher_id', $teacher->id)->get();
        
        return view('profile.teacher.hometasks.create_task', compact('teacher', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user, Lang $lang)
    {
        $id=$user::find(Auth::id())->teacher->id;

        $data=$request->validate([
            "text" => ["required"],
            // "course_id" => [],
            "student_id" => ["required"],
            "end_date" => [],
            "teacher_id" => [],
        ]);
           

        $task= DB::table('hometask')->insert([
            "text" => $data['text'],
            // "course_id" => $data['question_count'],
            "student_id" => $data['student_id'],
            "end_date" => $data['end_date'],
            "teacher_id" => $id,
        ]);
        
        return redirect(route("tasks.index", ));//
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
