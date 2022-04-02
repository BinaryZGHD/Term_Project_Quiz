<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ClassCheckStudentModel;
class ClassCheckStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classcheckstudent = DB::table('class_check_student')->get();

        return view('classcheckstudent.index',compact('classcheckstudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classcheckstudent.create');
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
            'ccs_cc_id'=>'required',
            'ccs_std_code'=>'required'
        ]);

        DB::table('class_check_student')->insert(
        [
            'ccs_cc_id' => $request->ccs_cc_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'ccs_std_code' => $request->ccs_std_code,
            
        ]
        );

        return redirect('class_check_student');
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
       
        $classcheckstudent = DB::table('class_check_student')->where('ccs_cc_id','=',$id)->get ();
        return view('classcheckstudent.edit', compact('classcheckstudent'));
        
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
            'ccs_cc_id'=>'required',
            'ccs_std_code'=>'required'
        ]);

        DB::table('class_check_student')->where('ccs_cc_id','=',$id)->update([
            'ccs_cc_id' => $request->ccs_cc_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'ccs_std_code' => $request->ccs_std_code,
            
        ]
        );

        return redirect('class_check_student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('class_check_student')
        ->where('ccs_cc_id','=',$id)
        ->where('ccs_std_code','=',$id)
        ->delete();
        
        return redirect('class_check_student');
    }
}
