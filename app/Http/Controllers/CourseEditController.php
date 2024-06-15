<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Lang;
use App\Models\Test;
use App\Models\Question;
use App\Models\Answer;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\Hometask;
use App\Models\HometaskResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseEditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::orderBy("title", "DESC")->get();  
        return view('profile.teacher.courses.courses', compact('courses'));//compact
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $langs=Lang::orderBy("name", "DESC")->get();
        $teacher = User::find(Auth::id())->teacher;
        $course_types=CourseType::orderBy("name", "DESC")->get();
        
       
        
        //$groups=Course::where('teacher_id', $teacher->id)->get();
        
        return view('profile.teacher.courses.create_course', compact('langs','teacher', 'course_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id=User::find(Auth::id())->teacher->id;

        $data=$request->validate([
            "title" => ["required"],
            "duration" => [],
            "max_student" => ["required"],
            "description" => ["required"],
            "start_date" => [],
            //  "end_date" => [],
            "preview" => [],
            "previewImage" => [],
            "price" => [],
            "lang_id" => [],
            "teacher_id" => [],
            "course_type_id" => [],
        ]);
        
        // $lang=Lang::where('name', $data['lang_id'])->first()->id;
        // if($request->has('lang_id')){
        //     $data['lang_id']=$lang;
        // }         
        $imageName;
        // = Course::find()//$user::find(Auth::id())->student->photo;
        //$data['lang_id']=$lang;
        if($request->has('previewImage')){
            $image = $request->file('previewImage');
            $imageName = $image->getClientOriginalName();
            $request->file('previewImage')->move(public_path('storage/courses'), $imageName);
            $data['previewImage']=$imageName;
        }
        

        $test= DB::table('courses')->insert([
            "title" => $data['title'],
            "duration" => $data["duration"],
            "max_student" => $data["max_student"],
            "description" => $data["description"],
            "start_date" => $data["start_date"],
            //  "end_date" => $data["end_date"],
            "preview" => $data["preview"],
            "previewImage" => $imageName,
            "price" => $data["price"],
            "lang_id" => $data['lang_id'],
            "teacher_id" => $id,
            
            "course_type_id" => $data['course_type_id'],
        ]);
        
        return redirect(route("courses.index", ));//
    }
//	title							
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
