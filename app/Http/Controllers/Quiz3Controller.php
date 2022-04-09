<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
// use App\Models\Quiz3Model;

class Quiz3Controller extends Controller
{
    public function index()
    {
        $quiz3 = DB::table('question')->get(); 
        $quiz32 = DB::table("question")
                    ->select('choice.ch_desc' ,'question.qs_question', 'question.qs_id')
                    ->Join('choice','choice.ch_qs_id','=','question.qs_id') 
                    ->where('question.qs_id',2)
                    ->get();
        return view('quiz3.index',compact('quiz3','quiz32'));
    }
    public function create()
    {
        $question = DB::table('question')->get ();
        $choice = DB::table('choice')->get ();
        return view('quiz3.create',compact('question','choice'));
    }
    public function store(Request $request)
    {
    }
    public function show($id)
    {
        $quiz3 = DB::table('choice')
        ->get(); 
        $quiz32 = DB::table("question")->where('question.qs_id','=',$id)
                    ->leftJoin('choice','question.qs_id','=','choice.ch_qs_id')
                    ->get();        
        return view('quiz3.show',compact('quiz3','quiz32',));         
    }
    public function edit($id)
    {
        $quiz3 = DB::table('choice')->where('ch_qs_id','=',$id)->get ();
        return view('quiz3.edit', compact('quiz3'));
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
