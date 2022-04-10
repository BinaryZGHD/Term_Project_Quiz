@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>เพิ่มคณะที่สังกัด</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('faculty.index') }}"> Back</a>
        </div> -->
    </div>
</div>
   
<form action="{{ route('faculty.store') }}" method="POST">

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
                <strong>รหัสคณะ</strong>
                <input type="text" name="fac_code" class="form-control" placeholder="โปรดใส่รหัสคณะ">
            </div>

            <div class="form-group">
                <strong>ชื่อคณะ</strong>
                <input type="text" name="fac_name" class="form-control" placeholder="โปรดใส่ชื่อคณะ">
            </div>

         
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('faculty.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                        
        </div>
     </div>
</form>
@endsection
