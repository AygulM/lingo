<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\TeacherFilter;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Lang;
use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;

class TeacherController extends Controller
{
    //__invoke
    public function __invoke(Request $request)//showTeachers
    {
        $data=$request->validate([
            "fname" => ["string"],
            "lname" => ["string"],
            "lang_id" => ["string"],
        ]);
       
        $filter=app()->make(TeacherFilter::class, ['queryParams'=>array_filter($data)]);

        $teachers=Teacher::filter($filter)->get();
        //dd($teachers);

        return view('teachers.teachers', compact('teachers'));
    }

    public function showTeachers(Request $request)//showTeachers
    {
        $data=$request->validate([
            "fname" => ["string"],
            "lname" => ["string"],
            "lang_id" => ["string"],
        ]);
       
        $filter=app()->make(TeacherFilter::class, ['queryParams'=>array_filter($data)]);

        $teachers=Teacher::filter($filter)->get();
        //dd($teachers);

        return view('teachers.teachers', compact('teachers'));
        // $teachers=Teacher::orderBy("lname", "DESC")->get();
        // return view('teachers.teachers', compact('teachers'));
    }
    
    public function teacherDetail($id){
        $teacher=Teacher::findOrFail($id);
        return view('teachers.detail', compact('teacher'));
    }
}
