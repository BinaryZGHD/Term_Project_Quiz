@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Exam Question</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam_question.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('exam_question.store') }}" method="POST">

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
                <strong>eq_ex_id</strong>
                <input type="text" name="eq_ex_id" class="form-control" placeholder="eq_ex_id (INT)">
            </div>

            <div class="form-group">
                <strong>eq_seq</strong>
                <input type="text" name="eq_seq" class="form-control" placeholder="eq_seq (INT)">
            </div>

            <div class="form-group">
                <strong>eq_qs_id</strong>
                <input type="text" name="eq_qs_id" class="form-control" placeholder="eq_qs_id">
            </div>

            <div class="form-group">
                <strong>eq_qs_ans</strong>
                <input type="text" name="eq_qs_ans" class="form-control" placeholder="eq_qs_ans">
            </div>

            <div class="form-group">
                <strong>eq_qs_score</strong>
                <input type="text" name="eq_qs_score" class="form-control" placeholder="eq_qs_score">
            </div>

            <div class="form-group">
                <strong>eq_date_time</strong>
                <input type="date" name="eq_date_time" class="form-control" placeholder="eq_date_time" required pattern="\d{4}-\d{2}-\d{2}">
            </div>

            <div class="form-group">
                <strong>eq_ans_no</strong>
                <input type="text" name="eq_ans_no" class="form-control" placeholder="eq_ans_no">
            </div>

            <div class="form-group">
                <strong>eq_score</strong>
                <input type="text" name="eq_score" class="form-control" placeholder="eq_score">
            </div>

            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
