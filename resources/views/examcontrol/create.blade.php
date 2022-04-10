@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มรายการควบคุมข้อสอบ</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam_control.index') }}"> Back</a>
        </div> -->
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
                <strong>ลำดับ</strong>
                <input type="text" name="exc_id" class="form-control" placeholder="ลำดับ">
            </div>
            <div class="form-group">
                <strong>ปีข้อสอบ</strong>
                <input type="text" name="exc_year" class="form-control" placeholder="ปีข้อสอบ">
            </div>
            <div class="form-group">
                <strong>ภาคเรียน</strong>
                <select class="form-control" name="exc_term" id="exc_term">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="S">Summer</option>
                </select>
            </div>
            <div class="form-group">
                <strong>วิชา</strong>
                <select class="form-control" id="exc_crs_code" name="exc_crs_code" require>
                    @foreach ($course as $crs)
                    <option value="{{ $crs->crs_code}}">{{ $crs->crs_code }}&nbsp;//&nbsp;{{ $crs->crs_name }}</option>
                    @endforeach
                </select>
                <!-- <input type="text" name="exc_crs_code" class="form-control" placeholder="exc_crs_code"> -->
            </div>
            <div class="form-group">
                <strong>กลุ่มที่ลงทะเบียน</strong>
                <input type="text" name="exc_sect" class="form-control" placeholder="กลุ่ม">
            </div>
            <div class="form-group">
                <strong>อาจารย์</strong>
                <select class="form-control" id="exc_tch_code" name="exc_tch_code" require>
                    @foreach ($teacher as $tea)
                    <option value="{{ $tea->tch_code}}">{{ $tea->tch_code }}&nbsp;//&nbsp;{{ $tea->tch_name }}</option>
                    @endforeach
                </select>
                <!-- <input type="text" name="exc_tch_code" class="form-control" placeholder="exc_tch_code"> -->
            </div>
            <div class="form-group">
                <strong>ระยะเวลาทำข้อสอบ</strong>
                <input type="time" name="exc_time" class="form-control" min="1" placeholder="เวลาเริ่มทำข้อสอบ">
            </div>
            <!-- เปลี่ยน int(11) to varchar(11) for exam_control -->
            <div class="form-group">
                <strong>สถานะ</strong>
                <input type="radio" name="exc_status" id="exc_status" value="TRUE">TRUE
                <input type="radio" name="exc_status" id="exc_status" value="FALSE">FALSE
                <!-- <input type="text" name="exc_status" class="form-control" placeholder="exc_status"> -->
            </div>
            <div class="form-group">
                <strong>วันที่เริ่มทำข้อสอบ</strong>
                <input type="date" name="exc_date_start" class="form-control" placeholder="วันที่เริ่มทำข้อสอบ">
            </div>
            <div class="form-group">
                <strong>วันที่หมดเวลาทำข้อสอบ</strong>
                <input type="date" name="exc_date_stop" class="form-control" placeholder="วันที่หมดเวลาทำข้อสอบ">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('exam_control.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                          
        </div>
     </div>
</form>
@endsection
