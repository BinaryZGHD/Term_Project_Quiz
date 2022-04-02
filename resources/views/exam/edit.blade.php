@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Exam</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($exam as $ex)
@endforeach

<form action="{{ route('exam.update', $ex->ex_id) }}" method="POST">

    @csrf
    @method("PUT")

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

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ex_id</strong>
                <input type="text" value="{{ $ex->ex_id}}" name="ex_id" class="form-control" placeholder="ex_id">
            </div>
            <div class="form-group">
                <strong>ex_year</strong>
                <input type="text" value="{{ $ex->ex_year}}" name="ex_year" class="form-control" placeholder="ex_year">
            </div>
            <div class="form-group">
                <strong>ex_term</strong>
                <input type="text" value="{{ $ex->ex_term}}" name="ex_term" class="form-control" placeholder="ex_term">
            </div>
            <div class="form-group">
                <strong>ex_crs_code</strong>
                <input type="text" value="{{ $ex->ex_crs_code}}" name="ex_crs_code" class="form-control" placeholder="ex_crs_code">
            </div>
            <div class="form-group">
                <strong>ex_crs_sect</strong>
                <input type="text" value="{{ $ex->ex_crs_sect}}" name="ex_crs_sect" class="form-control" placeholder="ex_crs_sect">
            </div>
            <div class="form-group">
                <strong>ex_std_code</strong>
                <input type="text" value="{{ $ex->ex_std_code}}" name="ex_std_code" class="form-control" placeholder="ex_std_code">
            </div>
            <div class="form-group">
                <strong>ex_time</strong>
                <input type="text" value="{{ $ex->ex_time }}" name="ex_time" class="form-control" placeholder="ex_time">
            </div>
            <div class="form-group">
                <strong>ex_date_time_start</strong>
                <input type="text" readonly value="{{$ex->ex_date_time_start }}" name="ex_date_time_start" class="form-control" placeholder="ex_date_time_start">
            </div>
            <div class="form-group">
                <strong>ex_date_time_end</strong>
                <input type="text" value="{{$ex->ex_date_time_end }}" name="ex_date_time_end" class="form-control" placeholder="ex_date_time_end">
            </div>
            <div class="form-group">
                <strong>ex_total_score</strong>
                <input type="text" value="{{$ex->ex_total_score }}" name="ex_total_score" class="form-control" placeholder="ex_total_score">
            </div>
            <div class="form-group">
                <strong>ex_commit_type</strong>
                <input type="text" value="{{$ex->ex_commit_type }}" name="ex_commit_type" class="form-control" placeholder="ex_commit_type">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
