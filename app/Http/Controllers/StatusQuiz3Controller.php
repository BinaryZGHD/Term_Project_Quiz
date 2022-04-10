<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
// use App\Models\Quiz3Model;

class StatusQuiz3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // SELECT c.ch_desc
    // FROM 
    // `question` AS q 
    // JOIN choice  as c ON c.ch_qs_id = q.qs_id
    // WHERE  qs_id = 1
    public function index()
    {
        $quiz3 = DB::table('question')->get(); 
        $quiz32 = DB::table("question")
        // ->where('ch_qs_id',$quiz31->qs_id)
            //  ->leftJoin('choice','question.qs_id','=','choice.ch_qs_id')
                    // ->leftJoin('Products','choice.ProdNo','=','Products.ProdNo')
                    // ->get();
      
                    // $pretests =  DB::table('question')
                    ->select('choice.ch_desc' ,'question.qs_question', 'question.qs_id')
                    ->Join('choice','choice.ch_qs_id','=','question.qs_id') 
                    ->where('question.qs_id',2)
                    
        
        // ->groupBy("question.qs_question")
        // ->where('ch_qs_id',$quiz31->qs_id)
                 
                    // ->leftJoin('Products','choice.ProdNo','=','Products.ProdNo')
                    ->get();
        
        $quiz39 = DB::table('choice')->get();
        return view('elle.index2',compact('quiz3','quiz32','quiz39'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = DB::table('question')->get ();
        $choice = DB::table('choice')->get ();
        
        
        return view('elle.create',compact('question','choice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('choice')->insert(
        // [
        //     'ch_qs_id' => $request->ch_qs_id, //emp_id ตัวขวาคือ ตัวที่รับมาจากแบบฟอร์ม insert ซ้ายคือตัวแปร
        //     'ch_no' => $request->ch_no,
        //     'ch_desc'=> $request->ch_desc
        // ]
        // );
        // DB::beginTransaction();
        // try{
        //     DB::table('working')->insert(
        //     [
        //         'date_work' => $request->date_work,
        //         'proj_id' => $request->proj_id,
        //         'emp_id'=> $request->emp_id,
        //         'work_hours'=> $request->work_hours
        //     ]);
    
        //     DB::select('call CalculateWorkingRate(?,?,?)',
        //                 [$request->proj_id,$request->emp_id,$request->work_hours]);
        //     } catch(ValidationException $e){
        //         DB::rollback();
        //     }
    
        // DB::commit();
        // return redirect('choice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz3 = DB::table('choice')
       
        // ->where('choice.ch_qs_id','=',$id)
        ->get(); 
        $quiz32 = DB::table("question")->where('question.qs_id','=',$id)
                    // ->where('ch_qs_id',$quiz31->qs_id)
                    ->leftJoin('choice','question.qs_id','=','choice.ch_qs_id')
                    // ->leftJoin('Products','choice.ProdNo','=','Products.ProdNo')
                    ->get();
      
      
                    
        return view('elle.show',compact('quiz3','quiz32',));         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $quiz3 = DB::table('choice')->where('ch_qs_id','=',$id)->get ();
        return view('elle.edit', compact('quiz3'));
        
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
        // $request->validate([
        //     'ch_qs_id'=>'required',
        //     'ch_no'=>'required',
        //     'ch_desc'=>'required'
        // ]);
    
        // DB::table('choice')->where('ch_qs_id','=',$id)->update([
        //     'ch_qs_id' => $request->ch_qs_id,
        //     'ch_no' => $request->ch_no,
        //     'ch_desc' => $request->ch_desc
        // ]);
        // return redirect('choice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('choice')
        // ->where('ch_qs_id','=',$id)
        // ->where('ch_no','=',$id)
        // ->delete();
        
        // return redirect('choice');
    }
}
