<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicTestController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CourseEditController;
use App\Http\Controllers\LessonController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainPageController::class, 'index'])->name('home');

Route::post('/signup',[MainPageController::class, 'signupCourse'])->name('signupCourse');


Route::middleware('guest')->group(function(){
    Route::get('/login',[AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process',[AuthController::class, 'login'])->name('login_process');

    Route::get('/register',[AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process',[AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot',[AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process',[AuthController::class, 'forgot'])->name('forgot_process');
});
Route::middleware('auth')->group(function(){
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout'); 

    Route::get('/user',[UserController::class, 'index'])->name('user');//show user  profile

    Route::get('/teacher', [UserController::class, 'showTeacherEditProfile'])->name('teacher.edit.form'); // edit form for teacher
    Route::post('/teacher_edit', [UserController::class, 'editTeacherProfile'])->name('teacher.edit'); // edit procces
    
    Route::get('/student', [UserController::class, 'showStudentEditProfile'])->name('student.edit.form'); // edit form for student
    Route::post('/student_edit', [UserController::class, 'editStudentProfile'])->name('student.edit'); // edit procces

    Route::post('/allcourses/{id}/review', [CourseController::class, 'review'])->name('review');
});

Route::get('/teachers',[TeacherController::class, 'showTeachers'])->name('allTeachers');
Route::get('/teachers/{id}',[TeacherController::class, 'teacherDetail'])->name('teacherDetail');

Route::get('/allcourses',[CourseController::class, 'showCourses'])->name('allCourses');
Route::get('/allcourses/{id}',[CourseController::class, 'showCourseDetail'])->name('courseDetail');


Route::get('/public_tests/create', [PublicTestController::class, 'showCreatePublicTest'])->name('publicTest_create');
Route::post('/public_tests/create__procces', [PublicTestController::class, 'createPublicTest'])->name('publicTest.create__procces');


Route::get('/public_tests',[PublicTestController::class, 'showPublicTests'])->name('allPublicTest');
Route::get('/public_tests/{id}',[PublicTestController::class, 'publicTestDetail'])->name('publicTestDetail');
Route::post('/public_tests/{id}/takeTest_process', [PublicTestController::class, 'processTakeTest'])->name('processTakeTest');




Route::get('/teacher/test', [UserController::class, 'showTeacherTestProfile'])->name('teacher.test.show');

Route::get('/student/tasks', [UserController::class, 'showMyHometasks'])->name('myHometasks');
Route::get('/student/tasks/{id}/send', [UserController::class, 'showSendMyHometasks'])->name('sendHometasks');
Route::post('/student/tasks/{id}/send_tasks', [UserController::class, 'sendMyHometasks'])->name('send_procces_hometasks');



// Route::get('/user/student', [UserController::class, 'showStudentProfile'])->name('student.profile.form');
// Route::post('/user/student/update', [UserController::class, 'updateStudentProfile'])->name('student.profile.update');

// Route::get('/tests/{test}/takeTest', [UserController::class, 'showTakeTest'])->name('showTakeTest');
// Route::post('/tests/{test}/takeTest_process', [UserController::class, 'processTakeTest'])->name('processTakeTest');

// Route::get('/tests/add/', [TestController::class, 'createTest'])->name('test.create2');
// Route::post('/tests/add_process', [TestController::class, 'store'])->name('test.store');

Route::resources([
    '{lesson}/tests' => TestController::class,
    'tasks'=>TaskController::class,
    'courses'=>CourseEditController::class,
    '/lessons'=>LessonController::class,
    '{tests}/question' => QuestionController::class,
]);

















// Route::put('/post/{id}', function (string $id) {
//     // ...
// })->middleware('role:editor');