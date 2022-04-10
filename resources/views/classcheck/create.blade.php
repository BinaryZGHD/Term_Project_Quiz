@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มชั้นเรียน</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('class_check.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('class_check.store') }}" method="POST">

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
                <strong>รหัสชั้นเรียน</strong>
                <input type="text" name="cc_id" class="form-control" placeholder="รหัสชั้นเรียน">
            </div>

            <div class="form-group">
                <strong>ปีการศึกษา</strong>
                <input type="text" name="cc_year" class="form-control" placeholder="ปีการศึกษา">
            </div>

            <div class="form-group">
                <strong>เทอม</strong>
                <select class="form-control" name="cc_term" id="cc_term">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="S">Summer</option>
                </select>
            </div>



            <div class="form-group">
                <strong>วิชา</strong>
                <select class="form-control" id="cc_crs_code" name="cc_crs_code" require>
                    @foreach ($course as $crs)
                    <option value="{{ $crs->crs_code}}">{{ $crs->crs_code }}&nbsp;//&nbsp;{{ $crs->crs_name }}</option>
                    @endforeach
                </select>
                <!-- <input type="text" name="cc_crs_code" class="form-control" placeholder="Sting <= 10"> -->
            </div>

            <div class="form-group">
                <strong>กลุ่ม</strong>
                <input type="text" name="cc_sect" class="form-control" placeholder="กลุ่ม">
            </div>

            <div class="form-group">
                <strong>วันที่</strong>
                <input type="date" name="cc_date" class="form-control" placeholder="Date">
            </div>



            <div class="form-group">
                <strong>เวลา</strong>
                <input type="time" name="cc_time" class="form-control" placeholder="Time">
            </div>

            <div class="form-group">
                <strong>เวลาในการทำข้อสอบ(นาที)</strong>
                <input type="number" name="cc_ex_times" class="form-control" min="1" placeholder="เวลาในการทำข้อสอบ">
            </div>

            <div class="form-group">
                <strong>อาจารย์</strong>
                <select class="form-control" id="cc_tch_code" name="cc_tch_code" require>
                    @foreach ($teacher as $tea)
                    <option value="{{ $tea->tch_code}}">{{ $tea->tch_code }}&nbsp;//&nbsp;{{ $tea->tch_name }}</option>
                    @endforeach
                </select>
                <!-- <input type="text" name="cc_tch_code" class="form-control" placeholder="Sting <= 20"> -->
            </div>



            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
