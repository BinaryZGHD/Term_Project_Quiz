@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ลงทะเบียน</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('enroll.index') }}"> Back</a>
        </div> -->
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
                <strong>ปีการศึกษา</strong>
                <input type="number" name="enr_year" class="form-control" required  min="2555" max="2575" placeholder="ปีการศึกษา">
            </div>
            <div class="form-group">
                <strong>เทอม</strong>
                <select class="form-control" id="enr_term" name="enr_term" require>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="S">Summer</option>
                </select>
            </div>
            <div class="form-group">
                <strong>วิชา</strong>
                <select class="form-control" id="enr_crs_code" name="enr_crs_code" require>
                    @foreach ($course as $crs)
                    <option value="{{ $crs->crs_code}}">{{ $crs->crs_code }}&nbsp;//&nbsp;{{ $crs->crs_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>กลุ่ม</strong>
                <input type="number" id="enr_crs_code" name="enr_sect" class="form-control" min="1" required placeholder="กลุ่ม">
            </div>
            <div class="form-group">
                <strong>เลขที่</strong>
                <input type="text" name="enr_seq" class="form-control" placeholder="เลขที่">
            </div>
            <div class="form-group">
                <strong>รหัสนักศึกษาที่ลงทะเบียน</strong>
                <select class="form-control" id="enr_std_code" name="enr_std_code" require>
                    @foreach ($student as $std)
                    <option value="{{ $std->std_code}}">{{ $std->std_code }}&nbsp;//&nbsp;{{ $std->std_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('enroll.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                  
        </div>
     </div>
</form>
@endsection
