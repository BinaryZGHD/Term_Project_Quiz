@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit teacherteach</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('teacher_teach.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($teacherteach as $teat)
@endforeach

<form action="{{ route('teacher_teach.update', $teat->tt_crs_code) }}" method="POST">

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
                <strong>tt_year</strong>
                <input type="text" readonly  value="{{ $teat->tt_year}}"name="tt_year" class="form-control" placeholder="Char(4)">
            </div>

            <div class="form-group">
                <strong>tt_term</strong>
                <input type="text"   value="{{ $teat->tt_term}}"name="tt_term" class="form-control" placeholder="Char(1)">
            </div>

            <div class="form-group">
                <strong>tt_crs_code</strong>
                <input type="text"   value="{{ $teat->tt_crs_code}}"name="tt_crs_code" class="form-control" placeholder="vaChar(10)">
            </div>
            <div class="form-group">
                <strong>tt_sect</strong>
                <input type="text"   value="{{ $teat->tt_sect}}"name="tt_sect" class="form-control" placeholder="vaChar(4)">
            </div>

            <div class="form-group">
                <strong>tt_tch_code</strong>
                <input type="text"   value="{{ $teat->tt_tch_code}}" name="tt_tch_code" class="form-control" placeholder="Char(20)">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
