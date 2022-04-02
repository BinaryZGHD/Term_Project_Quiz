<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = DB::table('course')->get();
        return view('course.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
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
            'crs_code'=>'required',
            'crs_name'=>'required',
            'crs_active'=>'required'
        ]);

        DB::table('course')->insert(
        [
            'crs_code' => $request->crs_code, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'crs_name' => $request->crs_name,
            'crs_active' => $request->crs_active,
            
        ]
        );

        return redirect('course');
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
        $course = DB::table('course')->where('crs_code','=',$id)->get ();
        return view('course.edit', compact('course'));
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
            'crs_code'=>'required',
            'crs_name'=>'required',
            'crs_active'=>'required'
        ]);

        DB::table('course')->where('crs_code','=',$id)->update([
            'crs_code' => $request->crs_code, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'crs_name' => $request->crs_name,
            'crs_active' => $request->crs_active,
            
        ]
        );

        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('course')
        ->where('crs_code','=',$id)
        ->where('crs_name','=',$id)
        ->where('crs_active','=',$id)
        ->delete();
        
        return redirect('course');
    }
}
