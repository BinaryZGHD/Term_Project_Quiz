<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ClassCheckModel;
class ClassCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classcheck = DB::table('class_check')->get();
        return view('classcheck.index',compact('classcheck'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classcheck.create');
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
            'cc_id'=>'required',
            'cc_year' =>'required',
            'cc_term'=> 'required',
            'cc_crs_code' => 'required',
            'cc_sect'=> 'required',
            'cc_date' => 'required',
            'cc_time'=> 'required',
            'cc_tch_code'=>'required',
        ]);

        DB::table('class_check')->insert(
        [
            'cc_id' => $request->cc_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'cc_year' => $request->cc_year,
            'cc_term'=> $request->cc_term,
            'cc_crs_code' => $request->cc_crs_code,
            'cc_sect'=> $request->cc_sect,
            'cc_date' => $request->cc_date,
            'cc_time'=> $request->cc_time,
            'cc_ex_times' => $request->cc_ex_times,
            'cc_tch_code'=> $request->cc_tch_code
        ]
        );

        return redirect('class_check');
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
       
        $classcheck = DB::table('class_check')->where('cc_id','=',$id)->get ();
        return view('classcheck.edit', compact('classcheck'));
        
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
            'cc_id'=>'required',
            'cc_year' =>'required',
            'cc_term'=> 'required',
            'cc_crs_code' => 'required',
            'cc_sect'=> 'required',
            'cc_date' => 'required',
            'cc_time'=> 'required',
            'cc_tch_code'=>'required'
        ]);

        DB::table('class_check')->where('cc_id','=',$id)->update([
            'cc_id' => $request->cc_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'cc_year' => $request->cc_year,
            'cc_term'=> $request->cc_term,
            'cc_crs_code' => $request->cc_crs_code,
            'cc_sect'=> $request->cc_sect,
            'cc_date' => $request->cc_date,
            'cc_time'=> $request->cc_time,
            'cc_ex_times' => $request->cc_ex_times,
            'cc_tch_code'=> $request->cc_tch_code
        ]
        );

        return redirect('class_check');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('class_check')->where('cc_id','=',$id)->delete();
        
        return redirect('class_check');
    }
}