<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher =  DB::table('teacher')->get();

        return view('teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
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
            'tch_code'=>'required',
            'tch_name'=>'required',
            'tch_email'=>'required',
            'tch_fac_code'=>'required',
            'tch_user_login'=>'required'
        ]);

        DB::table('teacher')->insert(
        [
            'tch_code' => $request->tch_code, 
            'tch_name' => $request->tch_name,
            'tch_email'=> $request->tch_email,
            'tch_fac_code' => $request->tch_fac_code,
            'tch_user_login'=> $request->tch_user_login
        ]
        );

        return redirect('teacher');
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
       
        $teacher = DB::table('teacher')->where('tch_code','=',$id)->get ();
        return view('teacher.edit', compact('teacher'));
        
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
            'tch_code'=>'required',
            'tch_name'=>'required',
            'tch_email'=>'required',
            'tch_fac_code'=>'required',
            'tch_user_login'=>'required'
        ]);

        DB::table('teacher')->where('tch_code','=',$id)->update([
            'tch_code' => $request->tch_code, 
            'tch_name' => $request->tch_name,
            'tch_email'=> $request->tch_email,
            'tch_fac_code' => $request->tch_fac_code,
            'tch_user_login'=> $request->tch_user_login
        ]
        );

        return redirect('teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('teacher')
        ->where('tch_code','=',$id)
        // ->where('tch_name','=',$id)
        ->where('tch_user_login','=',$id)
        ->delete();
        
        return redirect('teacher');
    }
}
