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
use App\Models\Hometask;
use App\Models\HometaskResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        if ($user->hasAnyRole(['teacher']) ) {
            $user = $user->teacher;
            return view('profile.teacher.index', compact('user'));
        } elseif ($user->hasAnyRole(['student'])) {
            $user = $user->student;
            // Логика для просмотра профиля ученика
            return view('profile.student.index', compact('user'));
        } else {
            abort(403, 'У вас нет прав на просмотр этого профиля');
        }
    }

    public function showTeacherEditProfile(Teacher $teacher, User $user, Lang $langs)
    {
        $langs=Lang::orderBy("name", "DESC")->get();
        $teacher = $user::find(Auth::id())->teacher;
        return view('profile.teacher.settings.update', compact('teacher', 'langs'));
    }

    public function editTeacherProfile(Request $request, Teacher $teacher, User $user)
    {
        $data = $request->validate([
            'fname'=>["required"],
            'lname'=>["required"],
            'photo'=>['image', 'mimes:jpeg,png,jpg,gif,svg'],
            'city'=>[],
            'phone'=>[],
            'lang_id'=>[],
            'practice'=>[],
            'education'=>[],
            'about'=>[],
            // 'vk'=>[],
            // 'telegram'=>[],
            // 'whatsapp'=>[],
        ]);
  
        if(isset($user::find(Auth::id())->student->photo)){
            $imageName = $user::find(Auth::id())->student->photo;    
        }
        else{
            $imageName;
        }
        //$imageName = $user::find(Auth::id())->student->photo;
        //$data['lang_id']=$lang;
        if($request->has('photo')){
            $image = $request->file('photo');
            $imageName = $image->getClientOriginalName();
            $request->file('photo')->move(public_path('storage/teachers'), $imageName);
            $data['photo']=$imageName;
        }

        // $lang=Lang::where('name', $data['lang_id'])->first()->id;
        // if($request->has('lang_id')){
        //     $data['lang_id']=$lang;
        // } 
          
        
        
        DB::table('teachers')->where('user_id', Auth::id())
        ->update([
            'fname'=> $data['fname'],
            'lname'=> $data['lname'],
            'photo'=> $imageName,
            'phone'=> $data['phone'],
            'city'=>$data['city'],
            'lang_id'=>$data['lang_id'],
            'practice'=>$data['practice'],
            'education'=>$data['education'],
            'about'=>$data['about'],
            // 'vk'=>$data['vk'],
            // 'telegram'=>$data['telegram'],
            // 'whatsapp'=>$data['whatsapp'],
        ]);
        return redirect()->route('user')->with('success', 'Профиль успешно обновлен');
    }

    public function showTeacherTestProfile(Teacher $teacher, User $user, Test $test)
    {
        $teacher = $user::find(Auth::id())->teacher->id;
        $tests =$test::where('teacher_id', $teacher)->get();
        return view('profile.teacher.test.tests', compact('teacher', 'tests'));
    }

    public function showStudentEditProfile(Student $student, User $user)
    {
        $student = $user::find(Auth::id())->student;
        return view('profile.student.settings.update', compact('student'));
    }

    public function editStudentProfile(Request $request, Student $student, User $user)
    {
        $data = $request->validate([
            'fname'=>["required"],
            'lname'=>["required"],
            'photo'=>['image', 'mimes:jpeg,png,jpg,gif,svg'],
            'birthday'=>"nullable|date",
            'phone'=>[],
            
        ]);
  
        $imageName = $user::find(Auth::id())->student->photo;
        //$data['lang_id']=$lang;
        if($request->has('photo')){
            $image = $request->file('photo');
            $imageName = $image->getClientOriginalName();
            $request->file('photo')->move(public_path('storage/students'), $imageName);
            $data['photo']=$imageName;
        }


        DB::table('students')->where('user_id', Auth::id())->update([
            'fname'=> $data['fname'],
            'lname'=> $data['lname'],
            'photo'=> $imageName,
            'phone'=> $data['phone'],
            'birthday'=>$data['birthday'],
        ]);
        return redirect()->route('user')->with('success', 'Профиль успешно обновлен');
    }


    //

    public function showMyHometasks()
    {
        $student= User::find(Auth::id())->student->id;
        $tasks =Hometask::where('student_id', $student)->get();
        
        return view('profile.student.hometasks.tasks', compact('student', 'tasks'));
    }

    public function showSendMyHometasks($id)
    {

       
        $student = User::find(Auth::id())->student;
        
        $taskId=Test::where("id", $id)->first()->id; 
        
        // $tasks = $user::find(Auth::id())->student;
        return view('profile.student.hometasks.send_task', compact('student', 'taskId'));
    }
    
    public function sendMyHometasks(Request $request, $id)
    {
        //если уже сдан ответ перезаписать? или раз от разных студентов то не стоит?
        $data = $request->validate([
            'solution'=>[""],
            'path_solution'=>['file'],
        ]);
        
       // $studentId=User::find(Auth::id())->get()->id;
       // $ht=Hometask::where('student_id', $studentId)->id;
       // $sti=Student::find(Auth::id())->hometasks->id;
        // dd($id);
        //$fi=Hometask::find($id)->hometask_result;
        $fileName;
        // HometaskResult::where('hometask_id',$id)->get();
        //dd($fi);
        //$data['lang_id']=$lang;
        if($request->has('path_solution')){
            $file = $request->file('path_solution');
            $fileName = $file->getClientOriginalName();
            $request->file('path_solution')->move(public_path('storage/hometasks'), $fileName);
            $data['path_solution']=$fileName;
        }
        //dd($data);
        DB::table('hometask_results')->insert([
            'solution'=> $data['solution'],
            'path_solution'=> $fileName,
            'hometask_id'=>$id,
        ]);
        return redirect()->route('myHometasks')->with('success', 'tasks успешно send');
    }

}

