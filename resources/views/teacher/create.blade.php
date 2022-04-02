@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Teacher</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('teacher.store') }}" method="POST">

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
                <strong>tch_code</strong>
                <input type="text" name="tch_code" class="form-control" placeholder="vaChar(20)">
            </div>

            <div class="form-group">
                <strong>tch_name</strong>
                <input type="text" name="tch_name" class="form-control" placeholder="vaChar(45)">
            </div>

            <div class="form-group">
                <strong>tch_email</strong>
                <input type="text" name="tch_email" class="form-control" placeholder="vaChar(45)">
            </div>
            <div class="form-group">
                <strong>tch_fac_code</strong>
                <input type="text" name="tch_fac_code" class="form-control" placeholder="vaChar(3)">
            </div>

            <div class="form-group">
                <strong>tch_user_login</strong>
                <input type="text" name="tch_user_login" class="form-control" placeholder="Char(20)">
            </div>
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
