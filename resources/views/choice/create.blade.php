@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มตัวเลือก</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('choice.index') }}"> Back</a>
        </div> -->
    </div>
</div>
   
<form action="{{ route('choice.store') }}" method="POST">

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
                <strong>คำถาม</strong>
                <!-- <input type="text" name="ch_qs_id" class="form-control" placeholder="คำถามที่"> -->
                <select class="form-control" id="ch_qs_id" name="ch_qs_id" require>
                    @foreach ($question as $qs)
                    <option value="{{ $qs->qs_id}}">{{ $qs->qs_id }}).{{ $qs->qs_question }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <strong>ตัวเลือก</strong>
                <!-- <input type="text" name="ch_no" class="form-control" placeholder="ตัวเลือกที่"> -->
                <select class="form-control" id="ch_no" name="ch_no" require>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="form-group">
                <strong>คำอธิบายตัวเลือก</strong>
                <input type="text" name="ch_desc" class="form-control" placeholder="คำอธิบายตัวเลือก">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('choice.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                        
        </div>
     </div>
</form>
@endsection
