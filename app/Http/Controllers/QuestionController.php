<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question =  DB::table('question')->get();

        return view('question.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
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
            'qs_id'=>'required',
            'qs_question'=>'required',
            'qs_ch_no_ans'=>'required',
            'qs_ex_time'=>'required',
            'qs_score'=>'required',
            'qs_crs_code'=>'required',
            'qs_tch_code'=>'required',
            'qs_ex_date'=>'required'
        ]);

        DB::table('question')->insert(
        [
            'qs_id' => $request->qs_id, 
            'qs_question' => $request->qs_question,
            'qs_ch_no_ans'=> $request->qs_ch_no_ans,
            'qs_ex_time' => $request->qs_ex_time,
            'qs_score'=> $request->qs_score,
            'qs_crs_code'=> $request->qs_crs_code,
            'qs_tch_code' => $request->qs_tch_code,
            'qs_ex_date'=> $request->qs_ex_date
        
        ]
        );

        return redirect('question');
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
       
        $question = DB::table('question')->where('qs_id','=',$id)->get ();
        return view('question.edit', compact('question'));
        
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
            'qs_id'=>'required',
            'qs_question'=>'required',
            'qs_ch_no_ans'=>'required',
            'qs_ex_time'=>'required',
            'qs_score'=>'required',
            'qs_crs_code'=>'required',
            'qs_tch_code'=>'required',
            'qs_ex_date'=>'required'
        ]);

        DB::table('question')->where('qs_id','=',$id)->update([
            'qs_id' => $request->qs_id, 
            'qs_question' => $request->qs_question,
            'qs_ch_no_ans'=> $request->qs_ch_no_ans,
            'qs_ex_time' => $request->qs_ex_time,
            'qs_score'=> $request->qs_score,
            'qs_crs_code'=> $request->qs_crs_code,
            'qs_tch_code' => $request->qs_tch_code,
            'qs_ex_date'=> $request->qs_ex_date
        ]
        );

        return redirect('question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('question')
        ->where('qs_id','=',$id)
       
        ->delete();
        
        return redirect('question');
    }
}
