@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Question</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('question.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('question.store') }}" method="POST">

    @csrf
    <div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif   
    </div> 
         
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>qs_id</strong>
                <input type="text" name="qs_id" class="form-control" placeholder="int">
            </div>

            <div class="form-group">
                <strong>qs_question</strong>
                <input type="text"   name="qs_question" class="form-control" placeholder="text">
            </div>

            <div class="form-group">
                <strong>qs_ch_no_ans</strong>
                <input type="text"  name="qs_ch_no_ans" class="form-control" placeholder="int">
            </div>
            <div class="form-group">
                <strong>qs_ex_time</strong>
                <input type="time"   name="qs_ex_time" class="form-control" placeholder="int">
                <!-- ใน php เราเป็น int(11) เป็น vachar ของ qs_ex_time -->
            </div>

            <div class="form-group">
                <strong>qs_score</strong>
                <input type="text"    name="qs_score" class="form-control" placeholder="int">
            </div>

            <div class="form-group">
                <strong>qs_crs_code</strong>
                <input type="text"   name="qs_crs_code" class="form-control" placeholder="vaChar(10)">
            </div>
            <div class="form-group">
                <strong>qs_tch_code</strong>
                <input type="text"   name="qs_tch_code" class="form-control" placeholder="vaChar(20)">
            </div>

            <div class="form-group">
                <strong>qs_ex_date</strong>
                <input type="date"    name="qs_ex_date" class="form-control" placeholder=" ">
            </div>
        
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
