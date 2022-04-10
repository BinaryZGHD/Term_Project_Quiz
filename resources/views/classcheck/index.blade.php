@extends('layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>ตรวจสอบชั้นเรียน  | | <a href="http://dekwat.buu.in.th:15110/statuswork" > STATUS </a></h2>
            <div class="card-header">
				<a class="btn btn-primary" 
                    href="{{ route('class_check.create') }}">Insert</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
        <table class="table table-bordered">
			<tr>
				<td align ="center" >รหัสชั้นเรียน</td>
				<td align ="center" >ปีการศึกษา</td>
				<td align ="center" >ภาคเรียน</td>
				<td align ="center" >วิชา</td>

				<td align ="center" >กลุ่ม</td>
				<td align ="center" >วันที่</td>
				<td align ="center" >เวลา</td>
				<td align ="center" >เวลาทำข้อสอบ(นาที)</td>

				<td align ="center" >อาจารย์</td>
				<td align ="center" colspan=2>เครื่องมือ</td>
			</tr>
			@foreach($classcheck as $clak)
			<tr>
				<td align ="center">{{ $clak->cc_id }}</td>
				<td align ="center" >{{ $clak->cc_year }}</td>
				<td align ="center">{{ $clak->cc_term }}</td>
				<td align ="center" >{{ $clak->crs_name }}</td>

				<td align ="center">{{ $clak->cc_sect }}</td>
				<td align ="center" >{{ $clak->cc_date }}</td>
				<td align ="center">{{ $clak->cc_time }}</td>
				<td align ="center" >{{ $clak->cc_ex_times }}</td>

				<td align ="center" >{{ $clak->tch_name }}</td>


				<td align ="center" >
					<form action="{{ route('class_check.destroy',$clak->cc_id) }}" method="POST" >
						<a class="btn btn-primary" href="{{ route('class_check.edit',$clak->cc_id) }}"> Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete </button>

					</form>
				</td>
			</tr>
			@endforeach
        </table>
	</div>
</div>
@endsection
