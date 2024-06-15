<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\CourseFilter;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Lang;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function __invoke(Request $request)//
    {
        $data=$request->validate([
            "fname" => ["string"],
            "lname" => ["string"],
            "lang_id" => ["string"],
        ]);

        $filter=app()->make(CourseFilter::class, ['queryParams'=>array_filter($data)]);

        $courses=Course::filter($filter)->get();
        // dd($courses);

        return view('courses.courses', compact('courses'));
    }

    public function showCourses()//
    {
        $courses=Course::orderBy("title", "DESC")->get();
        // dd($courses);

        return view('courses.courses', compact('courses'));
    }

    // public function showCourses(){
    //     $courses=Course::orderBy("title", "DESC")->get();
    //     return view('courses.courses', compact('courses'));
    // }

    public function showCourseDetail($id){
        $course=Course::findOrFail($id);
        //$teacher=Teacher::findOrFail($id);
        $reviews=Review::where('course_id', $id)->get();
        return view('courses.detail', compact('course', 'reviews'));
    }

    public function review($id, Request $request)
    {
        $data=$request->validate([
            "text" => ["required", "string", "min:5"],
            // "date" => ["date_format:Y-m-d,m-d"],
            // "student_id" => ["required", "exists:students,id"],
        ]);
        $course=Course::findOrFail($id);
        $student=User::find(Auth::id())->student;

        $review= DB::table('reviews')->insert([
            'text'=>$data['text'],
            'student_id'=>$student->id,
            'course_id'=>$id,
        ]);
        //dd($review);
        //$post->comments()->create($request->validated());
        //return redirect()->route('courseDetail');//->with('success', 'tasks успешно send');
    
        //return redirect(route("courseDetail", $id));
        return redirect()->back();
    }
}
