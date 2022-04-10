@extends('layout')
  
@section('content')
<div class="row">
    <br>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขรายวิชา</h2>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('course.index') }}"> Back</a>
        </div> -->
    </div>
</div>

@foreach($course as $crs)
@endforeach

<form action="{{ route('course.update', $crs->crs_code) }}" method="POST">

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
                <strong>รหัสวิชา</strong>
                <input type="text" readonly  value="{{ $crs->crs_code}}" name="crs_code" class="form-control" placeholder="รหัสวิชา">
            </div>

            <div class="form-group">
                <strong>ชื่อวิชา</strong>
                <input type="text" value="{{ $crs->crs_name }}" name="crs_name" class="form-control" placeholder="ชื่อวิชา">
            </div>

            <div class="form-group">
                <strong>สถานะรายวิชา</strong>
                <select class="form-control" name="crs_active" id="crs_active">
                    <option value="Y" @if($crs->crs_active == 'Y') selected @endif>เปิด</option>
                    <option value="N" @if($crs->crs_active == 'N') selected @endif>ปิด</option>
                </select>
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                 <div class="pull-center">
                    <a class="btn btn-primary" href="{{ route('course.index') }}"> ย้อนกลับ</a>
                    <button type="reset" class="btn btn-warning">คืนค่า</button>
                    <button type="submit" class="btn btn-success">บันทึก</button> 
                </div>
            </div>                                                                  
        </div>
     </div>
</form>
@endsection
