<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
// use App\Models\TeacherTeachModel;

class TeacherTeachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherteach =  DB::table('teacher_teach')
                                ->join('course','teacher_teach.tt_crs_code','=','course.crs_code')
                                ->join('teacher','teacher_teach.tt_tch_code','=','teacher.tch_code')
                                ->orderby('teacher_teach.tt_year','desc')
                                ->get();

        return view('teacherteach.index',compact('teacherteach'));
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

        return view('teacherteach.create',compact('course','teacher'));
        
        //return view('teacherteach.create');
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
            'tt_year'=>'required',
            'tt_term'=>'required',
            'tt_crs_code'=>'required',
            'tt_sect'=>'required',
            'tt_tch_code'=>'required'
        ]);

        DB::table('teacher_teach')->insert(
        [
            'tt_year' => $request->tt_year, 
            'tt_term' => $request->tt_term,
            'tt_crs_code'=> $request->tt_crs_code,
            'tt_sect' => $request->tt_sect,
            'tt_tch_code'=> $request->tt_tch_code
        ]
        );

        return redirect('teacher_teach');
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
    {   $teacherteach =  DB::table('teacher_teach')
                            ->join('course','teacher_teach.tt_crs_code','=','course.crs_code')
                            ->join('teacher','teacher_teach.tt_tch_code','=','teacher.tch_code')
                            ->orderby('teacher_teach.tt_year','desc')
                            ->get();
       
        // $teacherteach = DB::table('teacher_teach')->where('tt_crs_code','=',$id)->get ();
                                                //   ->where('tt_tch_code','=',$tt_tch_code)
                                                  
        return view('teacherteach.edit', compact('teacherteach'));
        
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
            'tt_year'=>'required',
            'tt_term'=>'required',
            'tt_crs_code'=>'required',
            'tt_sect'=>'required',
            'tt_tch_code'=>'required'
        ]);

        DB::table('teacher_teach')->where('tt_crs_code','=',$id)->update([
                                //   ->where('tt_tch_code','=',$request->tt_tch_code)
                                  
            'tt_year' => $request->tt_year,
            'tt_term' => $request->tt_term,
            'tt_crs_code'=> $request->tt_crs_code,
            'tt_sect' => $request->tt_sect,
            'tt_tch_code'=> $request->tt_tch_code
        ]
        );

        return redirect('teacher_teach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tt_crs_code,$tt_year,$tt_tch_code,$tt_sect)
    {
        DB::table('teacher_teach') ->where('tt_crs_code','=',$tt_crs_code)
                                   ->where('tt_year','=',$tt_year)
                                   ->where('tt_tch_code','=',$tt_tch_code)
                                   ->where('tt_sect','=',$tt_sect)
                                   ->delete();
        
        return redirect('teacher_teach');
    }
}
