@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดง การกำหนดค่าหลักสูตร  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('course_config.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">ปีการศึกษา</td>
				<td align ="center">เทอม</td>
				<td align ="center">รายวิชา</td>
				<td align ="center">จำนวนการสอบ</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($course_config as $ccf)
			<tr>
				<td align ="center">{{ $ccf->ccf_year }}</td>
				<td align ="center">{{ $ccf->ccf_term }}</td>
				<td align ="center">{{ $ccf->crs_name }}</td>
				<td align ="center">{{ $ccf->ccf_num_exam }}</td>
				<td align ="center">

				<form action="{{ route('course_config.destroy',['ccf_year'=>$ccf->ccf_year,'ccf_term'=>$ccf->ccf_term,'ccf_crs_code'=>$ccf->ccf_crs_code]  ) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('course_config.edit',$ccf->ccf_crs_code) }}"> Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>

					</form>
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
