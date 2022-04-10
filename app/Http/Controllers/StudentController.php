<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student =  DB::table('student')
                    ->join('faculty', 'student.std_fac_code', '=', 'faculty.fac_code')
                    ->get();

        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = DB::table('faculty')->get();
        return view('student.create',compact('faculty'));
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
            'std_code'=>'required',
            'std_name'=>'required',
            // 'std_email'=>'required',
            'std_fac_code'=>'required',
            'std_user_login'=>'required'
        ]);
    DB::beginTransaction();
    try {
        DB::table('student')->insert(
        [
            'std_code' => $request->std_code, 
            'std_name' => $request->std_name,
            // 'std_email'=> $request->std_email,
            'std_fac_code' => $request->std_fac_code,
            'std_user_login'=> $request->std_user_login
        ]
        );
        DB::select('call GenerateStudentEmail(?)',[$request->std_code]);
    }catch (ValidationException $e) {
        DB::rollback();
    }
    DB::commit();
    return redirect('student');
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
       
        $student = DB::table('student')
                    ->join('faculty', 'student.std_fac_code', '=', 'faculty.fac_code')  
                    ->where('std_code','=',$id)->get ();
        $faculty = DB::table('faculty')->get();
        return view('student.edit', compact('student','faculty'));
        
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
            'std_code'=>'required',
            'std_name'=>'required',
            'std_email'=>'required',
            'std_fac_code'=>'required',
            'std_user_login'=>'required'
        ]);

        DB::table('student')->where('std_code','=',$id)->update([
            'std_code' => $request->std_code, 
            'std_name' => $request->std_name,
            'std_email'=> $request->std_email,
            'std_fac_code' => $request->std_fac_code,
            'std_user_login'=> $request->std_user_login
        ]
        );

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('student')
        ->where('std_code','=',$id)
        // ->where('std_name','=',$id)
        // ->where('std_user_login','=',$id)
        ->delete();
        
        return redirect('student');
    }
}
