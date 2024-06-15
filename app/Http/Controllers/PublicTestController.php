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
use App\Models\TestType;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class PublicTestController extends Controller
{


    public function showCreatePublicTest()
    {
        // dd(TestType::where("name", "public")->first());
        $id=TestType::where("name", "public")->first();
        If(!$id==null){
            $types=$id->id;
            
        }
        // $types=TestType::where("name", "public")->first()->id;
        $langs=Lang::orderBy("name", "DESC")->get();
        //$teacher = User::find(Auth::id())->teacher;
        //dd($types);
                
        return view('profile.teacher.test.create_PublicTest', compact('langs', 'types'));
    }

    public function createPublicTest(Request $request)
    {
        $typesId=TestType::where("name", "public")->first()->id;

        $data=$request->validate([
            "title" => ["required"],
            "question_count" => ["required"],
            "lang_id" => [],
        ]);
        
        $lang=Lang::where('name', $data['lang_id'])->first()->id;
        if($request->has('lang_id')){
            $data['lang_id']=$lang;
        }         

        $test= DB::table('tests')->insert([
            "title" => $data['title'],
            "question_count" => $data['question_count'],
            "lang_id" => $lang,
            "test_type_id" => $typesId,
        ]);
        //dd($test);
        return redirect(route("tests.index", ));//
    }

    public function showPublicTests()
    {
        // $typeId=TestType::where('name', 'public')->get();
        // dd($typeId);
        //$teacher = $user::find(Auth::id())->teacher->id;
        //$tests =$test::where('teacher_id', $teacher)->get();
        //$tests =$test::orderBy("title", "DESC")->get();
        //return view('profile.teacher.test.tests', compact('teacher', 'tests'));
   
        $tests=Test::where('test_type_id', 1)->get();
        return view('tests.public_tests',compact('tests'));
    }

    public function publicTestDetail($id)
    {
        $questions=Question::where('test_id', $id)->get();
    
        $question_count=Test::where("id", $id)->first()->question_count; 
        
        return view('tests.public_test_detail', compact('questions', 'id'));//compact
    }

    public function processTakeTest(Request $request, $id)
    {
        $points=0;
        $maxPoints=0;
        //Answer::where('question_id', $question_id)->max('points');  

        foreach($request->all() as $key => $value) {
            if (strpos($key, 'question_') !== false) {
                $question_id = str_replace('question_', '', $key);
                //$point=Answer::where('question_id', $question_id)->get()->points;

                
                $answer_id = $value;
                
                
                // $result->question_id = $question_id;
                // $result->answer_id = $answer_id;
                // $result->point = Answer::find($answer_id)->points; // Установите баллы здесь, если их нужно учитывать
                // $result->save();
                $pointA=Answer::find($answer_id)->points;
                $maxPoint=Answer::where('question_id', $question_id)->max('points');
        
                $maxPoints+=$maxPoint;
                //array_push($points, $pointA);
                $points+=$pointA;
                
            }
        }

              

        return view('tests.result_test')->with('message','Результат опроса: '.$points.'/'.$maxPoints.'.');
    }
}
