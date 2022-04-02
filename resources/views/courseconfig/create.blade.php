@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Course Config</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('course_config.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('course_config.store') }}" method="POST">

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
                <strong>ปีที่แก้ไขรายวิชา</strong>
                <input type="text" name="ccf_year" class="form-control" placeholder="ปีที่แก้ไขรายวิชา">
            </div>

            <div class="form-group">
                <strong>เทอมที่แก้ไขรายวิชา</strong>
                <input type="text" name="ccf_term" class="form-control" placeholder="เทอมที่แก้ไขรายวิชา">
            </div>

            <div class="form-group">
                <strong>รหัสวิชาที่แก้ไข</strong>
                <input type="text" name="ccf_crs_code" class="form-control" placeholder="รหัสวิชาที่แก้ไข">
            </div>
            <div class="form-group">
                <strong>จำนวนข้อสอบวิชาที่แก้ไข</strong>
                <input type="text" name="ccf_num_exam" class="form-control" placeholder="จำนวนข้อสอบวิชาที่แก้ไข">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
