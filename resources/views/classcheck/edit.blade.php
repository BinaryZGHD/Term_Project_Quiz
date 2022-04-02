@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit classcheck</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('class_check.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($classcheck  as $clck)
@endforeach

<form action="{{ route('class_check.update', $clck->cc_id) }}" method="POST">

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
                <strong>Class ID</strong>
                <input type="text"readonly value="{{ $clck->cc_id}}"  name="cc_id" class="form-control" placeholder=" INT">
            </div>

            <div class="form-group">
                <strong>Year</strong>
                <input type="text" value="{{ $clck->cc_year}}"name="cc_year" class="form-control" placeholder="Sting <= 4 ">
            </div>

            <div class="form-group">
                <strong>Term</strong>
                <input type="text" value="{{ $clck->cc_term}}"name="cc_term" class="form-control" placeholder="Sting = 1">
            </div>



            <div class="form-group">
                <strong>Stude Code</strong>
                <input type="text" value="{{ $clck->cc_crs_code}}"name="cc_crs_code" class="form-control" placeholder="Sting <= 10">
            </div>

            <div class="form-group">
                <strong>Sect</strong>
                <input type="text" value="{{ $clck->cc_sect}}"name="cc_sect" class="form-control" placeholder="Sting <= 4">
            </div>

            <div class="form-group">
                <strong>Date</strong> 
                <input type="date" value="{{ $clck->cc_date}}"name="cc_date" class="form-control" placeholder="Date">
            </div>



            <div class="form-group">
                <strong>Time</strong>
                <input type="time" value="{{ $clck->cc_time}}"name="cc_time" class="form-control" placeholder="Time">
            </div>

            <div class="form-group">
                <strong>ExamTime</strong>
                <input type="text" value="{{ $clck->cc_ex_times}}"name="cc_ex_times" class="form-control" placeholder="Sting <= 20">
            </div>

            <div class="form-group">
                <strong>TeacherCode</strong>
                <input type="text" value="{{ $clck->cc_tch_code}}"name="cc_tch_code" class="form-control" placeholder="Sting <= 20">
            </div>

            


            

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
