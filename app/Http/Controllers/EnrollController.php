<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enroll = DB::table('enroll')->get();

        return view('enroll.index',compact('enroll'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enroll.create');
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
            'enr_year'=>'required',
            'enr_term'=>'required',
            'enr_crs_code'=>'required',
            'enr_sect'=>'required',
            'enr_seq'=>'required',
            'enr_std_code'=>'required'
        ]);

        DB::table('enroll')->insert(
        [
            'enr_year' => $request->enr_year, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'enr_term' => $request->enr_term,
            'enr_crs_code'=> $request->enr_crs_code,
            'enr_sect' => $request->enr_sect,
            'enr_seq' => $request->enr_seq,
            'enr_std_code'=> $request->enr_std_code
        ]
        );

        return redirect('enroll');
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
        $enroll = DB::table('enroll')->where('enr_seq','=',$id)->get ();
        return view('enroll.edit', compact('enroll'));
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
            'enr_year'=>'required',
            'enr_term'=>'required',
            'enr_crs_code'=>'required',
            'enr_sect'=>'required',
            'enr_seq'=>'required',
            'enr_std_code'=>'required'
        ]);
    
        DB::table('enroll')->where('enr_sect','=',$id)->update([
            'enr_year' => $request->enr_year,
            'enr_term' => $request->enr_term,
            'enr_crs_code' => $request->enr_crs_code,
            'enr_sect' => $request->enr_sect,
            'enr_seq' => $request->enr_seq,
            'enr_std_code' => $request->enr_std_code
        ]);
        return redirect('enroll');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($enr_sect, $enr_seq)
    {
        DB::table('enroll')->where('enr_sect','=',$enr_sect)
                            ->where('enr_seq','=',$enr_seq)
                            ->delete();
        
        return redirect('enroll');
    }
}