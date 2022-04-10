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
//homes
route::resource('homes','App\Http\Controllers\HomeController');
//statuswork
route::resource('statuswork','App\Http\Controllers\STATUSController');
//choice
route::resource('choice','App\Http\Controllers\ChoiceController');
route::delete('choice.destroy/{ch_qs_id}/{ch_no}','App\Http\Controllers\ChoiceController@destroy')->name('choice.destroy');
// route::get('choice.edit/{ch_qs_id}/{ch_no}','App\Http\Controllers\ChoiceController@edit')->name('choice.edit');
// route::post('choice.update/{ch_qs_id}/{ch_no}','App\Http\Controllers\ChoiceController@edit')->name('choice.update');
//class_check
route::resource('class_check','App\Http\Controllers\ClassCheckController');
route::delete('class_check.destroy/{cc_id}','App\Http\Controllers\ClassCheckController@destroy')->name('class_check.destroy');
//course_config
route::resource('course_config','App\Http\Controllers\CourseConfigController');
route::delete('course_config.destroy/{ccf_year}/{ccf_term}/{ccf_crs_code}','App\Http\Controllers\CourseConfigController@destroy')->name('course_config.destroy');
//class_check_student
route::resource('class_check_student','App\Http\Controllers\ClassCheckStudentController');
route::delete('class_check_student.destroy/{ccs_cc_id}/{ccs_std_code}','App\Http\Controllers\ClassCheckStudentController@destroy')->name('classcheckstudent.destroy');
//elle
route::resource('elle','App\Http\Controllers\StatusQuiz3Controller');
//quiz3
route::resource('quiz3','App\Http\Controllers\Quiz3Controller');
//course
route::resource('course','App\Http\Controllers\CourseController');
route::delete('course.destroy/{crs_code}/{crs_active}','App\Http\Controllers\CourseController@destroy')->name('course.destroy');
//enroll
route::resource('enroll','App\Http\Controllers\EnrollController');
route::delete('enroll.destroy/{enr_std_code}/{enr_crs_code}','App\Http\Controllers\EnrollController@destroy')->name('enroll.destroy');
//route::get('enroll.edit/{enr_std_code}/{enr_crs_code}','App\Http\Controllers\EnrollController@edit')->name('enroll.edit');
//exam
route::resource('exam','App\Http\Controllers\ExamController');
route::delete('exam.destroy/{ex_id}/{ex_std_code}','App\Http\Controllers\ExamController@destroy')->name('exam.destroy');
//exam_control
route::resource('exam_control','App\Http\Controllers\ExamControlController');
route::delete('exam_control.destroy/{exc_id}','App\Http\Controllers\ExamControlController@destroy')->name('exam_control.destroy');
//exam_question
route::resource('exam_question','App\Http\Controllers\ExamQuestionController');
route::delete('exam_question.destroy/{eq_ex_id}/{eq_qs_id}','App\Http\Controllers\ExamQuestionController@destroy')->name('exam_question.destroy');
//faculty
route::resource('faculty','App\Http\Controllers\FacultyController');
//question
route::resource('question','App\Http\Controllers\QuestionController');
route::delete('question.destroy/{qs_id}','App\Http\Controllers\QuestionController@destroy')->name('question.destroy');
//student
route::resource('student','App\Http\Controllers\StudentController');
//teacher
route::resource('teacher','App\Http\Controllers\TeacherController');
route::delete('teacher.destroy/{tch_code}','App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');
//teacher_teach
route::resource('teacher_teach','App\Http\Controllers\TeacherTeachController'); 
route::delete('teacher_teach.destroy/{tt_crs_code}/{tt_year}/{tt_tch_code}/{tt_sect}','App\Http\Controllers\TeacherTeachController@destroy')->name('teacher_teach.destroy');


Route::get('/', function () {
    return view('welcomeHOME');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
