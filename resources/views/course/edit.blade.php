@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Course</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('course.index') }}"> Back</a>
        </div>
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
                <strong>crs_active</strong>
                <input type="text" value="{{ $crs->crs_active }}" name="crs_active" class="form-control" placeholder="crs_active">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
