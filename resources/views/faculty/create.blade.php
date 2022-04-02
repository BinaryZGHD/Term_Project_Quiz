@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Faculty</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('faculty.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('faculty.store') }}" method="POST">

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
                <strong>fac_code</strong>
                <input type="text" name="fac_code" class="form-control" placeholder="fac_code (INT)">
            </div>

            <div class="form-group">
                <strong>fac_name</strong>
                <input type="text" name="fac_name" class="form-control" placeholder="fac_name (INT)">
            </div>

         
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
