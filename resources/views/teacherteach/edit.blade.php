@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขรายการสอนของอาจารย์</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('teacher_teach.index') }}"> Back</a>
        </div> -->
    </div>
</div>

@foreach($teacherteach as $teat)
@endforeach

<form action="{{ route('teacher_teach.update', $teat->tt_crs_code) }}" method="POST">

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
         <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
       

            <div class="form-group">
                <strong>ปีการศึกษา</strong>
                <input type="text"   value="{{ $teat->tt_year}}"name="tt_year" class="form-control" placeholder="ปีการศึกษา">
            </div>

            <div class="form-group">
                <strong>ภาคเรียน</strong>
                <input type="text"   value="{{ $teat->tt_term}}"name="tt_term" class="form-control" placeholder="ภาคเรียน">
            </div>

            <div class="form-group">
                <strong>รหัสรายวิชา</strong>
                <input type="text" readonly  value="{{ $teat->tt_crs_code}}"name="tt_crs_code" class="form-control" placeholder="รหัสรายวิชา">
            </div>
            <div class="form-group">
                <strong>กลุ่ม</strong>
                <input type="text"   value="{{ $teat->tt_sect}}"name="tt_sect" class="form-control" placeholder="กลุ่ม">
            </div>

            <div class="form-group">
                <strong>รหัสอาจารย์</strong>
                <input type="text" readonly  value="{{ $teat->tt_tch_code}}" name="tt_tch_code" class="form-control" placeholder="รหัสอาจารย์">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('teacher_teach.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                          
        </div>
     </div>
</form>
@endsection
