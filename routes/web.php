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
route::resource('elle','App\Http\Controllers\ClassCheckController');
route::resource('choice','App\Http\Controllers\ChoiceController');
route::resource('classcheck','App\Http\Controllers\ClassCheckController');
route::resource('classcheckstudent','App\Http\Controllers\ClassCheckStudentController');
Route::delete('classcheckstudent.destroy/{ccs_cc_id}/{ccs_std_code}','App\Http\Controllers\ClassCheckStudentController@destroy')->name('classcheckstudent.destroy');

//  ยังไม่ทำ
 //  ยังไม่ทำ
route::resource('course','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('course_config','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('enroll','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('exam','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('exam_control','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('exam_question','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('faculty','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('question','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('student','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('teacher','App\Http\Controllers\ChoiceController');//  ยังไม่ทำ
route::resource('teacherteach','App\Http\Controllers\TeacherTeachController');//  ยังไม่ทำ
//  ยังไม่ทำ

Route::get('/', function () {
    return view('welcome');
});
