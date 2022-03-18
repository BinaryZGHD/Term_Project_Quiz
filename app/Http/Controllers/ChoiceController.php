<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\ChoiceModel;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choice = ChoiceModel :: latest()->get();

        return view('choice.index',compact('choice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('choice.create');
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
            'ch_qs_id'=>'required',
            'ch_no'=>'required',
            'ch_desc'=>'required'
        ]);

        DB::table('choice')->insert(
        [
            'ch_qs_id' => $request->ch_qs_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'ch_no' => $request->ch_no,
            'ch_desc'=> $request->ch_desc
        ]
        );

        return redirect('choice');
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
       
        $choice = DB::table('choice')->where('ch_qs_id','=',$id)->get ();
        return view('choice.edit', compact('choice'));
        
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
            'ch_qs_id'=>'required',
            'ch_no'=>'required',
            'ch_desc'=>'required'
        ]);
    
        DB::table('choice')->where('ch_qs_id','=',$id)->update([
            'ch_qs_id' => $request->ch_qs_id,
            'ch_no' => $request->ch_no,
            'ch_desc' => $request->ch_desc
        ]);
        return redirect('choice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('choice')
        ->where('ch_qs_id','=',$id)
        ->where('ch_no','=',$id)
        ->delete();
        
        return redirect('choice');
    }
}
