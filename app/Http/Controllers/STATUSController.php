<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class STATUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuswork = DB::table('STATUS')->get();

        return view('statuswork.index',compact('statuswork'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statuswork.create');
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
            // 'created_at'=>'required',
            // 'update_at' =>'required',
            'TIME'=> 'required',
            'ADMIN'=> 'required',
            'NUMEDIT' => 'required',
            'DETAIL'=> 'required'
        ]);

        DB::table('STATUS')->insert(
        [
            'created_at' => $request->created_at,
            'update_at' => $request->update_at,
            'TIME'=> $request->TIME,
            'ADMIN'=> $request->ADMIN,
            'NUMEDIT' => $request->NUMEDIT,
            'DETAIL'=> $request->DETAIL
        ]
        );

        return redirect('statuswork');
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
       
        $statuswork = DB::table('STATUS')->where('ID','=',$id)->get ();
        return view('statuswork.edit', compact('statuswork'));
        
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
            // 'created_at'=>'required',
            // 'update_at' =>'required',
            'TIME'=> 'required',
            'ADMIN'=> 'required',
            'NUMEDIT' => 'required',
            'DETAIL'=> 'required'
        ]);

        DB::table('STATUS')->where('ID','=',$id)->update([
            'created_at' => $request->created_at,
            'update_at' => $request->update_at,
            'TIME'=> $request->TIME,
            'ADMIN'=> $request->ADMIN,
            'NUMEDIT' => $request->NUMEDIT,
            'DETAIL'=> $request->DETAIL
        ]
        );

        return redirect('statuswork');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('STATUS')
        // ->where('ADMIN','=',$id)
        ->where('ID','=',$id)
        ->delete();
        
        return redirect('statuswork');
    }
}
