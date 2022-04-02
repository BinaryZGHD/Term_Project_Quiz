@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Exam Control</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam_control.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('exam_control.store') }}" method="POST">

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
                <strong>exc_id</strong>
                <input type="text" name="exc_id" class="form-control" placeholder="exc_id">
            </div>
            <div class="form-group">
                <strong>exc_year</strong>
                <input type="text" name="exc_year" class="form-control" placeholder="ปีที่ลงทะเบียนรายวิชา">
            </div>
            <div class="form-group">
                <strong>exc_term</strong>
                <input type="text" name="exc_term" class="form-control" placeholder="exc_term">
            </div>
            <div class="form-group">
                <strong>exc_crs_code</strong>
                <input type="text" name="exc_crs_code" class="form-control" placeholder="exc_crs_code">
            </div>
            <div class="form-group">
                <strong>exc_sect</strong>
                <input type="text" name="exc_sect" class="form-control" placeholder="exc_sect">
            </div>
            <div class="form-group">
                <strong>exc_tch_code</strong>
                <input type="text" name="exc_tch_code" class="form-control" placeholder="exc_tch_code">
            </div>
            <div class="form-group">
                <strong>exc_time</strong>
                <input type="time" name="exc_time" class="form-control" placeholder="exc_time">
            </div>
            <!-- เปลี่ยน int(11) to varchar(11) for exam_control -->
            <div class="form-group">
                <strong>exc_status</strong>
                <input type="text" name="exc_status" class="form-control" placeholder="exc_status">
            </div>
            <div class="form-group">
                <strong>exc_date_start</strong>
                <input type="date" name="exc_date_start" class="form-control" placeholder="exc_date_start">
            </div>
            <div class="form-group">
                <strong>exc_date_stop</strong>
                <input type="date" name="exc_date_stop" class="form-control" placeholder="exc_date_stop">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
