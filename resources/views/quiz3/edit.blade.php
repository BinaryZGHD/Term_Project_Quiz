@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ข้อสอบข้อที่ $quiz3->qs_id</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('choice.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($quiz3 as $qu)
@endforeach

<form action="{{ route('choice.update', $cho->ch_qs_id) }}" method="POST">

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
                <strong>รหัสพนักงาน</strong>
                <input type="text" readonly  value="{{ $cho->ch_qs_id}}" name="ch_qs_id" class="form-control" placeholder="รหัสตัวเลือก">
            </div>

            <div class="form-group">
                <strong>ชื่อ</strong>
                <input type="text" value="{{ $cho->ch_no }}" name="ch_no" class="form-control" placeholder="เลขที่ตัวเลือก">
            </div>

            <div class="form-group">
                <strong>นามสกุล</strong>
                <input type="text" value="{{$cho->ch_desc }}" name="ch_desc" class="form-control" placeholder="อธิบายตัวเลือก">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
