<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExamControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exam_control = DB::table('exam_control')
                        ->join('course','exam_control.exc_crs_code','=','course.crs_code')
                        ->join('teacher','exam_control.exc_tch_code','=','teacher.tch_code')
                        ->orderby('exam_control.exc_id','Asc')
                        ->get();

        return view('examcontrol.index',compact('exam_control'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = DB::table('course')->get();
        $teacher = DB::table('teacher')->get();

        return view('examcontrol.create',compact('course','teacher'));
        //return view('examcontrol.create');
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
            'exc_id'=>'required',
            'exc_year'=>'required',
            'exc_term'=>'required',
            'exc_crs_code'=>'required',
            'exc_sect'=>'required',
            'exc_tch_code'=>'required',
            'exc_time'=>'required'
            // 'exc_status',
            // 'exc_date_start',
            // 'exc_date_stop'
        ]);
    
        DB::table('exam_control')->insert(
        [
            'exc_id'=> $request->exc_id,
            'exc_year'=> $request->exc_year,
            'exc_term'=> $request->exc_term,
            'exc_crs_code'=> $request->exc_crs_code,
            'exc_sect'=> $request->exc_sect,
            'exc_tch_code'=> $request->exc_tch_code,
            'exc_time'=> $request->exc_time,
            'exc_status'=> $request->exc_status,
            'exc_date_start'=> $request->exc_date_start,
            'exc_date_stop'=> $request->exc_date_stop
        ]
        );
        return redirect('exam_control');
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
        $exam_control = DB::table('exam_control')
                        ->where('exc_id','=',$id)->get();
        $course = DB::table('course')->get();
        $teacher = DB::table('teacher')->get();
        return view('examcontrol.edit',compact('exam_control','course','teacher'));
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
            'exc_id'=>'required',
            'exc_year'=>'required',
            'exc_term'=>'required',
            'exc_crs_code'=>'required',
            'exc_sect'=>'required',
            'exc_tch_code'=>'required',
            'exc_time'=>'required'
            // 'exc_status'=>'required',
            // 'exc_date_start'=>'required',
            // 'exc_date_stop'=>'required'
        ]);
    
        DB::table('exam_control')->where('exc_id','=',$id)->update([
            'exc_id'=> $request->exc_id,
            'exc_year'=> $request->exc_year,
            'exc_term'=> $request->exc_term,
            'exc_crs_code'=> $request->exc_crs_code,
            'exc_sect'=> $request->exc_sect,
            'exc_tch_code'=> $request->exc_tch_code,
            'exc_time'=> $request->exc_time,
            'exc_status'=> $request->exc_status,
            'exc_date_start'=> $request->exc_date_start,
            'exc_date_stop'=> $request->exc_date_stop
        ]);
        return redirect('exam_control');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('exam_control')->where('exc_id','=',$id)->delete();
        return redirect('exam_control');
    }
}
