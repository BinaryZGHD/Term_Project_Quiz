@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขการสอบ</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam.index') }}"> Back</a>
        </div> -->
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
                <strong>ลำดับ</strong>
                <input type="text" readonly value="{{ $ex->ex_id}}" name="ex_id" class="form-control" placeholder="ลำดับ">
            </div>
            <div class="form-group">
                <strong>ปีการศึกษา</strong>
                <input type="text" value="{{ $ex->ex_year}}" name="ex_year" class="form-control" placeholder="ปีการศึกษา">
            </div>
            <div class="form-group">
                <strong>เทอม</strong>
                <select class="form-control" name="ex_term" id="ex_term">
                    <option value="1" @if($ex->ex_term == 1) selected @endif>1</option>
                    <option value="2" @if($ex->ex_term == 2) selected @endif>2</option>
                    <option value="S" @if($ex->ex_term == 'S') selected @endif>Summer</option>
                </select>
            </div>
            <div class="form-group">
                <strong>วิชา</strong>
                <select class="form-control" id="ex_crs_code" name="ex_crs_code" >
                    <option value="{{$ex->ex_crs_code}}">{{ $ex->crs_code }}&nbsp;//&nbsp;{{ $ex->crs_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <strong>กลุ่ม</strong>
                <input type="text" value="{{ $ex->ex_crs_sect}}" name="ex_crs_sect" class="form-control" placeholder="กลุ่ม">
            </div>
            <div class="form-group">
                <strong>นักศึกษา</strong>
                <select class="form-control" id="ex_std_code" name="ex_std_code" >
                    <option value="{{$ex->ex_std_code}}">{{ $ex->std_code }}&nbsp;//&nbsp;{{ $ex->std_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <strong>ระยะเวลาทำข้อสอบ</strong>
                <input type="text" value="{{ $ex->ex_time }}" name="ex_time" class="form-control" placeholder="ระยะเวลาทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>วันที่เริ่มทำข้อสอบ</strong>
                <input type="date" value="{{ $ex->ex_date_time_start }}" name="ex_date_time_start" class="form-control" placeholder="วันที่เริ่มทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>วันที่หมดเวลาทำข้อสอบ</strong>
                <input type="date" value="{{ $ex->ex_date_time_end }}" name="ex_date_time_end" class="form-control" placeholder="วันที่หมดเวลาทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>คะแนนรวม</strong>
                <input type="text" value="{{ $ex->ex_total_score }}" name="ex_total_score" class="form-control" placeholder="คะแนนรวม">
            </div>
            <div class="form-group">
                <strong>วิธีการส่ง</strong>
                <input type="text" value="{{ $ex->ex_commit_type }}" name="ex_commit_type" class="form-control" placeholder="วิธีการส่ง">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('exam.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                        
        </div>
     </div>
</form>
@endsection
