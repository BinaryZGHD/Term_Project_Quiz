<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CourseConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_config = DB::table('course_config')
                        ->join('course','course_config.ccf_crs_code','=','course.crs_code')
                        ->orderby('course_config.ccf_year','desc')
                        ->get();

        return view('courseconfig.index',compact('course_config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course_config = DB::table('course_config')->get();
        $course = DB::table('course')
                    ->where('crs_Active', '=', 'Y')
                    ->get();
        return view('courseconfig.create',compact('course_config','course'));
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
            'ccf_year'=>'required',
            'ccf_term'=>'required',
            'ccf_crs_code'=>'required',
            'ccf_num_exam'=>'required'
        ]);
    
        DB::table('course_config')->insert(
        [
            'ccf_year' => $request->ccf_year,
            'ccf_term' => $request->ccf_term,
            'ccf_crs_code' => $request->ccf_crs_code,
            'ccf_num_exam' => $request->ccf_num_exam
        ]
        );
        return redirect('course_config');
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
        $course_config = DB::table('course_config')
                        ->join('course','course_config.ccf_crs_code','=','course.crs_code')
                        ->orderby('course_config.ccf_year','desc')
                        ->get();
        $course = DB::table('course')
                        ->where('crs_Active', '=', 'Y')
                        ->get();
        return view('courseconfig.edit',compact('course_config','course'));
        
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
        // $request->validate([
        //     'ccf_year'=>'required',
        //     'ccf_term'=>'required',
        //     'ccf_crs_code'=>'required',
        //     'ccf_num_exam'=>'required'
        // ]);
        
        // DB::table('course_config')->where('ccf_crs_code','=',$id)->update([
        //     'ccf_year' => $request->ccf_year,
        //     'ccf_term' => $request->ccf_term,
        //     'ccf_crs_code' => $request->ccf_crs_code,
        //     'ccf_num_exam' => $request->ccf_num_exam
        // ]);
        // return redirect('course_config');
        $request->validate([
            'ccf_year'=>'required',
            'ccf_term'=>'required',
            'ccf_crs_code'=>'required',
            'ccf_num_exam'=>'required'
        ]);
        DB::beginTransaction();
        try {
        DB::select('call Edit_config(?,?,?,?)',[$request->ccf_year,$request->ccf_term,$request->ccf_crs_code,$request->ccf_num_exam]);
        } catch(ValidationException $e)
        {
            DB::rollback();
        }
        DB::commit();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ccf_year,$ccf_term,$ccf_crs_code)
    {
        DB::table('course_config')
                        ->where('ccf_year','=',$ccf_year)
                        ->where('ccf_term','=',$ccf_term)
                        ->where('ccf_crs_code','=',$ccf_crs_code)
                        ->delete();

        return redirect('course_config');
    }
}
