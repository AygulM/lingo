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
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::get();
        $lessons=Lesson::get();//where('course_id', $id)->get();   
        return view('profile.teacher.courses.lessons', compact('lessons', 'courses'));//compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //$question_count=Course::where("id", $id)->first()->question_count; 
        return view('profile.teacher.courses.create_lessons', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data=$request->validate([
            "theme" => ["required"],
            "description" => ["required"],
        ]);
           

        $lesson= DB::table('lessons')->insert([
            "theme" => $data['theme'],
            "description" => $data['description'],
            "course_id" => $id,
        ]);
        
        return redirect(route("courses.index", ));
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
