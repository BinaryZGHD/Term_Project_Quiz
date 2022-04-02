@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new  STATUS </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('statuswork.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('statuswork.store') }}" method="POST">

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
            <!-- <div class="form-group">
                <strong>created_at</strong>
                <input type="date" name="created_at" class="form-control" placeholder="2022-03-19 00:00:00">
            </div>

            <div class="form-group">
                <strong>update_at</strong>
                <input type="date" name="update_at" class="form-control" placeholder="2022-03-19 00:00:00">
            </div> -->
            <div class="form-group">
                <strong>TIME</strong>
                <input type="time" name="TIME" class="form-control" placeholder="TIME">
            </div>

            <div class="form-group">
                <strong>AMIN ID</strong>
                <input type="text" name="ADMIN" class="form-control" placeholder="ID ADMIN">
            </div>

            <div class="form-group">
                <strong>NUMEDIT</strong>
                <input type="text" name="NUMEDIT" class="form-control" placeholder="จำนวนครั้งที่ระบุรายละเอียด +1 ของตัวเองทุกครั้งที่เพิ่ม">
            </div>

            <div class="form-group">
                <strong>DETAIL</strong>
                <input type="text" name="DETAIL" class="form-control" placeholder="รายละเอียด">
            </div>
           
            
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
