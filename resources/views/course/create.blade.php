@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Course</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('course.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('course.store') }}" method="POST">

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
                <strong>รหัสวิชา</strong>
                <input type="text" name="crs_code" class="form-control" placeholder="รหัสวิชา (INT)">
            </div>

            <div class="form-group">
                <strong>ชื่อวิชา</strong>
                <input type="text" name="crs_name" class="form-control" placeholder="ชื่อวิชา (INT)">
            </div>

            <div class="form-group">
                <strong>crs_active</strong>
                <input type="text" name="crs_active" class="form-control" placeholder="crs_active">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
