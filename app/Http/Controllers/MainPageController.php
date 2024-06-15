<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SignupForCourse;
use Illuminate\Support\Facades\Mail;

use App\Models\Teacher;
use App\Models\Course;

class MainPageController extends Controller
{
    public function index(){

        $courses=Course::orderBy("title", "DESC")->get();


        $teachers=Teacher::orderBy("lname", "DESC")->get();
        return view('welcome',compact('teachers','courses'));
    }

    public function signupCourse(Request $request)
    {
        $data=$request->validate([
            "name" => ["required"],
            "phone" => ["required"],
            "email" => ["required"],
            "course_id" => [],
        ]);

        //dd($data['course_id']);
        // $course=Course::where('title', $data['course_id'])->first();//->id;
        // dd($course);
        // if($request->has('course_id')){
        //     $data['course_id']=$course;
        // }         

        // $test= DB::table('tests')->insert([
        //     "title" => $data['title'],
        //     "question_count" => $data['question_count'],
        //     "time_limit" => $data['time_limit'],
        //     "end_date" => $data['end_date'],
        //     "lang_id" => $lang,
        //     "teacher_id" => $id,
        // ]);

        $name=$data['name'];
        $phone=$data['phone'];
        $email=$data['email'];
        $course_id = $data['course_id'];
        //dd($name, $phone, $email, $course_id);
        //return redirect(route('home'))->withErrors(['succes'=>'Name: '.$name, $phone, $email, $course_id.'.']);
        return redirect()->back();
            
        
    }
  

}
