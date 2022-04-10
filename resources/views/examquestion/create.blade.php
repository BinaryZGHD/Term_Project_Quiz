@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มข้อสอบและคำถาม</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('exam_question.index') }}"> Back</a>
        </div> -->
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
                <strong>รหัสข้อสอบ</strong>
                <input type="text" name="eq_ex_id" class="form-control" placeholder="รหัสข้อสอบ">
            </div>

            <div class="form-group">
                <strong>ลำดับข้อสอบและตัวเลือก</strong>
                <input type="text" name="eq_seq" class="form-control" placeholder="ลำดับข้อสอบและตัวเลือก">
            </div>

            <div class="form-group">
                <strong>คำถาม</strong>
                <select class="form-control" id="eq_qs_id" name="eq_qs_id" require>
                    @foreach ($question as $q)
                    <option value="{{ $q->qs_id}}">{{ $q->qs_question }}</option>
                    @endforeach
                </select>
                <!-- <strong>รหัสคำถาม</strong>
                <input type="text" name="eq_qs_id" class="form-control" placeholder="รหัสคำถาม"> -->
            </div>

            <div class="form-group">
                <strong>รหัสคำตอบ</strong>
                <input type="text" name="eq_qs_ans" class="form-control" placeholder="รหัสคำตอบ">
            </div>

            <div class="form-group">
                <strong>คะแนนคำถาม</strong>
                <input type="text" name="eq_qs_score" class="form-control" placeholder="คะแนนคำถาม">
            </div>

            <div class="form-group">
                <strong>วันที่และเวลา</strong>
                <input type="date" name="eq_date_time" class="form-control" placeholder="วันที่และเวลา" required pattern="\d{4}-\d{2}-\d{2}">
            </div>

            <div class="form-group">
                <strong>เลขที่คำตอบ</strong>
                <input type="text" name="eq_ans_no" class="form-control" placeholder="เลขที่คำตอบ">
            </div>

            <div class="form-group">
                <strong>คะแนน</strong>
                <input type="text" name="eq_score" class="form-control" placeholder="คะแนน">
            </div>

            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('exam_question.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                         
        </div>
     </div>
</form>
@endsection
