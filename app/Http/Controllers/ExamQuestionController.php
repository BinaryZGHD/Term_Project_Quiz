<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ExamQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examquestion = DB::table('exam_question')->get();

        return view('examquestion.index',compact('examquestion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = DB::table('question')
                            ->get();
        return view('examquestion.create',compact('question'));
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
            'eq_ex_id'=>'required',
            'eq_seq'=>'required',
            'eq_qs_id'=>'required',
            'eq_qs_ans'=>'required',
            'eq_qs_score'=>'required',
            'eq_date_time'=>'required',
            'eq_ans_no'=>'required',
            'eq_score'=>'required',
        ]);

        DB::table('exam_question')->insert(
        [
            'eq_ex_id' => $request->eq_ex_id, 
            'eq_seq' => $request->eq_seq,
            'eq_qs_id' => $request->eq_qs_id,
            'eq_qs_ans' => $request->eq_qs_ans,
            'eq_qs_score' => $request->eq_qs_score,
            'eq_date_time' => $request->eq_date_time,
            'eq_ans_no' => $request->eq_ans_no,
            'eq_score' => $request->eq_score,
            
            
        ]
        );

        return redirect('exam_question');
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
        $examquestion = DB::table('exam_question')->where('eq_ex_id','=',$id)->get ();
        return view('examquestion.edit', compact('examquestion'));
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
            'eq_ex_id'=>'required',
            'eq_seq'=>'required',
            'eq_qs_id'=>'required',
            'eq_qs_ans'=>'required',
            'eq_qs_score'=>'required',
            'eq_date_time'=>'required',
            'eq_ans_no'=>'required',
            'eq_score'=>'required'
            
            
        ]);

        DB::table('exam_question')->where('eq_ex_id','=',$id)->update([
            'eq_ex_id' => $request->eq_ex_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
            'eq_seq' => $request->eq_seq,
            'eq_qs_id' => $request->eq_qs_id,
            'eq_qs_ans' => $request->eq_qs_ans,
            'eq_qs_score' => $request->eq_qs_score,
            'eq_date_time' => $request->eq_date_time,
            'eq_ans_no' => $request->eq_ans_no,
            'eq_score' => $request->eq_score,
            
        ]
        );

        return redirect('exam_question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('exam_question')
        ->where('eq_ex_id','=',$id)
        ->where('eq_seq','=',$id)
        ->where('eq_qs_id','=',$id)
        ->where('eq_qs_ans','=',$id)
        ->where('eq_qs_score','=',$id)
        ->where('eq_date_time','=',$id)
        ->where('eq_ans_no','=',$id)
        ->where('eq_score','=',$id)
        ->delete();
        
        return redirect('exam_question');
    }
}
