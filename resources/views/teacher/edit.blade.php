@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit teacher</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($teacher as $tea)
@endforeach

<form action="{{ route('teacher.update', $tea->tch_code) }}" method="POST">

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
                <strong>tch_code</strong>
                <input type="text" readonly  value="{{ $tea->tch_code}}"name="tch_code" class="form-control" placeholder="Char(4)">
            </div>

            <div class="form-group">
                <strong>tch_name</strong>
                <input type="text"   value="{{ $tea->tch_name}}"name="tch_name" class="form-control" placeholder="Char(1)">
            </div>

            <div class="form-group">
                <strong>tch_email</strong>
                <input type="text"   value="{{ $tea->tch_email}}"name="tch_email" class="form-control" placeholder="vaChar(10)">
            </div>
            <div class="form-group">
                <strong>tch_fac_code</strong>
                <input type="text"   value="{{ $tea->tch_fac_code}}"name="tch_fac_code" class="form-control" placeholder="vaChar(4)">
            </div>

            <div class="form-group">
                <strong>tch_user_login</strong>
                <input type="text"   value="{{ $tea->tch_user_login}}" name="tch_user_login" class="form-control" placeholder="Char(20)">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
