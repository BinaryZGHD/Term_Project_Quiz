@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Enroll</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('enroll.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('enroll.store') }}" method="POST">

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
                <strong>ปีที่ลงทะเบียนรายวิชา</strong>
                <input type="text" name="enr_year" class="form-control" placeholder="ปีที่ลงทะเบียนรายวิชา">
            </div>

            <div class="form-group">
                <strong>เทอมที่ลงทะเบียนรายวิชา</strong>
                <input type="text" name="enr_term" class="form-control" placeholder="เทอมที่ลงทะเบียนรายวิชา">
            </div>

            <div class="form-group">
                <strong>รหัสวิชาที่ลงทะเบียน</strong>
                <input type="text" name="enr_crs_code" class="form-control" placeholder="รหัสวิชาที่ลงทะเบียน">
            </div>
            <div class="form-group">
                <strong>enr_sect</strong>
                <input type="text" name="enr_sect" class="form-control" placeholder="enr_sect">
            </div>
            <div class="form-group">
                <strong>enr_seq</strong>
                <input type="text" name="enr_seq" class="form-control" placeholder="enr_seq">
            </div>
            <div class="form-group">
                <strong>รหัสนักศึกษาที่ลงทะเบียน</strong>
                <input type="text" name="enr_std_code" class="form-control" placeholder="รหัสนักศึกษาที่ลงทะเบียน">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection