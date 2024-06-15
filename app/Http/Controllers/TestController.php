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
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Teacher $teacher, User $user, Test $test, Lang $langs, Question $question, Answer $answer)
    {
        $langs=Lang::orderBy("name", "DESC")->get();
        $teacher = $user::find(Auth::id())->teacher->id;
        //$tests =$test::where('teacher_id', $teacher)->get();


        $tests = Test::where('tests.teacher_id', $teacher)
        ->get();
        return view('profile.teacher.test.tests', compact('teacher', 'tests', 'langs'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
   
    public function create($id)
    {   
        
        $types=TestType::orderBy("name", "DESC")->get();
        $langs=Lang::orderBy("name", "DESC")->get();
        $teacher = User::find(Auth::id())->teacher;
        
        // if($idType=2){
        //     $f_objects=Student::select(DB::raw("CONCAT('fname','lname') AS name"))->get();
        // }
        // else{ //5=course 2= student
        //     $f_objects = DB::table('courses')->select('title as name')->get();

        // }
        // $teacherS = Teacher::find($teacher->id);

        // if ($teacherS) {
        //     $students = $teacherS->students;
        // } else {
        //     //echo 'Преподаватель с id=1 не найден.';
        // }
        
        // $groups=Course::where('teacher_id', $teacher->id)->get();
        
        return view('profile.teacher.test.create_test', compact('langs','teacher','id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user, Lang $lang, $id)
    {
        $Tid=$user::find(Auth::id())->teacher->id;

        $data=$request->validate([
            "title" => ["required"],
            "question_count" => ["required"],
            "time_limit" => ["required"],
            "end_date" => [],
            "lang_id" => [],
            "teacher_id" => [],
            
        ]);
        
        // $lang=Lang::where('name', $data['lang_id'])->first()->id;
        // if($request->has('lang_id')){
        //     $data['lang_id']=$lang;
        // }         

        $test= DB::table('tests')->insert([
            "title" => $data['title'],
            "question_count" => $data['question_count'],
            "time_limit" => $data['time_limit'],
            "end_date" => $data['end_date'],
            "lang_id" => $data['lang_id'],
            "teacher_id" => $Tid,
            "lesson_id"=>$id,
        ]);
        
        return redirect(route("lessons.index", ));//
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
