<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam = DB::table('exam')
                    ->join('course', 'exam.ex_crs_code', '=', 'course.crs_code')
                    ->join('student', 'exam.ex_std_code', '=', 'student.std_code')
                    ->orderby('exam.ex_id', 'desc')
                    ->get();

        return view('exam.index',compact('exam'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = DB::table('student')->get();
        $course = DB::table('course')
                    // ->where('crs_Active', '=', 'Y')
                    ->get();
        return view('exam.create',compact('student','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ex_id'=>'required',
            'ex_year'=>'required',
            'ex_term'=>'required',
            'ex_crs_code'=>'required',
            'ex_crs_sect'=>'required',
            'ex_std_code'=>'required',
            'ex_time'=>'required'
        ]);

        DB::table('exam')->insert(
        [
            'ex_id' => $request->ex_id, //ex_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'ex_year' => $request->ex_year,
            'ex_term'=> $request->ex_term,
            'ex_crs_code' => $request->ex_crs_code,
            'ex_crs_sect' => $request->ex_crs_sect,
            'ex_std_code'=> $request->ex_std_code,
            'ex_time'=> $request->ex_time,
            'ex_date_time_start'=> $request->ex_date_time_start,
            'ex_date_time_end'=> $request->ex_date_time_end,
            'ex_total_score'=> $request->ex_total_score,
            'ex_commit_type'=> $request->ex_commit_type
        ]
        );

        return redirect('exam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam = DB::table('exam')
                    ->join('course', 'exam.ex_crs_code', '=', 'course.crs_code')
                    ->join('student', 'exam.ex_std_code', '=', 'student.std_code')
                    ->where('ex_id','=',$id)->get ();
        return view('exam.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ex_id'=>'required',
            'ex_year'=>'required',
            'ex_term'=>'required',
            'ex_crs_code'=>'required',
            'ex_crs_sect'=>'required',
            'ex_std_code'=>'required',
            'ex_time'=>'required'
        ]);
    
        DB::table('exam')->where('ex_id','=',$id)->update([
            'ex_id' => $request->ex_id, 
            'ex_year' => $request->ex_year,
            'ex_term'=> $request->ex_term,
            'ex_crs_code' => $request->ex_crs_code,
            'ex_crs_sect' => $request->ex_crs_sect,
            'ex_std_code'=> $request->ex_std_code,
            'ex_time'=> $request->ex_time,
            'ex_date_time_start'=> $request->ex_date_time_start,
            'ex_date_time_end'=> $request->ex_date_time_end,
            'ex_total_score'=> $request->ex_total_score,
            'ex_commit_type'=> $request->ex_commit_type
        ]);
        return redirect('exam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($ex_id, $ex_crs_code) 
    public function destroy($id)
    {
        DB::table('exam')
                        // ->where('ex_id','=',$ex_id)
                        // ->where('ex_crs_code','=',$ex_crs_code)
                        ->where('ex_id','=',$id)
                        ->delete();
        
        return redirect('exam');
    }
}
