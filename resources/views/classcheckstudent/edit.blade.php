@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขชั้นตรวจนักศึกษา</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('class_check_student.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($classcheckstudent as $claks)
@endforeach

<form action="{{ route('class_check_student.update', $claks->ccs_cc_id) }}" method="POST">

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
                <strong>รหัสชั้น</strong>
                <input type="text" readonly value="{{ $claks->ccs_cc_id }}" name="ccs_cc_id" class="form-control" placeholder="รหัสชั้น">
            </div>

            <div class="form-group">
                <strong>รหัสนักศึกษา</strong>
                <input type="text"readonly value="{{ $claks->ccs_std_code }}"  name="ccs_std_code" class="form-control" placeholder="รหัสนึกศึกษา">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
