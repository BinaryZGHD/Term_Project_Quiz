@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Choice</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('choice.index') }}"> Back</a>
        </div>
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
                <strong>รหัสตัวเลือก</strong>
                <input type="text" name="ch_qs_id" class="form-control" placeholder="รหัสตัวเลือก (INT)">
            </div>

            <div class="form-group">
                <strong>เลขที่ตัวเลือก</strong>
                <input type="text" name="ch_no" class="form-control" placeholder="เลขที่ตัวเลือก (INT)">
            </div>

            <div class="form-group">
                <strong>อธิบายตัวเลือก</strong>
                <input type="text" name="ch_desc" class="form-control" placeholder="อธิบายตัวเลือก">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
