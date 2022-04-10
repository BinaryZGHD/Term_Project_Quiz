@extends('layout')
@section('content')
<div class="row">
	<br>
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>แสดงรายการควบคุมข้อสอบ | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('exam_control.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center">ลำดับ</td>
				<td align ="center">ปีการศึกษา</td>
				<td align ="center">ภาคเรียน</td>
				<td align ="center">วิชา</td>
				<td align ="center">กลุ่มที่ลงทะเบียน</td>
				<td align ="center">อาจารย์</td>
				<td align ="center">เวลาเริ่มทำข้อสอบ</td>
				<td align ="center">สถานะ</td>
				<td align ="center">วันที่เริ่มทำข้อสอบ</td>
				<td align ="center">วันที่หมดเวลาทำข้อสอบ</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($exam_control as $exc)
			<tr>
				<td align ="center">{{ $exc->exc_id }}</td>
				<td align ="center">{{ $exc->exc_year }}</td>
				<td align ="center">{{ $exc->exc_term }}</td>
				<td align ="center">{{ $exc->crs_name }}</td>
				<td align ="center">{{ $exc->exc_sect }}</td>
				<td align ="center">{{ $exc->tch_name }}</td>
				<td align ="center">{{ $exc->exc_time }}</td>
				<td align ="center">{{ $exc->exc_status }}</td>
				<td align ="center">{{ $exc->exc_date_start }}</td>
				<td align ="center">{{ $exc->exc_date_stop }}</td>
				<td align ="center">
					<!-- เปลี่ยน int(11) to varchar(11) for exam_control -->
					<form action="{{ route('exam_control.destroy',['exc_id'=>$exc->exc_id]) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('exam_control.edit',$exc->exc_id) }}"> Edit</a>
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
