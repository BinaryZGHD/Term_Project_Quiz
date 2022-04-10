@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขรายชื่อนิสิต</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
        </div> -->
    </div>
</div>

@foreach($student as $std)
@endforeach

<form action="{{ route('student.update', $std->std_code) }}" method="POST">

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
                <strong>รหัสนักศึกษา</strong>
                <input type="text" readonly  value="{{ $std->std_code}}"name="std_code" class="form-control" placeholder="รหัสนักศึกษา">
            </div>

            <div class="form-group">
                <strong>ชื่อนักศึกษา</strong>
                <input type="text"   value="{{ $std->std_name}}"name="std_name" class="form-control" placeholder="ชื่อนักศึกษา">
            </div>

            <div class="form-group">
                <strong>อีเมล</strong>
                <input type="text"   value="{{ $std->std_email}}"name="std_email" class="form-control" placeholder="อีเมลล์">
            </div>
            <div class="form-group">
                <strong>คณะที่สังกัด</strong>
                <select class="form-control" name="std_fac_code" id="std_fac_code" require>
                    @foreach ($faculty as $fac)
                    <option value="{{$fac->fac_code}}">{{$fac->fac_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <strong>ผู้ใช้งาน</strong>
                <input type="text"   value="{{ $std->std_user_login}}" name="std_user_login" class="form-control" placeholder="ผู้ใช้งาน">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('student.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
