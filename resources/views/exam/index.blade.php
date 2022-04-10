@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>การสอบ  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('exam.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">ลำดับ</td>
				<td align ="center">ปี</td>
				<td align ="center">เทอม</td>
				<td align ="center">รหัสวิชา</td>
				<td align ="center">กลุ่ม</td>
				<td align ="center">นักศึกษา</td>
				<td align ="center">ระยะเวลาทำข้อสอบ</td>
				<td align ="center">วันที่เริ่มทำข้อสอบ</td>
				<td align ="center">วันที่หมดเวลาทำข้อสอบ</td>
				<td align ="center">คะแนนรวม</td>
				<td align ="center">วิธีการส่ง</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($exam as $ex)
			<tr>
				<td align ="center">{{ $ex->ex_id }}</td>
				<td align ="center">{{ $ex->ex_year }}</td>
				<td align ="center">{{ $ex->ex_term }}</td>
				<td align ="center">{{ $ex->crs_name }}</td>
				<td align ="center">{{ $ex->ex_crs_sect }}</td>
				<td align ="center">{{ $ex->std_name }}</td>
				<td align ="center">{{ $ex->ex_time }}</td>
				<td align ="center">{{ $ex->ex_date_time_start }}</td>
				<td align ="center">{{ $ex->ex_date_time_end }}</td>
				<td align ="center">{{ $ex->ex_total_score }}</td>
				<td align ="center">{{ $ex->ex_commit_type }}</td>
				<td align ="center">
					<form action="{{ route('exam.destroy',['ex_id'=>$ex->ex_id,'ex_std_code'=>$ex->ex_std_code]) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('exam.edit',$ex->ex_id) }}"> Edit</a>
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
