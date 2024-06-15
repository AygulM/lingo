<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email'=>["required", "email", "string"],
            'password'=>['required'],
       
        ]);
        if( auth("web")->attempt($data)){
            return redirect(route('home'));
        }  
        return redirect(route('login'))->withErrors(['email'=>"no found or no correct"]);

    }
    
    public function logout(){
        auth("web")->logout();     
        return redirect(route('home'));
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $data = $request->validate([
            'name'=>["required", "string", 'unique:users,name'],
            'email'=>["required", "email", "string", 'unique:users,email'],
            'role'=>["required"],
            'password'=>['required', 'confirmed'],
       
        ]);
        
        $user=User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'roles'=>$data['role'],
            'password'=> bcrypt($data['password']),  //Hash::make
        ]);
        if ($data['role'] === 'teacher') {
            $user->assignRole('teacher');
        } elseif ($data['role'] === 'student') {
            $user->assignRole('student');
        }

        
        $id = $user->id;

        if ($data['role'] === 'teacher') {
            //Teacher::create(['user_id' => $id]);
            DB::table('teachers')->insert([
                'user_id' => $id,
                //'lang_id' => 1,
            ]);
        } elseif ($data['role'] === 'student') {
            echo($id);
            //Student::create(['user_id' => $id]);
            DB::table('students')->insert([
                'user_id' => $id,
            ]);
        }
        

        if($user){
            auth("web")->login($user);        
        }
        return redirect(route('home'));
    }

    public function showForgotForm(){
        return view('auth.forgot');
    }

    public function forgot(Request $request){
        $data = $request->validate([
            'email'=>["required", "email", 'exists:users'],
        ]);
        $user=User::where(['email'=>$data['email']])->first();
        $password=uniqid();
        $user->password=bcrypt($password);
        $user->save();
        //Mail::to($user)->send(new ForgotPassword($password));   
        Mail::to('test.testirowschik@yandex.ru')->send(new ForgotPassword($password));   
        
        return redirect(route('home'));

    }
    
}
