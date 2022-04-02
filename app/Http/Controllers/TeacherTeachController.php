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
        $teacherteach =  DB::table('teacher_teach')->get();

        return view('teacherteach.index',compact('teacherteach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacherteach.create');
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
    {
       
        $teacherteach = DB::table('teacher_teach')->where('tt_crs_code','=',$id)->get ();
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
    public function destroy($id)
    {
        DB::table('teacher_teach')
        ->where('tt_crs_code','=',$id)
        ->delete();
        
        return redirect('teacher_teach');
    }
}
