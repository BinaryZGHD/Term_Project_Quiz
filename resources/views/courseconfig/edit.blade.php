@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>แก้ไขการกำหนดค่าหลักสูตร</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('course_config.index') }}"> Back</a>
        </div>
    </div>
</div>

@foreach($course_config as $ccf)
@endforeach

<form action="{{ route('course_config.update', $ccf->ccf_crs_code) }}" method="POST">

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
                <strong>รหัสวิชาที่แก้ไข</strong> <br>
                <!-- <input type="text" readonly value="{{ $ccf->ccf_crs_code }}" name="ccf_crs_code" class="form-control" placeholder="{{ $ccf->crs_name }}">  -->
                <select class="form-control" id="ccf_crs_code" name="ccf_crs_code" require  readonly>
                    <option readonly value="{{ $ccf->ccf_crs_code }}">{{ $ccf->crs_name }}</option>
                </select>
            </div>
            <div class="form-group">
                <strong>ปีที่แก้ไขรายวิชา</strong>
                <!-- <input type="text" value="{{ $ccf->ccf_year}}" name="ccf_year" class="form-control" min="2555" max="2575" placeholder="ปีที่แก้ไขรายวิชา (2555 - 2575)" > -->
                <select class="form-control" id="ccf_year" name="ccf_year" require placeholder="ปีที่แก้ไขรายวิชา (2555 - 2575)">
                    <option value="2565">2565</option>
                    <option value="2566">2566</option>
                    <option value="2567">2567</option>
                    <option value="2568">2568</option>
                    <option value="2569">2569</option>
                    <option value="2570">2570</option>
                    <option value="2571">2571</option>
                    <option value="2572">2572</option>
                    <option value="2573">2573</option>
                    <option value="2574">2574</option>
                    <option value="2575">2575</option>
                </select>
            </div>

            <div class="form-group">
                <strong>เทอมที่แก้ไขรายวิชา</strong>
                <select class="form-control" id="ccf_term" name="ccf_term" require placeholder="เทอมที่แก้ไขรายวิชา">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="S">S</option>
                </select>
                <!-- <input type="text" value="{{ $ccf->ccf_term }}" name="ccf_term" class="form-control" placeholder="เทอมที่แก้ไขรายวิชา"> -->
            </div>
            <div class="form-group">
                <strong>จำนวนข้อสอบวิชาที่แก้ไข</strong>
                <input type="text" value="{{$ccf->ccf_num_exam }}" name="ccf_num_exam" class="form-control" placeholder="จำนวนข้อสอบวิชาที่แก้ไข">
            </div>

        
           
            <div class="card-footer ml-auto mr-auto" align=center>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">แก้ไข</button> 
            </div>                                                                    
        </div>
     </div>
</form>
@endsection
