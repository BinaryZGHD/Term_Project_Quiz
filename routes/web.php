<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::resource('elle','App\Http\Controllers\StatusQuiz3Controller');
route::resource('statuswork','App\Http\Controllers\STATUSController');
route::resource('choice','App\Http\Controllers\ChoiceController');
route::resource('class_check','App\Http\Controllers\ClassCheckController');
route::resource('course_config','App\Http\Controllers\CourseConfigController');
route::resource('class_check_student','App\Http\Controllers\ClassCheckStudentController');
route::delete('class_check_student.destroy/{ccs_cc_id}/{ccs_std_code}','App\Http\Controllers\ClassCheckStudentController@destroy')->name('classcheckstudent.destroy');
route::delete('enroll.destroy/{enr_sect}/{enr_seq}','App\Http\Controllers\EnrollController@destroy')->name('enroll.destroy');//ยังทำส่ง2ตัวแปรไม่ได้
route::resource('quiz3','App\Http\Controllers\Quiz3Controller');
//  ยังไม่ทำ 
 //  ยังไม่ทำ ทดสอบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบบ
route::resource('course','App\Http\Controllers\CourseController');//  ยังไม่ทำ
//  ยังไม่ทำ
route::resource('enroll','App\Http\Controllers\EnrollController');//  ยังไม่ทำ
route::resource('exam','App\Http\Controllers\ExamController');//  ยังไม่ทำ
route::resource('exam_control','App\Http\Controllers\ExamControlController');//  ยังไม่ทำ
route::resource('exam_question','App\Http\Controllers\ExamQuestionController');//  ยังไม่ทำ
route::resource('faculty','App\Http\Controllers\FacultyController');//  ยังไม่ทำ
route::resource('question','App\Http\Controllers\QuestionController');//  ยังไม่ทำ
route::resource('student','App\Http\Controllers\StudentController');//  ยังไม่ทำ
route::resource('teacher','App\Http\Controllers\TeacherController');// 
route::resource('teacher_teach','App\Http\Controllers\TeacherTeachController');//  
//  ยังไม่ทำ

Route::get('/', function () {
    return view('welcome');
});
