@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขสถานะ</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('statuswork.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($statuswork as $stw)
@endforeach

<form action="{{ route('statuswork.update', $stw->ID) }}" method="POST">

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
                <strong>สร้าง</strong>
                <input type="text" readonly  value="{{ $stw->created_at}}" name="created_at" class="form-control" placeholder="สร้าง">
            </div>

            <div class="form-group">
                <strong>อัพเดต</strong>
                <input type="text" readonly value="{{ $stw->update_at }}" name="update_at" class="form-control" placeholder="อัพเดต">
            </div>
            <div class="form-group">
                <strong>เวลา</strong>
                <input type="time" value="{{$stw->TIME }}" name="TIME" class="form-control" placeholder="เวลา">
            </div>

            <div class="form-group">
                <strong>ผู้ดูแล</strong>
                <input type="text" value="{{$stw->ADMIN }}" name="ADMIN" class="form-control" placeholder="ผู้ดูแล">
            </div>
            <div class="form-group">
                <strong>จำนวนการแก้ไข</strong>
                <input type="text" value="{{ $stw->NUMEDIT }}" name="NUMEDIT" class="form-control" placeholder="จำนวนการแก้ไข">
            </div>

            <div class="form-group">
                <strong>รายละเอียด</strong>
                <input type="text" value="{{$stw->DETAIL }}" name="DETAIL" class="form-control" placeholder="รายละเอียด">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
