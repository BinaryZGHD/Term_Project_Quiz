@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new  Employee </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('employee.store') }}" method="POST">

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
                <strong>รหัสพนักงาน</strong>
                <input type="text" name="emp_id" class="form-control" placeholder="รหัสพนักงาน">
            </div>

            <div class="form-group">
                <strong>ชื่อ</strong>
                <input type="text" name="emp_name" class="form-control" placeholder="ชื่อ">
            </div>

            <div class="form-group">
                <strong>นามสกุล</strong>
                <input type="text" name="emp_lname" class="form-control" placeholder="นามสกุล">
            </div>

            <div class="form-group">
                <strong>ตำแหน่ง</strong>
                <input type="text" name="job" class="form-control" placeholder="ตำแหน่ง">
            </div>

            <div class="form-group">
                <strong>จำนวนชั่วโมง</strong>
                <input type="text" name="chg_hour" class="form-control" placeholder="จำนวนชั่วโมง">
            </div>
           
            
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
